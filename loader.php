<?php

/**
 * @projeto: sistemaphp
 * @nome: loader.php 
 * @Descrição: Arquivo de carrega a aplicação web e chama o Controller.class.php
 * @copyright (c) 07/01/2018, Iury Gomes - IFTO
 * @autor Iury Gomes de Oliveira 
 * @email iury.oliveira@ifto.edu.br
 * @versão: 1.0
 */
// Evita que o usuário acesse o arquivo diretamente, redirecionando para index.php
if (basename($_SERVER["PHP_SELF"]) == basename(__FILE__)):
    header('Location: index.php');
endif;

// VERIFICAR SE USUARIO ESTÁ LOGADO ################################################################
function UsuarioLogado() {

    $logado = false;
    
    // Esta condição será executada na primeira execução do sistema
    if (isset($_SESSION['sessao'])):

        $logado = true;
        return $logado;
    endif;

    // Este laço de repetição serve para obter o ID do usuario
    $ID = null;
    foreach ($_COOKIE as $chave => $valor):

        if (!$ID && ($chave != 'PHPSESSID')):
            $ID = $chave;
        endif;

    endforeach;

    if (( isset($_COOKIE['PHPSESSID']) ) && ( isset($_COOKIE[$ID]) )):

        $Login = new Login();
        $ID = (string) $ID;
        $resultado = $Login->BuscarUsuario($ID);
        //var_dump($resultado);
        // Monta um token com informações contendo email, senha e nome da sessão
        $Token = implode('#', array($_COOKIE['PHPSESSID'], $resultado['EMAIL'], $resultado['SENHA']));

        // Encripta o valor do Token
        $TokenEncriptado = $Login->EncriptarString($Token);

        if ($TokenEncriptado == $_COOKIE[$ID]):

            $_SESSION['sessao'] = $_COOKIE['PHPSESSID'];
            $logado = true;
        endif;

    endif;

    return $logado;
}

// CARREGAMENTO AUTOMATICO DE CLASSES ###############################################################
/**
 * Função do PHP que registra qual função será responsável pelo carregamento automatico de classes
 * @param string 'CarregarClasse' É o nome da função que realizará o carregamento automatico
 */
spl_autoload_register('CarregarClasse');

/**
 * @projeto: sistemaphp
 * @nome: CarregarClasse() 
 * @Descrição: Realiza o carregamento automatico de classes do sistema
 * @copyright (c) 07/01/2018, Iury Gomes - IFTO
 * @autor Iury Gomes de Oliveira 
 * @email iury.oliveira@ifto.edu.br
 * @versão: 1.0
 * @param string $classe Nome da classe que deve ser carregada
 */
function CarregarClasse($classe) {

    // Nomes dos diretorios que contem os arquivos das classes
    $diretorio = ['auxiliares','controller', 'model', 'view'];

    // Serve para verificar se a inclusao ocorreu
    $inclusao = null;


    // Explicação:
    // Se arquivo existe, e além disso não é um diretorio, então é um arquivo de classe
    // tente realizar a inclusão, caso contrario informe um erro

    foreach ($diretorio as $nome):

        if (!$inclusao && file_exists(CLASSES . "/{$nome}/{$classe}.class.php") && !is_dir(CLASSES . "/{$nome}/{$classe}.class.php")):
            require_once CLASSES . "/{$nome}/{$classe}.class.php";
            $inclusao = true;
        endif;

    endforeach;

    return $inclusao;
}

// INICIAR APLICAÇÃO ##########################################################################################
// Explicação:
// $App representa o controller do sistema, este recebe a requisição do usuario via GET e POST.
// Após analise da requisição o controller direciona requisição para model e/ou view
// Caso um erro seja gerado, o objeto view será executado, para que o erro seja informado ao usuario
$App = new Controller($_GET, $_POST);
$Objeto = $App->AnalisarRequisicao();
$Nome = get_class($Objeto);
$Model = ['Model', 'Login','Carro','Cliente','Reserva'];
// Se AnalisarRequisição retornar um objeto Model, se faz necessário obter dados no banco de dados

if (in_array($Nome, $Model)):

    $resultado = $App->DirecionarRequisicao($App->getModel(), $App->getMetodo(), $App->getParametros());

    // Caso as operações no Banco de Dados não funcionem este if será executado
    if (is_a($resultado, 'PDOException')):

        $Erro = new View();
        $_SESSION['resultado'] = $resultado;
        $_SESSION['App'] = $App;
        $_SESSION['CodErro'] = E_USER_ERROR;
        $_SESSION['Code'] = $resultado->getCode();
        $_SESSION['Linha'] = $resultado->getLine();
        $_SESSION['Mensagem'] = $resultado->getMessage();
        $_SESSION['Arquivo'] = $resultado->getFile();
        $_SESSION['Classe'] = get_class($Erro);
        $_SESSION['Metodo'] = 'ExibirErros';
        $App->DirecionarRequisicao($Erro, 'ExibirErros');
    else:

        // Enviar resultado obtido pelo model para a view montar a resposta html e enviar para o usuario
        $_SESSION['resultado'] = $resultado;
        $App->DirecionarRequisicao($App->getView(), $App->getMetodo());

    endif;

// Se AnalisarRequisição retornar um objeto View, não foi necessário obter nenhum dado pelo Model do sistema
elseif (is_a($Objeto, 'View')):

    $App->DirecionarRequisicao($App->getView(), $App->getMetodo());

// Se AnalisarRequisição retornar um objeto stdClass, significa que uma classe invalida foi informada pelo sistema
elseif (is_a($Objeto, 'stdClass')):

    $_SESSION['App'] = $App;
    $Erro = new View();
    $Metodo = 'ExibirErros';
    $_SESSION['CodErro'] = E_USER_ERROR;
    $_SESSION['Linha'] = __LINE__;
    $_SESSION['Mensagem'] = "Não foi informada uma Classe valida na URL";
    $_SESSION['Arquivo'] = __FILE__;
    $_SESSION['Classe'] = get_class($Erro);
    $_SESSION['Metodo'] = 'ExibirErros';
    $App->DirecionarRequisicao($Erro, $Metodo);

endif;

// Se o modo DEBUG estiver ligado, então será exibido para o usuario um var_dump de $App
if (DEBUG === false):
 echo '<hr><pre>';
    echo '<hr>';
    echo '<center>var_dump da aplicação</center>';
    echo '<center>Exibido apenas durante o desenvolvimento</center>';
    echo 'CONTROLLER:';
    var_dump($App);
    echo '<hr>';

endif;


