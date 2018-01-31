<!-- AREA DO TOPO-->
<?php
require_once HEADER;
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
$value10=array_column($_SESSION['resultado'], 'PORTAS');       $value10=$value10[0];

?>
<!-- FIM AREA DO TOPO-->

<!-- AREA DO CONTEUDO-->
<div class="row">
    <div class="col-md-12">
        <h2 class="corLogo">Editar Carro</h2><hr>
    </div>
</div>
<form action="<?php echo LINK_CARRO_EDITADO."&idCarros=".$idCarros; ?>" method="post" >
   <!-- <input  type='hidden' id='idClientes' name='idClientes' value="">       -->
    <fieldset>
        <p>Informações do carro</p>
        <div  class="row text-center">

            <div  class="col-md-4 ">
                   <p><label for="NomeCarro"> * Nome do Carro:<br>
                    <input   type="text" name="NomeCarro" value="<?php echo $value0 ?>" size="30" maxlength="40" class="form-control" /> </p>
            </div>
            <div  class="col-md-4">
                   <p><label for="IMG"> *Imagem:<br>
                       <input type="text" name="IMG" value="<?php echo $value1 ?>"  size="30" maxlength="40"class="form-control" /> </p>
            </div>
           
            <div class="col-md-4">
                         <p><label for="FABRICACAO"> * Fabricação:<br>
                        <input  name="FABRICACAO" value="<?php echo $value2 ?>" size="30" maxlength="40" class="form-control"  </p>
            </div>
            <div class="col-md-4">
                 <p><label for="VALORDIARIA">* Valor da Diaria:<br>
                     <input type="text" name="VALORDIARIA" value="<?php echo $value3 ?>"  size="30" maxlength="40"class="form-control"   /></p>
            </div>
      

     

            <div class="col-md-4">
                <p><label for="PLACA"> * Placa <br>
                    <input type="text" name="PLACA" value="<?php echo $value4 ?>" size="30" maxlength="40" class="form-control"  </p>
            </div>
             <div class="col-md-4">
                <p><label for="AR">* Ar :<br>
                <input  name="AR" value="<?php echo $value5 ?>" size="30" maxlength="40" class="form-control"  </p>
            </div>
            <div class="col-md-4">
                   <p><label for="CAMBIO">* Cambio:<br>
                   <input  name="CAMBIO" value="<?php echo $value6 ?>" size="30" maxlength="40" class="form-control"  </p>
             </div>
            <div class="col-md-4">
                   <p><label for="GPS">* GPS:<br>
                   <input  name="GPS" value="<?php echo $value7 ?>" size="30" maxlength="40" class="form-control"  </p>
             </div>
            
           
             <div class="col-md-4">
                   <p><label for="ASSENTOS">* ASSENTOS:<br>
                   <input  name="ASSENTOS" value="<?php echo $value8 ?>" size="30" maxlength="40" class="form-control"  </p>
             </div>
             <div class="col-md-4">
                   <p><label for="MALAS">* GPS:<br>
                   <input  name="MALAS" value="<?php echo $value9 ?>" size="30" maxlength="40" class="form-control"  </p>
             </div>
             <div class="col-md-4">
                   <p><label for="PORTAS">* PORTAS:<br>
                   <input  name="PORTAS" value="<?php echo $value9 ?>" size="30" maxlength="40" class="form-control"  </p>
             </div>
             
              
    </fieldset>
       
    <hr  size="1px" width="1170px"  color="#BDBDBD">
   
           
      <input type="submit" class="btn btn-success btn-block" value="Salvar">
     
 </form>
    
    <!-- FIM AREA DO CONTEUDO-->
  <!-- AREA DO RODAPÉ-->
   
<?php require_once FOOTER; ?>
<!-- FIM AREA DO RODAPÉ-->