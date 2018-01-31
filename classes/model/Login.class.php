<?php

/**
 * @project: sistemaphp
 * @name: Model.class 
 * @Description: Classe responsável pelas Ações do Model envolvendo a função de Login. Busca e processa os dados do banco de dados
 * @copyright (c) 18/01/2018, Iury Gomes - IFTO
 * @author Iury Gomes de Oliveira 
 * @email iury.oliveira@ifto.edu.br
 * @version 1.0 
 */
class Login extends Model {
    // MÉTODOS PARA LOGIN ##################################################################################################

    /**
     * Executa validação de formato de e-mail no padrão indicado pela RFC 822. 
     * A RFC 822 define o formato padrão para mensagens de texto. 
     * Se deve informar um e-mail na chamada do método 
     * @param string $Email Uma conta de e-mail para ser validado
     * @return boleano Retorna true para um email válido, ou false para um e-mail invalido
     * 
     */
    private function EmailValido(string $Email) {

        // filter_var: Filtra a variável com um especificado filtro
        if (filter_var($Email, FILTER_VALIDATE_EMAIL)):
            return true;
        else:
            return false;
        endif;
    }

    private function VerificarEmail($Email) {

        $resultado = $this->Buscar('COUNT(*)', 'Clientes', 'WHERE EMAIL = :EMAIL', "EMAIL={$Email}");
        $this->Resultado = $resultado[0];

        //var_dump($this->Resultado);

        if ($this->Resultado['COUNT(*)'] == '0'):
            return true;
        else:
            return false;
        endif;
    }

    private function VerificarUsuario($Email, $Senha) {

        $resultado = $this->Buscar('COUNT(*)', 'Clientes', 'WHERE EMAIL = :EMAIL AND SENHA = :SENHA', "EMAIL={$Email}&SENHA={$Senha}");
        $this->Resultado = $resultado[0];
        //var_dump($resultado);
        //var_dump($this->Resultado);

        if ($this->Resultado['COUNT(*)'] == '0'):
            return false;
        else:
            return true;
        endif;
    }

    public function EncriptarString($String) {

        $StringEncriptada = md5($String);
        return $StringEncriptada;
    }

    private function ValidarUsuario($Email, $Senha) {

        $SenhaEncriptada = $this->EncriptarString($Senha);

        $resultado = $this->VerificarUsuario($Email, $SenhaEncriptada);

        if ($resultado):
            return true;
        else:
            return false;
        endif;
    }

    private function InserirLogin($Parametros) {
        $resultado = $this->EmailValido($Parametros['email']);
        if ($resultado):
            $resultado = $this->VerificarEmail($Parametros['email']);
            //var_dump($resultado);
            if ($resultado):
                $SenhaEncriptada = $this->EncriptarString($Parametros['senha']);
        // $Dados = ['EMAIL' => $Parametros['email'], 'SENHA' => $SenhaEncriptada];
               $Dados = ['NOME' =>$Parametros['NOME'], 'TELEFONE' =>$Parametros['TELEFONE'], 'CNH' =>$Parametros['CNH'], 'EMAIL' =>$Parametros['email'], 'SENHA' => $SenhaEncriptada];
               
                $this->Resultado = $this->Inserir('Clientes', $Dados);
               ($this->Resultado);
                return 0;
            else:
                return 1;
            endif;
        else:
            // Opção de email invalido
            return 2;
        endif;
    }


    
   


    private function BuscarID($Email, $Senha) {
        $resultado = $this->Buscar('idClientes', 'Clientes', 'WHERE EMAIL = :EMAIL AND SENHA = :SENHA', "EMAIL={$Email}&SENHA={$Senha}");
        $this->Resultado = $resultado[0];
        return $this->Resultado;
    }

    public function BuscarUsuario($ID) {
        $resultado = $this->Buscar('EMAIL, SENHA', 'Clientes', 'WHERE idClientes= :idClientes', "idClientes={$ID}");
        $this->Resultado = $resultado[0];
        return $this->Resultado;
    }

    private function CriarSessao($Email, $Senha) {

        // Se sessão não tiver sido inicializada ainda
        if (!isset($_SESSION)):

            // SESSÕES - Inicializando o uso do recurso de Sessões
            session_start();

            $_SESSION['sessao'] = session_id();
            $SenhaEncriptada = $this->EncriptarString($Senha);
            
            $ID = $this->BuscarID($Email, $SenhaEncriptada);
            //var_dump($ID);
            // Monta um token com informações contendo email, senha e nome da sessão
            $Token = implode('#', array($_SESSION['sessao'],$Email, $SenhaEncriptada));

            // Encripta o valor do Token
            $TokenEncriptado = $this->EncriptarString($Token);

            // Cria um Cookie
            setcookie($ID['idClientes'], $TokenEncriptado, 0);
           // var_dump($ID);
        endif;

        //var_dump($_SESSION);
    }

    public function Logout() {

        //var_dump($_COOKIE);
        if (UsuarioLogado()):

            if (isset($_COOKIE['PHPSESSID'])):

                // Este laço de repetição serve para obter o ID do usuario
                $ID = null;
                foreach ($_COOKIE as $chave => $valor):

                    if (!$ID && ($chave != 'PHPSESSID')):
                        $ID = $chave;
                    endif;

                endforeach;

                setcookie($ID, false, (time() - 3600));
                setcookie('PHPSESSID', false, (time() - 3600));
                unset($_COOKIE['PHPSESSID']);
                unset($_COOKIE[$ID]);

            endif;

        //var_dump($_COOKIE);

        endif;
    }

    public function Logar($Parametros) {

        // var_dump($Parametros);

        if (isset($Parametros['cadastrar'])):

            $resultado = $this->InserirLogin($Parametros);

            switch ($resultado):
                case 0:
                    return $this->Resultado = 'Login cadastrado com sucesso';
                case 1:
                    return $this->Resultado = 'Login já existe';
                case 2:
                    return $this->Resultado = 'Email informado possui um formato invalido';
            endswitch;

        endif;

        if (isset($Parametros['logar'])):
            $resultado = $this->ValidarUsuario($Parametros['email'], $Parametros['senha']);
           
            if ($resultado):

                $this->CriarSessao($Parametros['email'], $Parametros['senha']);
                return $this->Resultado = 'Login feito com sucesso';

            else:
                return $this->Resultado = 'Dados de login desconhecidos';
            endif;

        endif;
    }

    public function VerObjeto() {

        var_dump($this);
        echo '<hr>';
    }

}
