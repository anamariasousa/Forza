<?php
// Evita que o usuário deslogado acesse a pagina
if (!UsuarioLogado()):
    header('Location: ' . LINK_LOGIN);
endif;
require_once HEADER;

$CodErro = $_SESSION['CodErro'];
$Linha = $_SESSION['Linha'];
$Mensagem = $_SESSION['Mensagem'];
$arquivo = $_SESSION['Arquivo'];
$App = $_SESSION['App'];

if ((isset($_SESSION['resultado'])) && (isset($_SESSION['Code']))):
    
    if (( is_a($_SESSION['resultado'], 'PDOException') ) && ($_SESSION['Code'] == '23000')):

        $CodErro = E_USER_WARNING;
        $Mensagem = "<b>NÃO SE PODE EXCLUIR UMA CATEGORIA QUE ESTÁ ASSOCIADA EM ALGUM PRODUTO</b><br><br>" . $Mensagem;
    endif;
    
endif;
?>

<div class="row">
    <div class="col-md-12">

<?php
switch ($CodErro):

    case E_USER_NOTICE:
        $CssClass = MSG_INFO;
        echo "<p class=\"trigger {$CssClass}\">";
        echo "<b>NOTICE<br>";
        echo "Erro na Linha {$Linha}: </b> {$Mensagem}<br>";
        echo "<small>Caminho do Arquivo: {$arquivo}</small>";
        echo "<b> <br> <br> APLICAÇÃO CONTINUARÁ EXECUTANDO !!!</b>";
        echo "<span class=\"ajax_close\"></span></p>";
        break;
    case E_USER_WARNING:
        $CssClass = MSG_ALERTA;
        echo "<p class=\"trigger {$CssClass}\">";
        echo "<b>WARNING<br>";
        echo "Erro na Linha {$Linha}: </b> {$Mensagem}<br>";
        echo "<small>Caminho do Arquivo: {$arquivo}</small>";
        echo "<b> <br> <br> APLICAÇÃO CONTINUARÁ EXECUTANDO !!!</b>";
        echo "<span class=\"ajax_close\"></span></p>";
        break;
    case E_USER_ERROR:
        $CssClass = MSG_ERRO;
        echo "<p class=\"trigger {$CssClass}\">";
        echo "<b>FATAL ERROR<br>";
        echo "Erro na Linha {$Linha}: </b> {$Mensagem}<br>";
        echo "<small>Caminho do Arquivo: {$arquivo}</small>";
        echo "<b> <br> <br> APLICAÇÃO SERÁ ENCERRADA !!!</b>";
        echo "<span class=\"ajax_close\"></span></p>";
        break;
    case E_USER_DEPRECATED:
        $CssClass = MSG_DEPRECATED;
        echo "<p class=\"trigger {$CssClass}\">";
        echo "<b>DEPRECATED<br>";
        echo "Erro na Linha {$Linha}: </b> {$Mensagem}<br>";
        echo "<small>Caminho do Arquivo: {$arquivo}</small>";
        echo "<b> <br> <br> APLICAÇÃO CONTINUARÁ EXECUTANDO !!!</b>";
        echo "<span class=\"ajax_close\"></span></p>";
        break;
endswitch;
?>
    </div>
</div>


<?php
require_once FOOTER;

if ($CodErro == E_USER_ERROR):
    die;
endif;
?>
