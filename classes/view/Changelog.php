<?php
// Evita que o usuário deslogado acesse a pagina

require_once HEADER;
?>

<div class="row">
    <div class="col-md-12">
        <h2>Historico de alterações no sistema </h2>

        <div><b>Versão 0.1 - 15/11/2017</b>
            <ol>
                <li>Commit Inicial - Versão 0.1 do Sistema de Estoque </li>
            </ol>
        </div>

        <div><b>Versão 0.2 - 17/11/2017</b>
            <ol>
                <li>Correção do Changelog</li>
            </ol>
        </div>

        <div><b>Versão 0.3 - 18/11/2017</b>
            <ol>
                <li>Criação e organização da estrutura de pastas e arquivos iniciais do sistema de estoque</li>
                <li>O usuário acessa o site;</li>
                <li>O arquivo index.php apenas inclui o arquivo config.php;</li>
                <li>O arquivo config.php é responsável por registrar configurações gerais e carregar o arquivo loader.php;</li>
                <li>O arquivo loader.php irá carregará a aplicação e o arquivo globais.php, que é responsável por manter todas as funções globais. Como a autoload, para carregar classes automaticamente.</li>
                <li>A Pasta controllers é responsável por armazenar os arquivos da camada controller</li>
                <li>A Pasta model é responsável por armazenar os arquivos da camada model</li>
                <li>A Pasta view é responsável por armazenar os arquivos da camada view</li>
                <li>As pastas que têm um _sublinhado antes do nome, dentro da pasta view, são pastas que incluem arquivos que a camada view irá utilizar, mas que não são views.</li>
                <li>O arquivo .htaccess é um arquivo de configuração do servidor Apache e serve para varias finalidades, por exemplo:</li>
                <li>Alterar configurações de acesso por diretório.</li>
                <li>Restringir acesso com ou sem senha;</li>
                <li>Bloquear arquivos ou diretórios;</li>
                <li>Redirecionamento para páginas de erro;</li>
                <li>URLs amigáveis;</li>
                <li>Cachear recursos da página;</li>
                <li>A Pasta SQL vai armazenar os script sql do sistema</li>

            </ol>
        </div>

        <div><b>Versão 0.4 - 18/11/2017</b>
            <ol>
                <li>Programações iniciais do Mini Sistema de Estoque </li>
                <li>Alterando o arquivo index.php para carregar o arquivo de config.php (configurações gerais)</li>
                <li>Alterando o .htaccess para permitir reescrita de URL's</li>
                <li>Programações iniciais do config.php para carregar as configurações gerais e carregar o loader.php</li>
                <li>Inclusão do arquivo script sql do banco na respectiva pasta SQL</li>
                <li>Criação da pasta _uploads dentro da pasta views</li>
                <li>Programações iniciais do loader.php e carregar aplicação</li>
                <li>Programações iniciais das funções globais </li>
            </ol>
        </div>

        <div><b>Versão 0.5 - 28/11/2017</b>
            <ol>
                <li>Mais programações iniciais do Minis Sistema de Estoque
                <li>Inclusão do arquivo model.php</li>
                <li>Realizar programações no arquivo de funções globais</li>
                <li>Agrupar classes em subpastas especificas de acordo com suas funções</li>
                <li>Inclusão no arquivo config.php a configuração do nome da pasta classes</li>
                <li>Alteração da lógica do __autoload para percorrer as subpastas</li>
                <li>Criação da pasta documentação que armazena as documentações do projeto</li>
                <li>Inclusão da pasta _js dentro da pasta view</li>
                <li>Inclusão da pasta _include dentro da pasta view, armazena codigos comuns a várias paginas do sistema</li>
                <li>Inclusão de logica para evitar que o usuario acesse diretamente os arquivos config.php e loader.php</li>
                <li>Inclusão da imagem de acesso negado</li>
                <li>Inclusão de pagina not found</li>
                <li>Inclusão da view notfound</li>
                <li>Criação da pasta controller dentro da pasta classes</li>
                <li>Programação da classe AplicaçãoMVC</li>
                <li>Programação da classe HomeController</li>
                <li>Pasta sistemaphp/classes/controller armazena classes utilizadas pelo controller</li>
                <li>Pasta sistemaphp/classes/model armazena classes utilizadas pelo model</li>
                <li>Programação da classe PrincipalController</li>
                <li>Adição das bibliotecas do bootstrap</li>
                <li>Exclusão da pasta de classes/banco</li>
            </ol>
        </div>

        <div><b>Versão 0.6 - 4/11/2017</b>
            <ol>
                <li>Programar classe categoria</li>
                <li>Programação da classe AplicaçãoMVC</li>
                <li>Programação da classe HomeController</li>
                <li>Programação da classe PrincipalController</li>
                <li>Inclusão das Views Produto e Categorias</li>
            </ol>
        </div>

        <div><b>Versão 0.7 - 06/11/2017</b>
            <ol>
                <li>Mudanças radicais no desenvolvimento do projeto.</li>

                <li>O objetivo deste trabalho é ensinar de forma simples o conceito de MVC e ao mesmo tempo utilizando as informações repassadas aos 
                    alunos durante o curso de PHP que foi ministrado ao longo do semestre. Criar Uma aplicação usando arquitetura MVC, CRUD e Orientação
                    a objetos no PHP sem uso de frameworks PHP prontos</li>

                <li>Os diretórios que serão utilizados por este projeto, foram simplificados a fim de ajudar o aluno a se concentrar nos objetivos das classes.
                    Em uma aplicação no mundo real, há uma quantidade muito maior de pastas. Todavia, se neste projeto, fossemos entrar nestes detalhes,
                    talvez tornaria o procedimento mais complexo para o momento. Talvez, para quem já teve contato com frameworks completos,
                    como por exemplo Laravel, não concodará com a simplificada divisão de pastas seguintes. Mas, o conteúdo é apenas didático.
                    O trabalho é didático para os que os alunos alcançem um nível maior de desenvolvimento, um passo de cada vez.</li>

                <li>Três telas principais do sistema adicionadas</li>
            </ol>
        </div>

        <div><b>Versão 0.8 - 11/12/2017</b>
            <ol>
                <li>Programação base do sistema realizada</li>
            </ol>
        </div>

        <div><b>Versão 0.9 - 11/12/2017</b>
            <ol>
                <li>Otimizações de código no sistema base</li>
            </ol>
        </div>

        <div><b>Versão 0.10 - 13/12/2017</b>
            <ol>
                <li>Implementações na função categorias</li>
            </ol>
        </div>

        <div><b>Versão 0.11 - 14/12/2017</b>
            <ol>
                <li>Ações da função de categorias prontas</li>
                <li>Programando Excluir Categorias, sem restrição da chave estrangeira</li>
                <li>Refatorando o código para captura de erros no banco de dados</li>
            </ol>
        </div>

        <div><b>Versão 0.12 - 25/12/2017</b>
            <ol>
                <li>Iniciando Refatoração do Controller para um codigo mais enxuto e otimizado</li>
            </ol>
        </div>

        <div><b>Versão 0.13 - 31/12/2017</b>
            <ol>
                <li>Refatoração concluida</li>
            </ol>
        </div>

        <div><b>Versão 0.14 - 03/12/2018</b>
            <ol>
                <li>Funções de categoria concluidas após o refatoramento do controller</li>
            </ol>
        </div>

        <div><b>Versão 0.15 - 04/01/2018</b>
            <ol>
                <li>Listagem de produtos concluída</li>
            </ol>
        </div>

        <div><b>Versão 0.16 - 07/01/2018</b>
            <ol>
                <li>View novos produtos concluida</li>
                <li>Inserção de novos produtos concluída</li>
                <li>Edição de produtos concluído</li>
                <li>Exclusão de produtos concluído</li>
            </ol>
        </div>

        <div class="text-success">
            <b>Versão 1.0 - 07/01/2018</b>
            <ol>
                <li>Exibição de Detalhes de categorias concluida</li>
                <li>Versão 1.0 do Sistema Concluida</li>
            </ol>
        </div>

        <div><b>Versão 1.1 - 17/01/2018</b>
            <ol>
                <li>Revendo toda a documentação do projeto</li>
                <li>Organizando codigo do Model.class.php</li>
                <li>Função de Login adicionado</li>
            </ol>
        </div>
        
        <div><b>Versão 1.2 - 20/01/2018</b>
            <ol>
                <li>Revendo toda a documentação do projeto</li>
                <li>Melhoramentos na exibição de erros</li>
                <li>Dividir Model.class.php em arquivos menores</li>
                <li>Função de Logout do Sistema adicionada</li>
            </ol>
        </div>
        
        <div><b>Versão 1.3 - 20/01/2018</b>
            <ol>
                <li>Atualizando documentação do sistema</li>
                <li>Otimizações no codigo de login do usuario</li>
                <li>Inclusão de resposta ao usuario nas funções de produtos e categorias</li>
                <li>Inclusão da funcionalidade de contato </li>
                <li>Inclusão da funcionalidade de lembrar senha </li>
            </ol>
        </div>
        
        <div><b>Versão 1.4 - ?/01/2018</b>
            <ol>
                <li>Inclusão da biblioteca PHPMailer no sistema</li>
                <li>Inclusão da funcionalidade de contato </li>
                <li>Inclusão da funcionalidade de lembrar senha </li>
            </ol>
        </div>

    </div>
</div>


<?php
require_once FOOTER;
?>
