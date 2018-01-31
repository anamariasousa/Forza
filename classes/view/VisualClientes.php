<!-- AREA DO CONTEUDO-->  
<?php
$idClientes=array_column($_SESSION['resultado'], 'idClientes');
$value0=array_column($_SESSION['resultado'], 'NOME');     $value0=$value0[0];
$value1=array_column($_SESSION['resultado'], 'TELEFONE'); $value1=$value1[0];
$value2=array_column($_SESSION['resultado'], 'CNH');      $value2=$value2[0];
$value3=array_column($_SESSION['resultado'], 'EMAIL');    $value3=$value3[0];

$value7=array_column($_SESSION['resultado'], 'SENHA');    $value7=$value7[0];
$idClientes=$idClientes[0];

     ?>
     <a  href=" <?php echo LINK_CLIENTE_LISTAR ?>" <button type="button" class="close"  aria-label="Close"><span aria-hidden="true">&times;</span></button></a>
     
      <div class="modal-header">
        <h4 class="modal-title text-center corLogo" id="myModalLabel"> Cliente:  <?php echo $value0 ?> </h4>
      </div>
      <div class="modal-body text-center">
       
       <table class="table table-striped">
                <tr>
                    <td>Telefone:<br> <?php echo $value1 ?> </td>
                </tr>
                <tr>
                    <td>CNH:<br> <?php echo $value2 ?> </td>
                </tr>
                <tr>
                    <td>E-mail:<br> <?php echo $value3 ?> </td>
                </tr> 
              
                    <td>Senha:<br> <?php echo $value7 ?> </td>
                </tr>
              
       </table>
      </div>
     
     
      <div class="modal-footer">
       
       <a  href="<?php echo LINK_CLIENTE_LISTAR ?>"  <button type="button" class="btn btn-success" > Fechar</button></a>
                           
      </div>
     <!-- FIM AREA DO CONTEUDO-->