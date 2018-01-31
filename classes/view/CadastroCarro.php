<!-- AREA DO TOPO-->
<?php

if ( (  isset($_SESSION['Classe'])  ) && ( isset($_SESSION['Metodo']) ) ):
    $classe = $_SESSION['Classe'];
    $metodo = $_SESSION['Metodo'];
endif;


require_once HEADER;
?>
<!-- FIM AREA DO TOPO-->
<div class="row">
    <div class="col-md-12">
        <h2 class="corLogo">Cadastro do Carro </h2>
    </div>
</div>

<hr  size="1px" width="1170px"  color="#BDBDBD">
<form action="<?php echo LINK_CARRO_INSERIDO ?>" method="post" enctype="multipart/form-data">
    <fieldset>
     
        <p>Informações do carro</p>
        <div  class="row text-center">

            <div  class="col-md-4 ">
                   <p><label for="NomeCarro"> * Nome do Carro:<br>
                    <input   type="text" name="NomeCarro"  size="30" maxlength="40" class="form-control" /> </p>
            </div>
            <div  class="col-md-4">
                   <p><label for="IMG"> *Imagem:<br>
                       <input type="text" name="IMG"  size="30" maxlength="40"class="form-control" /> </p>
            </div>
            
<!--            		<div class="col-md-4">
			<label>Última inspeção</label>
			<input type="file" name="IMG" size="30" maxlength="40" class="form-control" />  
                        </div>-->
           
            <div class="col-md-4">
                         <p><label for="FABRICACAO"> * Fabricação:<br>
                        <input  name="FABRICACAO"  size="30" maxlength="40" class="form-control"  </p>
            </div>
            <div class="col-md-4">
                 <p><label for="VALORDIARIA">* Valor da Diaria:<br>
                     <input type="text" name="VALORDIARIA"   size="30" maxlength="40"class="form-control"   /></p>
            </div>
      

     

            <div class="col-md-4">
                <p><label for="PLACA"> * Placa <br>
                    <input type="text" name="PLACA"  size="30" maxlength="40" class="form-control"  </p>
            </div>
             <div class="col-md-4">
                <p><label for="AR">* Ar Condicionado :<br>
                <input  name="AR"  size="30" maxlength="40" class="form-control"  </p>
            </div>
            <div class="col-md-4">
                   <p><label for="CAMBIO">* Cambio:<br>
                   <input  name="CAMBIO"  size="30" maxlength="40" class="form-control"  </p>
             </div>
            <div class="col-md-4">
                   <p><label for="GPS">* GPS:<br>
                   <input  name="GPS"  size="30" maxlength="40" class="form-control"  </p>
             </div>
            
           
             <div class="col-md-4">
                   <p><label for="ASSENTOS">* Assentos:<br>
                   <input  name="ASSENTOS"  size="30" maxlength="40" class="form-control"  </p>
             </div>
             <div class="col-md-4">
                   <p><label for="MALAS">* Mala(s):<br>
                   <input  name="MALAS" size="30" maxlength="40" class="form-control"  </p>
             </div>
             <div class="col-md-4">
                   <p><label for="PORTAS">* Portas:<br>
                   <input  name="PORTAS"  size="30" maxlength="40" class="form-control"  </p>
             </div>
             

              <div class="col-md-3">
                   <p><label for="Adm_idAdm">* Id Adm:<br>
                   <input  name="Adm_idAdm"  size="30" maxlength="40" class="form-control"  </p>
             </div>
  
                          
    </fieldset>
       
    <hr  size="1px" width="1170px"  color="#BDBDBD">
   
           
      <input type="submit" class="btn btn-success btn-block" value="Salvar">
     
 </form>

<!-- FIM AREA DO CONTEUDO-->
  <!-- AREA DO RODAPÉ-->
<?php
require_once FOOTER;
?>
 <!-- FIM AREA DO RODAPÉ-->