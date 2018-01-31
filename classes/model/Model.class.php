<?php

/**
 * @project: sistemaphp
 * @name: Model.class 
 * @Description: Classe responsável pelo Model do sistema. Busca e processa os dados do banco de dados
 * @copyright (c) 30/12/2017, Iury Gomes - IFTO
 * @author Iury Gomes de Oliveira 
 * @email iury.oliveira@ifto.edu.br
 * @version 1.0 
 */
class Model {

    /** @var string $Resultado Armazenará o resultado das operações no banco de dados */
    private $Resultado;

    /** @var Read Objeto da Classe READ do CRUD */
    private $read;

    /** @var Create Objeto da Classe CREATE do CRUD */
    private $create;

    /** @var Update Objeto da Classe Update do CRUD */
    private $update;

    /** @var Delete Objeto da Classe Delete do CRUD */
    private $delete;

    /**
     * @Descrição: Realiza busca de dados utilizando o READ do CRUD
     * @copyright (c) 25/10/2017, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @param string $Colunas Colunas que serão utilizadas na busca 
     * @param string $Tabela Nome da tabela no banco de dados em que será feita a busca 
     * @param string $Termos Os termos a serem usados na seleção. Ex.: WHERE coluna = :link AND.. OR..
     * @param string $Valores Valores que serão substituidos na string da sql
     */
    public function Buscar(string $Colunas, string $Tabela, string $Termos = null, string $Valores = null) {

        $this->read = new Read(); // Criando objeto Read
        $this->read->ExecutarRead($Colunas, $Tabela, $Termos, $Valores);
        $resultado = $this->read->getResultado();
        return $resultado;
    }

    /**
     * @Descrição: Executa o cadastro no banco de dados utilizando o CREATE do CRUD
     * @copyright (c) 25/10/2017, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @param string $Tabela Nome da tabela no banco de dados que será alterada 
     * @param array $Dados Vetor que contém os dados que serão inseridos no banco de dados
     */
    public function Inserir(string $Tabela, array $Dados) {

        $this->create = new Create(); // Criando objeto Create
        $this->create->ExecutarCreate($Tabela, $Dados);
        $resultado = $this->create->getResultado();
        return $resultado;
    }

    /**
     * @Descrição: Executa um update no banco de dados utilizando o UPDATE do CRUD.
     * @copyright (c) 25/10/2017, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @param string $Tabela Nome da tabela
     * @param array $Dados Vetor que contem os dados que serão atualizados no banco 
     * @param string $Parametros Os parametros a serem usados no update. Ex.: WHERE coluna = :link AND.. OR..
     * @param string $Valores Valores que serão substituidos na string da sql
     */
    public function Atualizar(string $Tabela, array $Dados, string $Parametros, $Valores) {

        $this->update = new Update(); // Criando objeto update
        $this->update->ExecutarUpdate($Tabela, $Dados, $Parametros, $Valores);
        $resultado = $this->update->getResultado();
        return $resultado;
    }

    /**
     * @Descrição: Executa um delete no banco de dados utilizando o DELETE do CRUD.
     * @copyright (c) 25/10/2017, Iury Gomes - IFTO
     * @versao 1.0 - 07/01/2018
     * @param string $Tabela Nome da tabela
     * @param string $Parametros Os parametros a serem usados na seleção. Ex.: WHERE coluna = :link AND.. OR..
     * @param string $Valores Valores que serão substituidos na string da sql
     */
    public function Deletar(string $Tabela, string $Parametros, $Valores) {

        $this->delete = new Delete(); // Criando objeto delete
        $this->delete->ExecutarDelete($Tabela, $Parametros, $Valores);
        $resultado = $this->delete->getResultado();
        return $resultado;
    }

    public function VerObjeto() {

        var_dump($this);
        echo '<hr>';
    }

}
