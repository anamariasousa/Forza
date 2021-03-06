<?php

/**
 * @projeto: sistemaphp
 * @nome: ConexaoBD.class 
 * @descrição: Exemplo de Conexão com Banco de Dados usando o Padrão Singleton
 * Retorna um objeto PDO pelo método estático ObterConexao()
 * O Padrão de Projeto Singleton faz com que temos uma unica instancia de objeto
 * executando na memoria. Para maiores informações sobre acesso ao MySQL utilizando PDO
 * acesse: http://php.net/manual/pt_BR/ref.pdo-mysql.connection.php
 * @copyright (c) 17/10/2017, Iury Gomes - IFTO
 * @autor Iury Gomes de Oliveira 
 * @email iury.oliveira@ifto.edu.br
 * @versão 2.0 08/01/2017
 * @metodos Conectar(), ObterConexao(), VerAtributos() 
 */
class ConexaoBD {

    /** @var string $dns variavel dsn usada apenas para depurar a conexão do código */
    private static $dsn = null; 
    
    /** @var string $Driver Driver dw hardware a ser usado no PDO para conexão com o banco */
    private static $Driver = DRIVER; 
    
    /** @var string $Host Local onde está o Banco */
    private static $Host = HOST; 
    
    /** @var string $dns variavel dsn usada apenas para depurar a conexão do código */
    private static $Usuario = USUARIO; // usuario de acesso ao banco
    
    /** @var string $dns variavel dsn usada apenas para depurar a conexão do código */
    private static $Senha = SENHA; // senha de acesso ao banco
    
    /** @var string $dns variavel dsn usada apenas para depurar a conexão do código */
    private static $Banco = BANCO; // nome do banco

    /** @var PDO $Conexao Armazena a conexão com o Banco de Dados*/
    private static $Conexao = null;
    // Explicação:
    // $Conexão só será inicializada se a conexão se $Conexao == null, se $Conexão != null, 
    // a conexão já foi criada anteriormente e deverá ser usada, isso é singleton;

    /**
     * @Descrição: Realiza a conexão com o banco de dados
     * @copyright (c) 07/01/2018, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @parametros Sem parâmetros 
     */
    private static function Conectar() {
        try {
            if (self::$Conexao == null):

                // Montando DSN para conexão com o banco
                // DSN = Data Source Name
                $dsn = self::$Driver . ':host=' . self::$Host . ';dbname=' . self::$Banco;

                self::$dsn = $dsn; // PARA DEPURAÇÃO
                // Setando codificação UTF-8 no Banco de Dados
                // As configurações precisam ser repassadas em forma de Array, por isso as CHAVES
                // MYSQL_ATTR_INIT_COMMAND é o índice que de configuração que desejamos acessar
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];

                self::$Conexao = new PDO($dsn, self::$Usuario, self::$Senha, $options);
            endif;
        } catch (PDOException $erro) {
           // PROGRAMAR DEPOIS O RETORNO DESSE ERRO
            return $erro;
        }



        // Tratamento de erros no PDO
        //
        // O PDO oferece 3 alternativas para manipulação de erros.
        //
        // PDO::ERRMODE_SILENT
        // Esse é o tipo padrão utilizado pelo PDO, basicamente o PDO seta
        // internamente o código de um determinado erro, podendo ser resgatado
        // através dos métodos PDO::errorCode() e PDO::errorInfo().
        //
        // PDO::ERRMODE_WARNING
        // Além de armazenar o código do erro, este tipo de manipulação de erro
        // irá enviar uma mensagem E_WARNING, sendo este muito utilizado durante
        // a depuração e/ou teste da aplicação.
        //
        // PDO::ERRMODE_EXCEPTION
        // Além de armazenar o código de erro, este tipo de manipulação de erro irá
        // lançar uma exceção PDOException, esta alternativa é recomendada, principalmente
        //  por deixar o código mais limpo e legível.


        self::$Conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$Conexao;
    }

    /**
     * @Descrição: Obtem a conexão com o banco de dado
     * @copyright (c) 07/01/2018, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @parametros Sem parâmetros
     */
    static function ObterConexao() {
        return self::Conectar();
    }

    /**
     * @Descrição: Método utilizado apenas para depuração do código
     * @copyright (c) 07/01/2018, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @parametros Sem parâmetros
     */
    public function VerAtributos() {
        echo "<hr>";
        echo "Dados de conexão com o banco <br>";
        echo "HOST: ";
        var_dump(self::$Host);
        echo "USUARIO: ";
        var_dump(self::$Usuario);
        echo "SENHA: ";
        var_dump(self::$Senha);
        echo "BANCO: ";
        var_dump(self::$Banco);
        echo "DSN: ";
        var_dump(self::$dsn);
        echo "CONEXAO: ";
        var_dump(self::$Conexao);
    }

}
