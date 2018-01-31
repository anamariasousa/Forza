
<?php
require_once HEADER;

$idClientes=array_column($_SESSION['resultado'], 'idClientes');
$value0=array_column($_SESSION['resultado'], 'NOME');     $value0=$value0[0];
$value1=array_column($_SESSION['resultado'], 'TELEFONE'); $value1=$value1[0];
$value2=array_column($_SESSION['resultado'], 'CNH');      $value2=$value2[0];
$value3=array_column($_SESSION['resultado'], 'EMAIL');    $value3=$value3[0];
$value4=array_column($_SESSION['resultado'], 'ENDERECO'); $value4=$value4[0];
$value7=array_column($_SESSION['resultado'], 'SENHA');    $value7=$value7[0];
$idClientes=$idClientes[0];
?>
<!-- FIM AREA DO TOPO-->
<div class="row">
    <div class="col-md-12">
        <h2 class="corLogo">Editar Cliente</h2>
    </div>
</div>
 <!-- AREA DO CONTEUDO-->
        <!-- Formulario  --> 
<form action="<?php echo LINK_CLIENTE_EDITADO."&idClientes=".$idClientes; ?>" method="post">
  
    <fieldset>
        <legend class="corLogo">Informações Pessoais</legend>
        <div style="text-align:center;" class="row">

            <div  class="col-md-6">
                   <p><label for="NOME"> * Nome:<br>
                    <input type="text" name="NOME" value="<?php echo $value0 ?>" size="50" maxlength="40" class="form-control" placeholder="Digite seu Nome Completo"/> </p>
            </div>
            <div  class="col-md-6">
                   <p><label for="TELEFONE"> * Telefone:<br>
                    <input  name="TELEFONE" value="<?php echo $value1 ?>" size="30" maxlength="40"class="form-control"   placeholder=" (xx)x-xxxx-xxxx"/> </p>
            </div>
        </div>

        <div  style="text-align:center" class="row">

            <div class="col-md-6">
                         <p><label for="CNH"> * CNH:<br>
                        <input  name="CNH"  value="<?php echo $value2 ?>"size="30" maxlength="40" class="form-control"  </p>
            </div>
            <div class="col-md-6">
                 <p><label for="email">* E-mail:<br>
                 <input type="email" name="email" value="<?php echo $value3 ?>" size="50" maxlength="40"class="form-control"  placeholder="usuario@email.com"   /></p>
            </div>
        </div>
    </fieldset>

    <hr  size="1px" width="1170px"  color="#BDBDBD">
           <div style="text-align:center">
                <p><label for="senha">* Senha:<br>
                <input   name="senha" value="<?php echo $value7 ?>" size="30" maxlength="40" class="form-control"  </p>
                 <br>
        </div>
   
           
      <input type="submit" class="btn btn-success btn-block" value="Salvar">
     
 </form>
    
     <!-- FIM AREA DO CONTEUDO-->
     
  <!-- AREA DO RODAPÉ-->
<?php require_once FOOTER; ?>
 <!--FIM AREA DO RODAPÉ-->