<?php

/**
 * @projeto: sistemaphp
 * @nome: Controller.class 
 * @Descrição: Classe responsável por definir o controller principal do sistema
 * @copyright (c) 07/01/2018, Iury Gomes - IFTO
 * @autor Iury Gomes de Oliveira 
 * @email iury.oliveira@ifto.edu.br
 * @versao 1.0 - 07/01/2018
 * @metodos __construct(), getView(), getModel(), getMetodo(), getParametros(), GerarObjeto() 
 * @metodos ObterParametros(), DirecionarRequisicao(), AnalisarRequisicao()
 */
class Controller {

    /** @var View Objeto da classe View */
    private $View;

    /** @var Model Objeto da classe Model */
    private $Model;

    /** @var string Nome da Classe informada na URL do sistema que será analisada pelo controller */
    private $Classe;

    /** @var string Nome do Método informada na URL do sistema que será analisada pelo controller */
    private $Metodo;

    /** @var array Vetor que contém os parâmetros que deverão ser processados pelo model */
    private $Parametros;

    /**
     * @nome: __contruct 
     * @Descrição: Construtor do objeto Controller
     * @copyright (c) 07/01/2018, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @param array $GET Contem os dados objetos via GET 
     * @param array $POST Contem os dados objetos via POST 
     */
    public function __construct($GET, $POST) {

        $this->Classe = isset($GET['classe']) ? $GET['classe'] : null;
        $this->Metodo = isset($GET['metodo']) ? $GET['metodo'] : null;
        $this->Parametros = isset($POST) ? $POST : null;

        // Na primeira execução do sistema, esta condição será executada
        if (($this->Classe === null) && ($this->Metodo === null)):
            $this->Classe = 'View';
            $this->Metodo = 'ExibirHome';
        endif;
    }

    /**
     * @Descrição: Obtem o valor do atributo $this->View
     * @copyright (c) 07/01/2018, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @parametros Sem parâmetros  
     */
    function getView() {
        return $this->View;
    }

    /**
     * @Descrição: Obtem o valor do atributo $this->Model
     * @copyright (c) 07/01/2018, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @parametros Sem parâmetros  
     */
    function getModel() {
        return $this->Model;
    }

    /**
     * @Descrição: Obtem o valor do atributo $this->Metodo
     * @copyright (c) 07/01/2018, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @parametros Sem parâmetros  
     */
    function getMetodo() {
        return $this->Metodo;
    }

    /**
     * @Descrição: Obtem o valor do atributo $this->Parametros
     * @copyright (c) 07/01/2018, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @parametros Sem parâmetros  
     */
    function getParametros() {
        return $this->Parametros;
    }

    /**
     * @Descrição: Gera o objeto necessário para processar requisição do usuario
     * @copyright (c) 07/01/2018, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @param string $Classe Nome da Classe que deverá gerar o objeto para execução do sistema 
     */
    private function GerarObjeto($Classe) {

        try {

            // Verifica se classe informada existe
            $resultado = class_exists($Classe);

            // Se classe informada não existir, então o erro é gerado
            if (!$resultado):
                throw new Exception("Classe {$Classe} não existe ");
            endif;

            $Objeto = new $Classe;

            // Verificando se o método existe dentro do objeto criado
            $resultado = method_exists($Objeto, $this->Metodo);

            // Se o método não existir, então o erro é gerado
            if (!$resultado):
                $nome = get_class($Objeto);
                throw new Exception("Método {$this->Metodo} não existe no Objeto {$nome} ");
            endif;

            return $Objeto;
        } catch (Exception $erro) {

            // Se um erro de Exception for gerado, isto deverá ser exibido para o usuario
            $_SESSION['App'] = $this;
            $Erro = new View();
            $_SESSION['CodErro'] = E_USER_ERROR;
            $_SESSION['Linha'] = $erro->getLine();
            $_SESSION['Mensagem'] = $erro->getMessage();
            $_SESSION['Arquivo'] = $erro->getFile();
            $_SESSION['Classe'] = get_class($Erro);
            $_SESSION['Metodo'] = 'ExibirErros';
            $this->DirecionarRequisicao($Erro, 'ExibirErros');
        }
    }

    /**
     * @Descrição: Obtem os parametros presentes na URL para serem processados pelo model
     * @copyright (c) 07/01/2018, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @parametros Sem parâmetros 
     */
    private function ObterParametros() {

        // Explicação:
        // Obtem path, querystring e id presentes na URL, após isso, separa estes elementos
        // em um array $parametros, depois remove os parametros path e querystring
        // mantendo apenas id se houver. 
        // Adiciona id ao final de $this->Parametros

        $url = parse_url($_SERVER['REQUEST_URI']);
        parse_str($url['query'], $parametros);
        $parametros = array_slice($parametros, 2);
        $this->Parametros = array_merge($this->Parametros, $parametros);

        return $this->Parametros;
    }

    /**
     * @Descrição: Direciona a requisição do usuario para o Objeto e método que responderá a requisição do mesmo
     * @copyright (c) 07/01/2018, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @param object $Objeto Nome do Objeto que vai processar a requisição do usuario 
     * @param string $Metodo Nome do metodo que vai processar a requisição do usuario 
     * @param array $Parametros Vetor que contem parametros extrar para execução no Model  
     */
    public function DirecionarRequisicao($Objeto, $Metodo, $Parametros = null) {

        // Explicação:
        // Se existir parametros, então chamar call_user_func_array para repassar
        // os parâmetros especificos, para o método especifico no objeto
        // caso contrario, apenas chamar o objeto e seu método

        if ($Parametros):

            $resultado = call_user_func_array(array($Objeto, $Metodo), array($Parametros));
        else:
            $resultado = call_user_func(array($Objeto, $Metodo));
        endif;

        return $resultado;
    }

    /**
     * @Descrição: Analisa a requisição do usuario
     * @copyright (c) 07/01/2018, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @parametros Sem parâmetros 
     */
    public function AnalisarRequisicao() {

        $Model = ['Model', 'Login','Carro','Cliente','Reserva'];

        // Explicação:
        // Se classe informada na URL for alguma classe pertencente a camada model
        if (in_array($this->Classe, $Model)):

            $this->ObterParametros();
            $this->Model = $this->GerarObjeto($this->Classe);
            $this->View = $this->GerarObjeto('View');
            return $this->Model;

        // Se classe informada na URL for View
        elseif ($this->Classe == 'View'):

            $this->View = $this->GerarObjeto($this->Classe);
            return $this->View;

        endif;

        // Retornando Objeto Generico, caso não seja gerado nenhum objeto View ou Model
        return new stdClass();
    }

}

// Fim do Controller




 