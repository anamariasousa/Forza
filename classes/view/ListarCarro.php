
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
    $repostaExcluido = $_SESSION['respostaExcluido'];
endif;
$respostaInserido=false;
if (isset($_SESSION['respostaInserido'])):
    $repostaInserido = $_SESSION['respostaInserido'];
endif;
//armazena o resultado 
$lista = $_SESSION['resultado'];
require_once HEADER;
?>
<!-- FIM AREA DO TOPO-->

<!-- AREA DO CONTEUDO-->
  <div class="row">
    <div  class="col-md-9">   
        <h1 class="corLogo"> Carros </h1>   
       
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
       
    </div><br><br>
    <div  class="col-md-3 ">
        <a href="<?php echo LINK_CARRO_INSERIR; ?>" class="btn btn-info btn-block "> Criar Cadastro de Carro </a>
    </div>
  </div><br>

<div class="row">
    <div class="col-md-12">
        <?php if (count($lista) > 0): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="corLogo">id do Carro</th>
                    <th class="corLogo">Nome</th>
                    <th class="corLogo">Ano de Fabricação</th>
                    <th class="corLogo">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $linha): ?>
                    <tr>
                        <td><?php echo $linha['idCarros']; ?></td>
                        <td><?php echo $linha['NomeCarro']; ?></td>
                        <td><?php echo $linha['FABRICACAO']; ?></td>
                       
                        <!-- Botão-->
                        <td class="col-md-3" >
                            <a  href="<?php echo LINK_CARRO_VISUAL . $linha['idCarros']; ?>"  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Visualizar</button></a>
                            <a  href="<?php echo LINK_CARRO_EDITAR . $linha['idCarros']; ?> " class="btn btn-info" > Editar</a>
                            <a href="<?php echo LINK_CARRO_EXCLUIR . $linha['idCarros']; ?>" class="btn btn-danger" onclick="return confirm('Deseja excluir este carro?');"> Excluir</a>
                        </td>
                        
                           <!-- Modal -->
                 <a  href="<?php echo LINK_LISTAR_CARRO ?>" <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="text-decoration:none;color:black;">
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
          <?php else: ?>
            <p>Nenhum carros listado</p>
        <?php endif ?>
                </div>
            </div>
          <!-- FIM AREA DO CONTEUDO-->
          <!-- AREA DO RODAPÉ-->
             
            <!-- FIM AREA DO RODAPÉ-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

            <!-- Importando o js do bootstrap -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php
require_once FOOTER;
?>