<!-- AREA DO CONTEUDO-->  
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


$idCarros=array_column($_SESSION['resultado'], 'idCarros');   $idCarros=$idCarros[0];
$value0=array_column($_SESSION['resultado'], 'NomeCarro');        $value0=$value0[0];
$value1=array_column($_SESSION['resultado'], 'IMG');          $value1=$value1[0];
$value2=array_column($_SESSION['resultado'], 'FABRICACAO');   $value2=$value2[0];
$value3=array_column($_SESSION['resultado'], 'VALORDIARIA');  $value3=$value3[0];
$value4=array_column($_SESSION['resultado'], 'PLACA');    $value4=$value4[0];
$value5=array_column($_SESSION['resultado'], 'AR');          $value5=$value5[0];
$value6=array_column($_SESSION['resultado'], 'CAMBIO');       $value6=$value6[0];
$value7=array_column($_SESSION['resultado'], 'GPS');       $value7=$value7[0];
$value8=array_column($_SESSION['resultado'], 'ASSENTOS');       $value8=$value8[0];
$value9=array_column($_SESSION['resultado'], 'MALAS');       $value9=$value9[0];


     ?>
        <?php if (is_string($resposta)): ?>
            <p class="text-center alert-info"> <?php echo $resposta ?></p>
        <?php endif; ?>
     <a  href=" <?php echo LINK_LISTAR_CARRO ?>" <button type="button" class="close"  aria-label="Close"><span aria-hidden="true">&times;</span></button></a>
     
      <div class="modal-header">
        <h4 class="modal-title text-center corLogo" id="myModalLabel"> Nome do Carro:  <?php echo $value0 ?> </h4>
      </div>
      <div class="modal-body text-center">
       
       <table class="table table-striped">
                <tr>
                    <td>Foto do Carro:<br> <img src="classes/view/_imagens/Carros/<?php echo $value1 ?>" class="img-thumbnail"/> </td>
                </tr>
                <tr>
                    <td>Ano de Fabricação: <?php echo $value2 ?> </td>
                </tr>
                <tr>
                    <td>Valor da Diaria: <?php echo $value3?> </td>
                </tr> 
                <tr>
                        <td>Placa:<?php echo $value4 ?>    </td>
                </tr>
                <tr>
                    <td>Ar condicionado:<?php echo $value5 ?> </td>
                </tr>
                <tr>
                    <td>Câmbio: <?php echo $value6 ?> </td>
                </tr>
                <tr>
                    <td>GPS: <?php echo $value7 ?> </td>
                </tr>
                <tr>
                    <td>Portas:<?php echo $value8 ?> </td>
                </tr>
                <tr>
                    <td>Mala(s):<?php echo $value9 ?> </td>
                </tr>
                
              
       </table>
      </div>
     
     
      <div class="modal-footer">
       
       <a  href="<?php echo LINK_LISTAR_CARRO ?>"  <button type="button" class="btn btn-success" > Fechar</button></a>
                           
      </div>
     <!-- FIM AREA DO CONTEUDO-->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

            <!-- Importando o js do bootstrap -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
