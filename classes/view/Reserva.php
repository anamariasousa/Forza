<?php
//acesso restrito
if ( ! UsuarioLogado() ):
    header('Location: '.LINK_LOGIN );
endif;
//$id=$_SESSION['usuario_logado'];
//$id=$_SESSION['sessao'];
// $idCliente=$_SESSION['idCliente'];  var_dump($idCliente);
//$idCarro=$_SESSION['idCarros'];      var_dump($idCarro);
$intervalo=$_SESSION["intervalo"];    
$VeV=$_SESSION ['ValorCeE'];// var_dump($inte);
//$VeV=$_SESSION ['(VALORDIARIA + VALOR)'];       // var_dump($inte);
session_start();

$retirada=$_SESSION["Retirada"];
     
$devolucao=$_SESSION["Devolucao"]; 

  var_dump($VeV);
  
    
    


require_once HEADER;
?>

<body>

    <div class="container jumbotron">
         <h2 class="corLogo"><?php echo $NomeCarro ?></h2>
    <div class="col-xs-6 col-lg-4">
         <img src="classes/view/_imagens/Carros/<?php echo $IMG ?>"/> 
    </div>  

        <div class=" row col-md-12  ">

            
            <form action="">

    <div class="col-xs-6 col-lg-7 text-center">
         <h3 class="corLogo">Locais e datas:</h3>
         <p><b> Retirada:</b> Araguaína-TO, dia  <p class="text-center alert-success"><?php echo $retirada ?></p>
         <p><b>Devolução:</b> Araguaína-TO, dia  <p class="text-center alert-success"> <?php echo $devolucao ?></p>
         <p><b>Período de aluguel: </b><p class="text-center alert-success"> <?php echo $intervalo ?> Dia(s)</p>
    </div>
              
                <div class="  text-center "><BR><BR>
                <p class="corLogo"><b>Seu valor total:</b><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAH5SURBVDhP5VLPS1RRFH4LS6h9KUi1CJq59824GOre6xCzDbJcOP0DBoKgIFi0CKL2qX+Ii3ZB0Lz7LCLBVuGvv0BECW2v1vedd+Y1oy7b+cHhnXu+c75z73knueTIXK2hbokvLq3HYNo0+houkfm0pW4/cm+fxGBPVr19znM2Vp3IvdnJg/3TZ4whlznRmzmcj7vnEp/q9et5MHsoOOiE6m0kvdHiw+jteznD0HBRYsGe5s6+jg9qIxDdR87uj0bjmsqxk31Z3MBM5848VbH1zy69KXwwP2ni3zdD5CgKG5eaonaBvACBNXZGlyv44knm8Fuo31C6T5BgIwgcIW9bauhDQ8iPj+4OcnaYw0qnaUfZjc8UUnFWkJDnMzdUUtZSY8OYq4nMTAi7iKJ24Zu21gkuEsStnjE3G7OTXfGvTXPr/wv2Ppl71hXXOgFHcHYMyFsqcuXJH6ghT1ZyDYFfsdUakJ+CIff+lDykUzQ9JqsPK8PI/w3bLH+Kt9+VlgG/YDcuNQgu+CmE11lY8P+ezBg55mQhfRydnZGbejtPXsDFRmAXnfa4rLK0hSiXGLO1b2HvwC/zNsIF8yq6e3cgdsDavsUmeDMIHGPzZ3vO2+zea7jpFgTHJYdLzRo9n0NsVry6JXJfq/FP0jrNqtVwicxVnbqXE0nyFzDRS4gZQTsiAAAAAElFTkSuQmCC"></p>
              
                 <input type="submit" class="btn btn-success btn-block" value=" Reservar Carro ">
                   <p class="corLogo">Cancelamento gratuito a qualquer momento!</p>
            </div>
            
           </form>
        </div>
      </div>

    

      <footer class="footer">
        <p>&copy; 2018 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
