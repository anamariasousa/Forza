<?php
// Se o usuario estiver logado redireciona para a home 
if ( UsuarioLogado() ):
    header('Location: '.LINK_HOME );
endif;

require_once HEADER;
$resultado=false;
if (isset($_SESSION['resultado'])):
    $resultado = $_SESSION['resultado'];
endif;
?>
<html>
	<head>
		<title>Forza</title>
                <link rel="stylesheet" type="text/css" href="_css/erros.css"></link>
            
	</head>

	<body>
            
            
            <div class="menu1" ></div>
            <form action="<?php echo LINK_ACESSAR_SISTEMA ?>" method="post">
            <div class="firstSection1">
          
		<div class="container1">
			<img src="men.png" alt="missing">
                        <h2 class="corLogo">Login no Sistema</h2>
                          <?php if (is_string($resultado)): ?>
                    
            <p class=" alert-danger "> <?php echo $resultado ?></p>
        <?php else: ?>
            <p class=" alert-info "> Insira os dados de login</p>
        <?php endif; ?>
                        <form action="" method="post">
				<div class="font-input">
                                    <input type="text" name="email" required  autocomplete="off" placeholder="Email">
                                </div>
				<div class="font-input">
					<input type="password" name="senha"  autocomplete="off" required placeholder="Senha">
				</div>
			       <div class="font-input"> 
                                 
                                    <input  type="submit" name="logar"  class="btn-login" value="Logar"
                            
                                
                                    <p><a class="btn-login" type="submit"  name="cadastrar"  href="<?php echo LINK_CLIENTE_NOVO; ?>" role="button">Cadastrar</a></p>
                            </div>
                         
			</form>
		</div>
            </div>
	</body>
</html>