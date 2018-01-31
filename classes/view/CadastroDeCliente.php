<!-- AREA DO TOPO-->
<?php
require_once HEADER;
?>
<!-- FIM AREA DO TOPO-->
<div class="row">
    <div class="col-md-12">
        <h2 class="corLogo">Cadastro do Cliente </h2>
    </div>
</div>

<!-- AREA DO CONTEUDO-->
<!-- Formulario de Cadastro -->

<hr  size="1px" width="1170px"  color="#BDBDBD">
<form action="<?php echo LINK_CLIENTE_INSERIDO ?>" method="post">
    <fieldset>
        <legend class="corLogo">Informações Pessoais</legend>
        <div style="text-align:center;" class="row">

            <div  class="col-md-6">
                   <p><label for="NOME"> * Nome:<br>
                    <input type="text" name="NOME"  size="50" maxlength="40" class="form-control" placeholder="Digite seu Nome Completo"/> </p>
            </div>
            <div  class="col-md-6">
                   <p><label for="TELEFONE"> * Telefone:<br>
                    <input  name="TELEFONE"  size="30" maxlength="40"class="form-control"   placeholder=" (xx)x-xxxx-xxxx"/> </p>
            </div>
        </div>

        <div  style="text-align:center" class="row">

            <div class="col-md-6">
                         <p><label for="CNH"> * CNH:<br>
                        <input  name="CNH"  size="30" maxlength="40" class="form-control"  </p>
            </div>
            <div class="col-md-6">
                 <p><label for="email">* E-mail:<br>
                 <input type="email" name="email"  size="50" maxlength="40"class="form-control"  placeholder="usuario@email.com"   /></p>
            </div>
        </div>
    </fieldset>

    <hr  size="1px" width="1170px"  color="#BDBDBD">
    <div style="text-align:center">
                <p><label for="senha">* Senha:<br>
                <input  type="password" name="senha"  size="30" maxlength="40" class="form-control"  </p>
                 <br>
        </div>
   
           
      <input type="submit" name="cadastrar" class="btn btn-success btn-block" value="Cadastrar">
     
 </form>

    <!-- FIM AREA DO CONTEUDO-->
  <!-- AREA DO RODAPÉ-->
      <?php
require_once FOOTER;
?>
 <!--FIM AREA DO RODAPÉ-->