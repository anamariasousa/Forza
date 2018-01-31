<?php

/**
 * @project: sistemaphp
 * @name: View.class 
 * @Description:
 * @copyright (c) 30/12/2017, Iury Gomes - IFTO
 * @author Iury Gomes de Oliveira 
 * @email iury.oliveira@ifto.edu.br
 * @version 1.0 
 */
class View {

    private $Resultado;

    // MÉTODOS DIVERSOS ###############################################################

    function getResultado() {
        return $this->Resultado;
    }

    function setResultado($Resultado) {
        $this->Resultado = $Resultado;
    }

    public function VerObjeto() {

        var_dump($this);
        echo '<hr>';
    }

    public function ExibirErros() {
        require_once VIEW_ERROS;
        $this->setResultado("ExibirErros() foi executado");
        return $this->getResultado();
    }
    public function ExibirChangelog() {
        require_once VIEW_CHANGELOG;
        $this->setResultado("ExibirChangelog() foi executado");
        return $this->getResultado();
    }
    public function ExibirSobre() {
        require_once VIEW_SOBRE;
        $this->setResultado("ExibirSobre() foi executado");
        return $this->getResultado();
    }
    //CARRO INICIO--------------------------------------------------------------
    //CARRO:INSERIR CARRO_______________________________________________________
     public function InserirCarro() {
        require_once VIEW_CARRO_INSERIR;
        $this->setResultado("ExibirCarroInserir() foi executado");
        return $this->getResultado();
    }
     //CARRO:INSERIDO CARRO_______________________________________________________
     public function InseridoCarro() {
        require_once VIEW_LISTAR_CARRO;
        $this->setResultado("ExibirIseridoCarro() foi executado");
        return $this->getResultado();
    }
     //CARRO:LISTAR CARRO_______________________________________________________
     public function ListarCarro() {
        require_once  VIEW_LISTAR_CARRO;
        $this->setResultado("ExibirLitarCarro() foi executado");
        return $this->getResultado();
    }
     //CARRO:LISTAR VISUALIZAÇÃO_______________________________________________________
     public function visual() {
        require_once  VIEW_CARRO_VISUAL;
        $this->setResultado("ExibirVisualrCarro() foi executado");
        return $this->getResultado();
    }
     //CARRO:LISTAR EDITAR_______________________________________________________
     public function editar() {
        require_once  VIEW_CARRO_EDITAR;
        $this->setResultado("ExibirEditarCarro() foi executado");
        return $this->getResultado();
    }
     //CARRO:LISTAR EDITADO_______________________________________________________
     public function editado() {
        require_once VIEW_LISTAR_CARRO;
        $this->setResultado("ExibirEditadoCarro() foi executado");
        return $this->getResultado();
    }
     //CARRO:LISTAR EXCLUIR_______________________________________________________
     public function excluir() {
        require_once VIEW_LISTAR_CARRO;
        $this->setResultado("ExibirExcluirCarro() foi executado");
        return $this->getResultado();
    }
     //CARRO:LISTAR  DE TODOS OS CARROS_______________________________________________________
     public function ExibirCarroTodos() {
        require_once VIEW_CARRO_TODOS;
        $this->setResultado("ExibirExcluirCarro() foi executado");
        return $this->getResultado();
    }
     //CARRO:Reservar carro_____________________________________________________
     public function ReservarCarro() {
        require_once VIEW_RESERVAR_CARRO;
        $this->setResultado("ExibirExcluirCarro() foi executado");
        return $this->getResultado();
    }
    //CLIENTE-----------------------------------------------------------------
    //CLIENTE INSERIR
    public function InserirCliente() {
        require_once VIEW_CLIENTE_INSERIR ;
       $this->setResultado("ExibirCliente() foi executado");
        return $this->getResultado();
    }
    //CLIENTE LISTAR
    public function ListarCliente() {
         require_once VIEW_CLIENTE_LISTAR;
       $this->setResultado("Exibir() foi executado");
        return $this->getResultado();
    }
    //CLIENTE VISUALIZAÇÃO
    public function VisualCliente() {
         require_once VIEW_CLIENTE_VISUAL;
       $this->setResultado("Exibir() foi executado");
        return $this->getResultado();
    }
      //CLIENTE:LISTAR EDITAR_______________________________________________________
     public function EditarCliente() {
        require_once  VIEW_CLIENTE_EDITAR;
        $this->setResultado("ExibirEditarCliente() foi executado");
        return $this->getResultado();
    }
     //CLIENTE:LISTAR EDITADO_______________________________________________________
     public function EditadoCliente() {
        require_once VIEW_CLIENTE_LISTAR;
        $this->setResultado("ExibirEditadoCliente() foi executado");
        return $this->getResultado();
    }
     //CLIENTE: EXCLUIR_______________________________________________________
     public function ExcluirCliente() {
        require_once VIEW_CLIENTE_LISTAR;
        $this->setResultado("ExibirExcluirCliente() foi executado");
        return $this->getResultado();
    }
    //RESERVA:LISTAR CARRO POR DATA
      public function ListarCarroData() {
        require_once VIEW_CARRO_DATA;
        $this->setResultado("ExibirListarCarroPorData() foi executado");
        return $this->getResultado();
    }
      public function DetalhesReserva() {
        require_once VIEW_CARRO_DETALHE ;
       $this->setResultado("ExibirClienteDetalhesReserva() foi executado");
        return $this->getResultado();
    }
 
    public function InseridoDetalhesReservas() {
         require_once VIEW_CLIENTE_LISTAR;
       $this->setResultado("ExibirReservaInserida() foi executado");
        return $this->getResultado();
    }
    
    //CLIENTE FIM---------------------------------------------------------------
    public function ExibirContato() {

        require_once VIEW_CONTATO;

        $this->setResultado("ExibirContato() foi executado");
        return $this->getResultado();
    }

    public function ExibirHome() {

        require_once VIEW_HOME;

        $this->setResultado("ExibirHome() foi executado");
        return $this->getResultado();
    }


    public function ExibirLogin() {

        require_once VIEW_LOGIN;

        $this->setResultado("ExibirLogin() foi executado");
        return $this->getResultado();
    }

    public function Logout() {
        
        $this->ExibirLogin();
        
        $this->setResultado("ExibirLogout() foi executado");
        return $this->getResultado();
        
    }

    public function Logar() {
        $resultado = $_SESSION['resultado'];

        // var_dump($resultado);

        if (($resultado == 'Login já existe') || ($resultado == 'Dados de login desconhecidos') || ($resultado == 'Email informado possui um formato invalido')):
            $this->ExibirLogin();
        else:
            $this->ExibirHome();
        endif;

        //$this->ExibirLogin();

        $this->setResultado("Logar() foi executado");
        return $this->getResultado();
    }

}
