<?php
if ( (  isset($_SESSION['Classe'])  ) && ( isset($_SESSION['Metodo']) ) ):
    $classe = $_SESSION['Classe'];
    $metodo = $_SESSION['Metodo'];
endif;

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon"  href="../view/_imagens/Icones/logo01.png/favicon.ico" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Forza</title>

    <!-- Bootstrap -->
    <link href="_css/bootstrap.min.css" rel="stylesheet">
    <link href="_css/style.css" rel="stylesheet">
    <link href="_css/estilo.css" rel="stylesheet">


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link href="_css/bootstrap-datepicker.css" rel="stylesheet"/>
		<script src="_js/bootstrap-datepicker.min.js"></script> 
		<script src="_js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
 <?php if ( ( isset($classe) ) && ( isset($metodo) ) ): ?>
            <?php if (($classe == 'View') && ($metodo == 'ExibirErros')): ?>
                <link href="<?php echo ERROS; ?>" rel="stylesheet">
            <?php endif; ?>
        <?php endif; ?>
  </head>
  <body>
  
<section class="wrrapNavbar">
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
      <a href="#"><img src="classes/view/_imagens/Icones/logo01.png"  width="110" height="50"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="<?php echo LINK_HOME; ?>">Home <span class="sr-only">(current)</span></a></li>
        
        <?php if( UsuarioLogado() ): ?>

                  <!--         ADM     -->   
                            <li><a href="<?php echo LINK_CLIENTE_LISTAR; ?>">Clientes</a></li>
                            <li><a href="<?php echo LINK_LISTAR_CARRO;  ?>">Carros</a></li>
                            <li><a href="<?php  ?>">Reservas</a></li>
               <!--         <li><a href="<?php echo LINK_SOBRE; ?>">Sobre</a></li>-->
                            <li><a href="<?php echo LINK_LOGOUT; ?>" ><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGqSURBVDhP1ZM7SwNBEIDPTgvx0fgo1EJIMntBMCS3Gx/prFUidkErEUXwga29/gWxEH+BVqJm74yktBD8BWItCDY+iDN7Y+5CcoliIX4wxX47Ozu7t2f9CV5WzFDw8PdoBXcUPPw5ZSk7XAULPKwr6ElY0bnhdh42R0sY1UrcuxLetBMbMS5U0FUijVGhnNIEDJGL5CKV6qKFWOwdC29WLKuNfLggOVfZGyYHHa0h3xA85r7ZXcI6K0O44BeegjXKxcIHrGrRubFuLcUzxi2rKo0KEpSLBZ9usrFOVgG4IG+6c8QqqypRBYMu7TlWAa4UuzTpqcQ0qypRBYvSzpkmlNhhFYD3t212w6/IqiX4fDJmjQNbrAI8Ryya3RxYYtUS7HrZ7xDyrALKEnrN25Nwzqol+FGusNhraTLZw6oWvMcj/whinlUk9Cdxd4es6vGm4gOY+IBJL1olZlnXQRtSjslNQz/rxhSdZAqP8si7n1In1xkACtOVhDMzhzmejI/zsubgQx3Ep3CC8WGuIBTGSTim03D696Hj4L0WsMCeH6Jw6dh9PP0vsaxPB2/U5WpmU74AAAAASUVORK5CYII="> Você está Logado como Adm! Sair</a></li>
                 
        
                <!--       CLIENTE    --> 
                            <li><a href="<?php echo LINK_LISTAR_CARRO_TODOS;  ?>">Carros</a></li>
<!--                             <li><a href="<?php echo LINK_SOBRE; ?>">Sobre</a></li>-->
                            <li><a href="<?php echo LINK_LOGOUT; ?>" ><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGqSURBVDhP1ZM7SwNBEIDPTgvx0fgo1EJIMntBMCS3Gx/prFUidkErEUXwga29/gWxEH+BVqJm74yktBD8BWItCDY+iDN7Y+5CcoliIX4wxX47Ozu7t2f9CV5WzFDw8PdoBXcUPPw5ZSk7XAULPKwr6ElY0bnhdh42R0sY1UrcuxLetBMbMS5U0FUijVGhnNIEDJGL5CKV6qKFWOwdC29WLKuNfLggOVfZGyYHHa0h3xA85r7ZXcI6K0O44BeegjXKxcIHrGrRubFuLcUzxi2rKo0KEpSLBZ9usrFOVgG4IG+6c8QqqypRBYMu7TlWAa4UuzTpqcQ0qypRBYvSzpkmlNhhFYD3t212w6/IqiX4fDJmjQNbrAI8Ryya3RxYYtUS7HrZ7xDyrALKEnrN25Nwzqol+FGusNhraTLZw6oWvMcj/whinlUk9Cdxd4es6vGm4gOY+IBJL1olZlnXQRtSjslNQz/rxhSdZAqP8si7n1In1xkACtOVhDMzhzmejI/zsubgQx3Ep3CC8WGuIBTGSTim03D696Hj4L0WsMCeH6Jw6dh9PP0vsaxPB2/U5WpmU74AAAAASUVORK5CYII="> Você está Logado! Sair</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo LINK_LISTAR_CARRO_TODOS; ?>">Carros</a></li>
                            <li><a href="<?php echo LINK_SOBRE; ?>">Sobre</a></li>
                            <li><a href="<?php echo LINK_LOGIN;  ?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACjSURBVDhPY6AbOGKlLnXYRleJGHzMQksIqg03OGCpfRiI/xOFLbTbodpwA6BCoIFa07G5CBkfsNA6TbyBRCgkVt0QM/CAuY7rfgutuatCQ5nBkkiAaANByQaWHPaZ6xoDDXwH1LgM3VC8BoIk9ltoz8SOtY4BNf/fb6m9FNlQ+hqIDKjiZWSArJAqkUKswuFmINULB+QiCh8mxkCqF7DkAQYGAKaX/OtzPCwIAAAAAElFTkSuQmCC">Você está deslogado! Login</a></li>
                        <?php endif; ?>


        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</section>

<div id="home" class="firstSection"></div>

<section id="reserva">

<form action="<?php echo LINK_LISTAR_CARRO_DATA?>" method="post">
    <fieldset>
        <h2 class="corLogo text-center">Alugue um carro </h2>
   
  <div class="form-row text-center">
    <div class="col-md-3 mb-3 text-center">
      <label for="">Local da Reserva: </label>
     <input class="form-control" id="disabledInput" type="text" placeholder="Araguaína-To" disabled>
    </div>
      <div class="col-md-3 mb-3">
      <label for="">Local da Devolução:</label>
  <input class="form-control" id="disabledInput" type="text" placeholder="Araguaína-To" disabled>
    </div>
    <div class="col-md-3 mb-3">
      <label for="">Data da Retirada:</label>
      <input type="text"  name="aRetirada"class="form-control" id="dReserva"  required>
    </div>
     <div class="col-md-3 mb-3">
      <label for="">Data da Devolução:</label>
      <input type="text"  name="aDevolucao" class="form-control" id="dDevolucao"  required>
     </div><br>
      
          <input type="submit" class="btn btn-default " value="Buscar">
  </div>
      </fieldset>
    </form>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
</section>

<section id="maisDetalhes">
    <hr class="featurette-divider">
    <div class="container marketing ">

      <!-- Three columns of text below the carousel -->
      <div class="row text-center">
        <div class="col-lg-4">
            <img  src="classes/view/_imagens/Icones/localizacao.png" alt="localizacao" width="100" height="100">
            <h2 class="corLogo">Localização</h2>
          <p><b>Endereço:</b> Av. Amazonas, Quadra 56, Lote 1 - Lot. Araguaina Sul, Araguaína - TO, 77826-170</p>
          <p><a class="btn btn-default" href="https://www.google.com.br/maps/place/IFTO+-+Campus+Aragua%C3%ADna/@-7.1814825,-48.1960827,17z/data=!3m1!4b1!4m5!3m4!1s0x92d90c56b42b26f5:0xbf1675e5b95f5187!8m2!3d-7.1814825!4d-48.193894" role="button">Mais Detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img src="classes/view/_imagens/Icones/contatos.png" alt="contatos" width="100" height="100">
          <h2 class="corLogo">Contatos</h2>
          <p>Telefone: (63) 3236-4000</p>
          <p>Nos envie um e-mail com sugestões, reclamações e elogios</p>
          <p><a class="btn btn-default" href="" role="button">Mais Detalhes  &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="classes/view/_imagens/Icones/sobrenos.png" alt="sobre nós" width="100" height="100">
          <h2 class="corLogo">Sobre nós</h2>
          <img src="classes/view/_imagens/Icones/logo01.png"  width="110" height="50">
          <p>Fundação: 29 de dezembro de 2008</p>
          
          <p><a class="btn btn-default" href="" role="button">Mais Detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>
</section>

		<script type="text/javascript">
			$('#dReserva').datepicker({	
				format: "dd/mm/yyyy",	
				language: "pt-BR",
				startDate: '+0d',
			});
		</script>
                
		<script type="text/javascript">
			$('#dDevolucao').datepicker({	
				format: "dd/mm/yyyy",	
				language: "pt-BR",
				startDate: '+0d',
			});
		</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="_js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="_js/bootstrap.min.js"></script>
    <script src="_js/app.js"></script>
   
 <?php
require_once FOOTER;
?>

