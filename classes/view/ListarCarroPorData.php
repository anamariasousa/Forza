<?php
//acesso restrito
//if ( ! UsuarioLogado() ):
//    header('Location: '.LINK_LOGIN );
//endif;
 require_once HEADER ;
 
$lista = $_SESSION['resultado'];


?>

<div id="conteudoCarroData">
  
<div class="col-xs-12 col-sm-12">
    
    <div class="container">
         
  <div class="row row-offcanvas row-offcanvas-right">
     
   <div class="row">
             <h1 class="corLogo">Modelos de Carros</h1>
        <?php foreach ($lista as $linha): ?>
                  
                       
                        
                       
            <div class="col-xs-6 col-lg-4 text-center ">
                 <hr class="featurette-divider">
              <h2 class="corLogo"><?php echo $linha['NomeCarro']; ?></h2>
              <img class="featurette-image img-responsive center-block" src="classes/view/_imagens/Carros/<?php echo $linha['IMG']; ?>"alt="Generic placeholder image">
               <a href="https://icons8.com"></a>
                 <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF9SURBVDhPxdQ9KEVhHMfx4yXv4haFQZJBeRmUrkFMBspkUl4yWEySwiCjgVjuYmBgUUpiUCiDQXlbvKQMLBhQCklevz/nOTq5Jx2d4lef7nOee+7//J/zPF3rv9KFGnsYPPXYxQwqNBEkKbjGuzGPXycXifbwMxk4hDqM14RJFlLtoXeaMYp9dGuCxCGETYwjE04WMYdplGjie+pwCS1tAupmzVy79UGF98z1FvIQlWzc4gSPOMMrWjCLQYzgDle4wA3W4ZlYNCIBpXjGG8rhRK9CXR0gDTnwdZx6oE7CiIG60/HRJnRCDyqD7zRBy9X7SoaKFaMIU7iHTsOPScIY9MM2aMkvyEc6tOPt0JJPUQU9qBeeUSfHUGcqpnOnghEcYQnLUDF9atkqPgnP6L3pJhUc0AQZwg70PnWktqGulFXofn2nbqNSiQYsoFUTrmxg2B5+RZ31owPabd+pxTlUtFATQaKNesCTsYLA0WY5S3b/aQRKNQrs4Z/Gsj4AXaFYzcN5a6MAAAAASUVORK5CYII=" title="Ar condicionado"><?php echo $linha['AR']; ?>
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADFSURBVDhP1dM/DgFBGIbxjUY0OpVEOIDOCcQFtC6gdwQ6B1ArVTqVQiOhFGdAqZOQEJ632GQyO/58o9on+ZXeTOLbJPd1sMUdF8xRR1RtaOjpOaACc3qZP5YawlQRD4TGZAVTJYSGUhuYOyI0JlOYmyA0Jl2Ya+AKf2yPAqLqwx3TLTYRXQ3uoF73Vy24gzpqnZQ5vWyAE9xB0cH3UMbX9O2u4Y+E3DCD/rxgOoVPX8c7Z1SRaYfQD34xRqYFlpFGyEVJ8gIMAH0Nxlfb6QAAAABJRU5ErkJggg==" title="Assentos"><?php echo $linha['ASSENTOS']; ?>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAD5SURBVDhPxdQ/agJBHMXxhYCtCmk0jTmARpJ7iFESJHamy0UsvICkMFfwAnoB/1xAW4tUSRVIGvN9OrPMLgvuTAg++MDub2aei6xG58gNHoyGBn/JK/YpYwSlCRXM8GjMzUxP7Z0edLh/uDtG15pp7WQKqOPOk87obCJlbKFPD7FBCXHukbXRRxtxnpC1ybXCABNn5lJHnDyFNdgskF73LryGzRLpde/CNZ7x5sy+sDPX3oUuPeELiuiaWVChXq1buNE7+I6gwm9cQrlAC1P8IKhQRhjCfndWolA/fHcxhDriXOETWRvz+EAFiai0A/tnmpfOVPEfiaJfmHXG4u94GUkAAAAASUVORK5CYII=" title="Mala(s)"> <?php echo $linha[ 'MALAS']; ?>
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEXSURBVDhP3dS9S0JhGMbhY1gRRRQNKUIETjXV3+AQCNXmKDi4JS6CQ2NjW2NL6FRjU25BW0ubEDQF4logBH1Y/e73JB4676nzMdUNF/g8yK2cB3X+RdbQwxVmtEiaM6jsA1UtkiSPV9ShwltMIHaOcIdVqFB2ESsLGKCGFYwKLxErDTxgDt5C2USkTKGPAzP5C08RKWU8I2smf6EOpV3o3KDlvjT5XiiHCJUC3rFhJje2Qj3fefyazhdvbIWiw/2YdejbbZlpnKDCe6QRmGN0kTKTmxz2YSuUEqxZxhN04Qz2oN/wEHpeurqt8BrWbENvOMcbHqFLFzGJRVRwgRd4S2fhi5YnaGMH0wjKEvTPow9vavFX4jifoyJbv/IPNvgAAAAASUVORK5CYII=" title="GPS"><?php echo $linha['GPS']; ?>
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFmSURBVDhPYxgF9AduviEq7v5R09x9I8qMjdNYocLkgdDQUGYP/8iXyXVT/oWllX9zD4jqh0qRBzw8QkQ9g2I/1Sw5+j+vf+V/76C4o1Ap8gHQVaf8otK/eQbFfHTzCQuACpMPXLxCDrl5hxS4+YfLQoXIB+7ewbYu3sFnoFzKgatXyA5X75BAKJcy4OwTaAr07mUgkxEiQgYAJZOQyMTuiNi0GZ7+EfcCQmL3eAVHmEOlSQcgV8Wn5Hzbun33/9nzFv+fMn3O/4i41E1QaeJBZHxGd2Rc+qWA0LinrV39/w4dOf6/vLrpf1FZ3X+vgMhfQPEwqFLigH9o3MeLl6/+v3L1+v9Pn7/8//r12/9bt++C8ap1G/9HxKbuhyrFDSITMqqAMfgfhAPD4/98/PTpv39oLJiPDXv4EYjt6Pj0u1t37Ia7BB+eu2DJ/8j4tGVQrdhBeEzqDlC4EYuBkdMO1UpLwMAAAGFWzp7jOZddAAAAAElFTkSuQmCC" title="Câmbio"><?php echo $linha['CAMBIO']; ?>
              
              
<!--              <p>Id:<?php// echo $linha['idCarros']; ?></p>-->
              
              <p><b>Essa oferta inclui:</b></p>
              <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACESURBVDhPYxgFAwv2W2ip7DPXNIdyKQMgww5Yaj3eb6n9dr+xmghUmDwAM+yAhdaf/eZaCVBh8sDAGgYKYJAmKBcFkGwYKGBBAQwOaDRDyfYmSDFIE7KhZBsGA2iGelBkGAwgDNX+T7FhMHDQQiseGKY/QTRUiHKw11JTHsocBXQDDAwAF3xfEDOmd5MAAAAASUVORK5CYII=">Quilometragem livre</p>
               <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACESURBVDhPYxgFAwv2W2ip7DPXNIdyKQMgww5Yaj3eb6n9dr+xmghUmDwAM+yAhdaf/eZaCVBh8sDAGgYKYJAmKBcFkGwYKGBBAQwOaDRDyfYmSDFIE7KhZBsGA2iGelBkGAwgDNX+T7FhMHDQQiseGKY/QTRUiHKw11JTHsocBXQDDAwAF3xfEDOmd5MAAAAASUVORK5CYII=">Acessorio Opcional </p>
               <p><a class="btn btn-default corLogo" href="<?php echo LINK__CARRO_DETALHES_RESERVA . $linha['idCarros']; ?>" role="button">Mais detalhes &raquo;</a> </p>
            </div><!--/.col-xs-6.col-lg-4-->
            
            
             <?php endforeach; ?>
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

       
      </div><!--/row-->

      <hr>

    

    </div><!--/.container-->

   </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="_js/vendor/jquery.min.js"><\/script>')</script>
    <script src="_js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="_js/ie10-viewport-bug-workaround.js"></script>
    <script src="_js/offcanvas.js"></script>
  <?php
require_once FOOTER;
?>
