<?php
/**
 * @projeto: sistemaphp
 * @nome: config.php 
 * @Descrição: Arquivo de configurações gerais do sistema, que são utilizados durante a execução do sistema
 * @copyright (c) 07/01/2018, Iury Gomes - IFTO
 * @autor Iury Gomes de Oliveira 
 * @email iury.oliveira@ifto.edu.br
 * @versão: 1.0
 */

// Evita que o usuário acesse o arquivo diretamente, redirecionando para index.php
if (basename($_SERVER["PHP_SELF"]) == basename(__FILE__)):
    header('Location: index.php');
endif;

/**
 * @projeto: sistemaphp
 * @nome: get_url() 
 * @Descrição: Obtem a URL atual com o script index.php ao final da URL
 * @copyright (c) 07/01/2018, Iury Gomes - IFTO
 * @autor Iury Gomes de Oliveira 
 * @email iury.oliveira@ifto.edu.br
 * @versão: 1.0
 */
function get_url(){ 
        // Obtem URL atual com script index.php ao final
	return strtolower(preg_replace('/[^a-zA-Z]/','',$_SERVER['SERVER_PROTOCOL'])).'://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];      
}

// CONFIGURAÇÕES GERAIS DO SISTEMA ###########################################################################################################

// PASTAS - Montando o caminho absoluto para diversas pastas do sistema 
define('RAIZ', __DIR__); // Obter o caminho da raiz do sistema
define('CLASSES', RAIZ . '/classes'); // Caminho para a pasta de classes
define('VIEW', CLASSES . '/view'); // Caminho para a pasta de views do sistema
define('MODEL', CLASSES . '/model'); // Caminho para a pasta model do sistema 
define('CONTROLLER', CLASSES . '/controller'); // Caminho para a pasta controller do sistema
define('UPLOADS', VIEW . '/_uploads'); // Caminho para a pasta de uploads
define('IMAGENS', VIEW . '/_imagens'); // Caminho para a pasta de imagens
define('CSS', VIEW . '/_css'); // Caminho para a pasta de CSS
define('INCLUDES', VIEW . '/_includes'); // Caminho para a pasta de includes, componentes da view
define('JS', VIEW . '/_js'); // Caminho para a pasta de javascript

// Removendo index.php do endereço base para ser usado na montagem de alguns links especificos
$string = str_replace('index.php', '', get_url());

// LINKS - Utilizado pelo Controller para direcionar o usuario entre as Views 
define('BASE', get_url() );
define('BOOTSTRAP', $string.'classes/view/_css/bootstrap.min.css'); // Caminho para o bootstrap
define('ESTILO', $string.'classes/view/_css/estilo.css'); // Caminho para o estilo padrao da pagina
define('ERROS', $string.'classes/view/_css/erros.css'); // Caminho para o estilo dos erros
define('LINK_HOME', BASE.'?classe=View&metodo=ExibirHome'); // Link para controller carregar home


//CARRO
define('LINK_CARRO_INSERIR', BASE. '?classe=View&metodo=InserirCarro');
define('LINK_CARRO_INSERIDO', BASE. '?classe=Carro&metodo=InseridoCarro');
define('LINK_LISTAR_CARRO', BASE. '?classe=Carro&metodo=ListarCarro');
define('LINK_CARRO_VISUAL', BASE. '?classe=Carro&metodo=visual&idCarros=');//Link para controller carregando visualização carro
define('LINK_CARRO_EDITAR', BASE. '?classe=Carro&metodo=editar&idCarros=');//Link para controller carregando editar carro
define('LINK_CARRO_EDITADO',BASE. '?classe=Carro&metodo=editado&idCarros='); //Link para controller carregando editado carro
define('LINK_CARRO_EXCLUIR', BASE. '?classe=Carro&metodo=excluir&idCarros=');//Link para controller carregando excluir carro
define('LINK_LISTAR_CARRO_DATA', BASE. '?classe=Reserva&metodo=ListarCarroData');


define('LINK_LISTAR_CARRO_TODOS', BASE. '?classe=Carro&metodo=ExibirCarroTodos');


define('LINK__CARRO_DETALHES_RESERVA', BASE. '?classe=Reserva&metodo=DetalhesReserva&idCarros=');
define('LINK_CARRO_RESERVAR', BASE. '?classe=Reserva&metodo=ReservarCarro&idCarros=');
define('LINK_CARRO_RESERVADO', BASE. '?classe=Reserva&metodo=Reservado');

//define('LINK__CARRO_DETALHES_RESERVA', BASE. '?classe=Reserva&metodo=detalhesReserva&idCarros=');
//CLIENTE______________________________________________________________________
define('LINK_CLIENTE_NOVO',  BASE.'?classe=View&metodo=InserirCliente'); //  Link para controller carregando inserir cliente
define('LINK_CLIENTE_INSERIDO',  BASE.'?classe=Login&metodo=Logar'); //  Link para controller carregando inserir cliente
define('LINK_CLIENTE_LISTAR',   BASE.'?classe=Cliente&metodo=ListarCliente');
define('LINK_CLIENTE_VISUAL', BASE.'?classe=Cliente&metodo=VisualCliente&idClientes=');// Link para controller carregando visualização cliente
define('LINK_CLIENTE_EDITAR', BASE.'?classe=Cliente&metodo=EditarCliente&idClientes=');// Link para controller carregando editar cliente
define('LINK_CLIENTE_EDITADO',BASE.'?classe=Cliente&metodo=EditadoCliente&idClientes='); // Link para controller carregando editado cliente
define('LINK_CLIENTE_EXCLUIR',BASE.'?classe=Cliente&metodo=ExcluirCliente&idClientes=');// Link para controller carregando excluir cliente




define('LINK_SOBRE', BASE.'?classe=View&metodo=ExibirSobre'); // Link para controller carregar a pagina SOBRE
define('LINK_CHANGELOG', BASE.'?classe=View&metodo=ExibirChangelog'); // Link para controller carregar a pagina de changelog
define('LINK_CONTATO', BASE.'?classe=View&metodo=ExibirContato'); // Link para controller carregar a pagina de contato
define('LINK_CONTATO_ENVIAR', BASE.'?classe=Model&metodo=EnviarContato'); // Link para controller carregar a pagina de contato
define('LINK_LOGIN', BASE.'?classe=View&metodo=ExibirLogin'); // Link para controller carregar o exibir login
define('LINK_LOGOUT', BASE.'?classe=Login&metodo=Logout'); // Link para controller realizar o logout
define('LINK_ACESSAR_SISTEMA', BASE.'?classe=Login&metodo=Logar'); // Link para controller carregar a verificação de login

// VIEWS - Caminho absoluto para diversas views do sistema, utilizado pelo View.class.php
define('VIEW_HOME', VIEW . '/Home.php'); // Caminho para o view home

//CARRO
define('VIEW_CARRO_INSERIR', VIEW . '/CadastroCarro.php');
define('VIEW_LISTAR_CARRO', VIEW . '/ListarCarro.php');
define('VIEW_CARRO_VISUAL', VIEW . '/VisualCarros.php'); //
define('VIEW_CARRO_EDITAR', VIEW . '/EditarCarros.php');


define('VIEW_CARRO_DATA', VIEW . '/ListarCarroPorData.php'); //

define('VIEW_CARRO_TODOS', VIEW . '/ListarCarroTodos.php'); //Pagina PHP para controller carregando 
define('VIEW_CARRO_DETALHE', VIEW . '/DetalhesReserva.php'); //Pagina PHP para controller carregando 

define('VIEW_RESERVAR_CARRO', VIEW . '/Reserva.php');

 //CLIENTE INICIO ----------------------------------------------
 define('VIEW_CLIENTE_INSERIR', VIEW . '/CadastroDeCliente.php'); //Pagina PHP para controller carregando Cadastro do Cliente
define('VIEW_CLIENTE_LISTAR', VIEW . '/ListarClientes.php');
define('VIEW_CLIENTE_VISUAL', VIEW . '/VisualClientes.php');
define('VIEW_CLIENTE_EDITAR', VIEW . '/EditarClientes.php');







define('VIEW_CHANGELOG', VIEW . '/Changelog.php'); // Caminho para o view changelog
define('VIEW_SOBRE', VIEW . '/Sobre.php'); // Caminho para o view changelog
define('VIEW_LOGIN', VIEW . '/Login.php'); // Caminho para o view Login
define('VIEW_NOTFOUND', VIEW . '/NotFound.php'); // Caminho para a View NotFound.php
define('VIEW_ERROS', VIEW . '/Erros.php'); // Caminho para a View Erros.php
define('VIEW_CONTATO', VIEW . '/Contato.php'); // Caminho para a View Erros.php

define('FOOTER', INCLUDES . '/Footer.php'); // Caminho para o rodapé do template
define('HEADER', INCLUDES . '/Header.php'); // Caminho para o cabeçalho do template

// BANCO DE DADOS - Dados para acessar o Banco de Dados do Sistema, utilizado pelo Model.class.php
define('DRIVER', 'mysql'); // Driver a ser utilizado pelo PDO no acesso ao banco de dados
define('HOST', '127.0.0.1');  // Local onde o banco de dados está armazenado
define('USUARIO', 'root'); // Usuário de acesso ao banco de dados
define('SENHA', 'bertozzi');     // Senha de acesso ao banco de dados
define('BANCO', 'estoque');   // Nome do Banco de Dados
define('CHARSET', 'utf8');  // Charset da conexão PDO

// ERROS - Configurações para as mensagens de erro utilizadas pelo sistema
define('MSG_SUCESSO', 'sucesso');
define('MSG_DEPRECATED', 'deprecated');
define('MSG_INFO', 'notice');
define('MSG_ALERTA', 'warning');
define('MSG_ERRO', 'error');

// DEBUG - Configurações para debugar o projeto durante o desenvolvimento
// Se você estiver desenvolvendo, modifique o valor para true
define('DEBUG', FALSE);

// Verifica o modo para debugar
if( DEBUG === false):

    // Esconde todos os erros
    error_reporting(0);
    ini_set("display_errors", 0);
    
elseif(DEBUG === true):

    // Mostra todos os erros
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

endif;

// LOADER - Carrega o loader, que vai carregar a aplicação inteira
require_once 'loader.php';
?>
