
<!-- AREA DO TOPO-->
<?php
//acesso restrito
if ( ! UsuarioLogado() ):
    header('Location: '.LINK_LOGIN );
endif;
//mensagens
$resposta=false;
if (isset($_SESSION['resposta'])):
    $resposta = $_SESSION['resposta'];
endif;
$repostaEditado=false;
if (isset($_SESSION['respostaEditado'])):
    $repostaEditado = $_SESSION['respostaEditado'];
endif;
$repostaExcluido=false;
if (isset($_SESSION['respostaExcluido'])):
    $repostaEditado = $_SESSION['respostaExcluido'];
endif;
$respostaInserido=false;
if (isset($_SESSION['respostaInserido'])):
    $repostaEditado = $_SESSION['respostaInserido'];
endif;
//armazena o resultado 
$lista = $_SESSION['resultado'];
require_once HEADER;
?>

<!-- FIM AREA DO TOPO-->


<!-- AREA DO CONTEUDO-->
  <div class="row">
    <div  class="col-md-12">
        <h2 class="corLogo"> Cliente </h2>  
                   
        <?php if (is_string($resposta)): ?>
            <p class="text-center alert-success"> <?php echo $resposta ?></p>
        <?php endif; ?>
        <?php if (is_string($resposta)): ?>
            <p class="text-center alert-success"> <?php echo $repostaEditado ?></p>
        <?php endif; ?>
        <?php if (is_string($resposta)): ?>
            <p class="text-center alert-success"> <?php echo $repostaExcluido ?></p>
        <?php endif; ?>
        <?php if (is_string($resposta)): ?>
            <p class="text-center alert-success"> <?php echo $respostaInserido ?></p>
        <?php endif; ?>
       
    </div>
  
  </div><br>



<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="corLogo">idCliente</th>
                    <th class="corLogo">Nome</th>
                    <th class="corLogo">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $linha): ?>
                    <tr>
                        <td><?php echo $linha['idClientes']; ?></td>
                        <td><?php echo $linha['NOME']; ?></td>
                        <!-- Botão-->
                        <td class="col-md-3" >
                            <a  href="<?php echo LINK_CLIENTE_VISUAL . $linha['idClientes']; ?>"  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Visualizar</button></a>
                            <a  href="<?php echo LINK_CLIENTE_EDITAR . $linha['idClientes']; ?> " class="btn btn-info" > Editar</a>
                            <a href="<?php echo LINK_CLIENTE_EXCLUIR . $linha['idClientes']; ?>" class="btn btn-danger" onclick="return confirm('Deseja excluir este usuário?');"> Excluir</a>
                        </td>
                       
                        <!-- Modal -->
                 <a  href="<?php echo LINK_CLIENTE_LISTAR ?>" <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="text-decoration:none;color:black;">
                    <div class="modal-dialog" role="document">
                         <div class="modal-content">
                        </div>
                    </div>
                     </div></a>
                        <!--FIM  Modal -->
                        
                    </tr>
                <?php endforeach; ?>

                    </tbody>
                    </table>
                </div>
            </div>
           <!-- FIM AREA DO CONTEUDO-->
           <!-- AREA DO RODAPÉ-->
            <?php
require_once FOOTER;
?>
            <!-- FIM DO RODAPÉ-->
