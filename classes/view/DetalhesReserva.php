
<?php
 require_once HEADER;
 //acesso restrito
//if ( ! UsuarioLogado() ):
//    header('Location: '.LINK_LOGIN );
//endif;
 $Acessorios = $_SESSION['resultado2'];
 $Extras = $_SESSION['resultado3'];
 
$idCarros=array_column($_SESSION['resultado1'], 'idCarros'); $idCarros=$idCarros[0];
$IMG=array_column($_SESSION['resultado1'], 'IMG');        $IMG=$IMG[0];
$NomeCarro=array_column($_SESSION['resultado1'], 'NomeCarro');          $NomeCarro=$NomeCarro[0];
$AR=array_column($_SESSION['resultado1'], 'AR');   $AR=$AR[0];
$CAMBIO=array_column($_SESSION['resultado1'], 'CAMBIO');  $CAMBIO=$CAMBIO[0];
$GPS=array_column($_SESSION['resultado1'], 'GPS');    $GPS=$GPS[0];
$PORTAS=array_column($_SESSION['resultado1'], 'PORTAS');          $PORTAS=$PORTAS[0];
$ASSENTOS=array_column($_SESSION['resultado1'], 'ASSENTOS');       $ASSENTOS=$ASSENTOS[0];
$MALAS=array_column($_SESSION['resultado1'], 'MALAS');       $MALAS=$MALAS[0];
$VALORDIARIA=array_column($_SESSION['resultado1'], 'VALORDIARIA');       $VALORDIARIA=$VALORDIARIA[0];


session_start();

$retirada=$_SESSION['aRetirada'];
     
$devolucao=$_SESSION['aDevolucao']; 
$intervalo=$_SESSION["intervalo"]; 
   //  var_dump($Extras);

   

     ?>

<div class="container">
   <div class="jumbotron row">
          <a href="https://icons8.com"></a>
         <h2 class="corLogo"><?php echo $NomeCarro ?></h2>
    <div class="col-xs-6 col-lg-4">
         <img src="classes/view/_imagens/Carros/<?php echo $IMG ?>"/> 
         <hr> <p>Valor da Diaria:<?php echo $VALORDIARIA ?></p>
    </div>
         
    <div class="col-xs-6 col-lg-8 text-center">
         <h3 class="corLogo">Locais e datas:</h3>
         <p><b> Retirada:</b> Araguaína-TO, dia  <p class="text-center alert-success"> <?php echo $retirada ?></p>
           
         <p><b>Devolução:</b> Araguaína-TO, dia  <p class="text-center alert-success"> <?php echo $devolucao ?></p>
         <p<p><b>Período de aluguel: </b><p class="text-center alert-success"> <?php echo $intervalo ?> Dia(s)</p>
    </div>
        
    <div class="col-xs-6 col-lg-5 text-justify">
        <h3 class="corLogo">Características do veículo:</h3>
        <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF9SURBVDhPxdQ9KEVhHMfx4yXv4haFQZJBeRmUrkFMBspkUl4yWEySwiCjgVjuYmBgUUpiUCiDQXlbvKQMLBhQCklevz/nOTq5Jx2d4lef7nOee+7//J/zPF3rv9KFGnsYPPXYxQwqNBEkKbjGuzGPXycXifbwMxk4hDqM14RJFlLtoXeaMYp9dGuCxCGETYwjE04WMYdplGjie+pwCS1tAupmzVy79UGF98z1FvIQlWzc4gSPOMMrWjCLQYzgDle4wA3W4ZlYNCIBpXjGG8rhRK9CXR0gDTnwdZx6oE7CiIG60/HRJnRCDyqD7zRBy9X7SoaKFaMIU7iHTsOPScIY9MM2aMkvyEc6tOPt0JJPUQU9qBeeUSfHUGcqpnOnghEcYQnLUDF9atkqPgnP6L3pJhUc0AQZwg70PnWktqGulFXofn2nbqNSiQYsoFUTrmxg2B5+RZ31owPabd+pxTlUtFATQaKNesCTsYLA0WY5S3b/aQRKNQrs4Z/Gsj4AXaFYzcN5a6MAAAAASUVORK5CYII=" title="Ar condicionado"><b> Ar condicionado<b> <?php echo $AR ?>  </p>
        <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEXSURBVDhP3dS9S0JhGMbhY1gRRRQNKUIETjXV3+AQCNXmKDi4JS6CQ2NjW2NL6FRjU25BW0ubEDQF4logBH1Y/e73JB4676nzMdUNF/g8yK2cB3X+RdbQwxVmtEiaM6jsA1UtkiSPV9ShwltMIHaOcIdVqFB2ESsLGKCGFYwKLxErDTxgDt5C2USkTKGPAzP5C08RKWU8I2smf6EOpV3o3KDlvjT5XiiHCJUC3rFhJje2Qj3fefyazhdvbIWiw/2YdejbbZlpnKDCe6QRmGN0kTKTmxz2YSuUEqxZxhN04Qz2oN/wEHpeurqt8BrWbENvOMcbHqFLFzGJRVRwgRd4S2fhi5YnaGMH0wjKEvTPow9vavFX4jifoyJbv/IPNvgAAAAASUVORK5CYII=" title="GPS"><b>Possui GPS:</b> <?php echo $GPS ?></p>
        <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFmSURBVDhPYxgF9AduviEq7v5R09x9I8qMjdNYocLkgdDQUGYP/8iXyXVT/oWllX9zD4jqh0qRBzw8QkQ9g2I/1Sw5+j+vf+V/76C4o1Ap8gHQVaf8otK/eQbFfHTzCQuACpMPXLxCDrl5hxS4+YfLQoXIB+7ewbYu3sFnoFzKgatXyA5X75BAKJcy4OwTaAr07mUgkxEiQgYAJZOQyMTuiNi0GZ7+EfcCQmL3eAVHmEOlSQcgV8Wn5Hzbun33/9nzFv+fMn3O/4i41E1QaeJBZHxGd2Rc+qWA0LinrV39/w4dOf6/vLrpf1FZ3X+vgMhfQPEwqFLigH9o3MeLl6/+v3L1+v9Pn7/8//r12/9bt++C8ap1G/9HxKbuhyrFDSITMqqAMfgfhAPD4/98/PTpv39oLJiPDXv4EYjt6Pj0u1t37Ia7BB+eu2DJ/8j4tGVQrdhBeEzqDlC4EYuBkdMO1UpLwMAAAGFWzp7jOZddAAAAAElFTkSuQmCC" title="Câmbio"><b>Câmbio:</b> <?php echo $CAMBIO ?></p>
    </div>
         
    <div class="col-xs-6 col-lg-4 text-center">
        <h3 class="corLogo">Capacidade:</h3>
        <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADFSURBVDhP1dM/DgFBGIbxjUY0OpVEOIDOCcQFtC6gdwQ6B1ArVTqVQiOhFGdAqZOQEJ632GQyO/58o9on+ZXeTOLbJPd1sMUdF8xRR1RtaOjpOaACc3qZP5YawlQRD4TGZAVTJYSGUhuYOyI0JlOYmyA0Jl2Ya+AKf2yPAqLqwx3TLTYRXQ3uoF73Vy24gzpqnZQ5vWyAE9xB0cH3UMbX9O2u4Y+E3DCD/rxgOoVPX8c7Z1SRaYfQD34xRqYFlpFGyEVJ8gIMAH0Nxlfb6QAAAABJRU5ErkJggg==" title="Assentos"><b>Número de Assentos:</b> <?php echo $ASSENTOS ?></p>
        <p>  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAD5SURBVDhPxdQ/agJBHMXxhYCtCmk0jTmARpJ7iFESJHamy0UsvICkMFfwAnoB/1xAW4tUSRVIGvN9OrPMLgvuTAg++MDub2aei6xG58gNHoyGBn/JK/YpYwSlCRXM8GjMzUxP7Z0edLh/uDtG15pp7WQKqOPOk87obCJlbKFPD7FBCXHukbXRRxtxnpC1ybXCABNn5lJHnDyFNdgskF73LryGzRLpde/CNZ7x5sy+sDPX3oUuPeELiuiaWVChXq1buNE7+I6gwm9cQrlAC1P8IKhQRhjCfndWolA/fHcxhDriXOETWRvz+EAFiai0A/tnmpfOVPEfiaJfmHXG4u94GUkAAAAASUVORK5CYII=" title="Mala(s)"><b>Número de Mala(s):</b>  <?php echo $MALAS ?></p>
    </div><!--/.col-xs-6.col-lg-4-->
 </div>
    
 <h2 class=" corLogo text-center"> Escolha taxa e extras </h2>
 <div class="row ">
     <div class="col-xs-6 col-lg-8">
        <h4><b>Serviços e taxas extras incluídos<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAH5SURBVDhP5VLPS1RRFH4LS6h9KUi1CJq59824GOre6xCzDbJcOP0DBoKgIFi0CKL2qX+Ii3ZB0Lz7LCLBVuGvv0BECW2v1vedd+Y1oy7b+cHhnXu+c75z73knueTIXK2hbokvLq3HYNo0+houkfm0pW4/cm+fxGBPVr19znM2Vp3IvdnJg/3TZ4whlznRmzmcj7vnEp/q9et5MHsoOOiE6m0kvdHiw+jteznD0HBRYsGe5s6+jg9qIxDdR87uj0bjmsqxk31Z3MBM5848VbH1zy69KXwwP2ni3zdD5CgKG5eaonaBvACBNXZGlyv44knm8Fuo31C6T5BgIwgcIW9bauhDQ8iPj+4OcnaYw0qnaUfZjc8UUnFWkJDnMzdUUtZSY8OYq4nMTAi7iKJ24Zu21gkuEsStnjE3G7OTXfGvTXPr/wv2Ppl71hXXOgFHcHYMyFsqcuXJH6ghT1ZyDYFfsdUakJ+CIff+lDykUzQ9JqsPK8PI/w3bLH+Kt9+VlgG/YDcuNQgu+CmE11lY8P+ezBg55mQhfRydnZGbejtPXsDFRmAXnfa4rLK0hSiXGLO1b2HvwC/zNsIF8yq6e3cgdsDavsUmeDMIHGPzZ3vO2+zea7jpFgTHJYdLzRo9n0NsVry6JXJfq/FP0jrNqtVwicxVnbqXE0nyFzDRS4gZQTsiAAAAAElFTkSuQmCC"></b></h4> 
        <b>Tarifa base</b>
        <p class="corLogo">CANCELAMENTO GRÁTIS - FLEXIBILIDADE </p>
        <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACESURBVDhPYxgFAwv2W2ip7DPXNIdyKQMgww5Yaj3eb6n9dr+xmghUmDwAM+yAhdaf/eZaCVBh8sDAGgYKYJAmKBcFkGwYKGBBAQwOaDRDyfYmSDFIE7KhZBsGA2iGelBkGAwgDNX+T7FhMHDQQiseGKY/QTRUiHKw11JTHsocBXQDDAwAF3xfEDOmd5MAAAAASUVORK5CYII=">250 Quilometragem livre (BRL 2,02/Quilometragem excedente)</p>
        <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACESURBVDhPYxgFAwv2W2ip7DPXNIdyKQMgww5Yaj3eb6n9dr+xmghUmDwAM+yAhdaf/eZaCVBh8sDAGgYKYJAmKBcFkGwYKGBBAQwOaDRDyfYmSDFIE7KhZBsGA2iGelBkGAwgDNX+T7FhMHDQQiseGKY/QTRUiHKw11JTHsocBXQDDAwAF3xfEDOmd5MAAAAASUVORK5CYII=">PREÇO MAIS BARATO - VOCÊ ECONOMIZA 9%</p>
        <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACESURBVDhPYxgFAwv2W2ip7DPXNIdyKQMgww5Yaj3eb6n9dr+xmghUmDwAM+yAhdaf/eZaCVBh8sDAGgYKYJAmKBcFkGwYKGBBAQwOaDRDyfYmSDFIE7KhZBsGA2iGelBkGAwgDNX+T7FhMHDQQiseGKY/QTRUiHKw11JTHsocBXQDDAwAF3xfEDOmd5MAAAAASUVORK5CYII=">Imposto de Circulação</p>
        <p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACESURBVDhPYxgFAwv2W2ip7DPXNIdyKQMgww5Yaj3eb6n9dr+xmghUmDwAM+yAhdaf/eZaCVBh8sDAGgYKYJAmKBcFkGwYKGBBAQwOaDRDyfYmSDFIE7KhZBsGA2iGelBkGAwgDNX+T7FhMHDQQiseGKY/QTRUiHKw11JTHsocBXQDDAwAF3xfEDOmd5MAAAAASUVORK5CYII=">Taxa de Localização Premium</p>
     </div><!--/.col-xs-6.col-lg-4-->
            
     <form action="<?php echo  LINK_CARRO_RESERVAR; ?>"  method="post"> 
     <div class="col-xs-5 col-lg-4">
        
        <h4><b>Extras recomendados </b></h4>
    
       <div >
       <label> Acessorios (Opcional): </label>
			<select name="NOME"  title="Acessorios" class="form-control" required>
				<option value='' required selected disabled>Selecione um Acessorio</option>
				<?php foreach ($Acessorios as $Acessorio): ?>
					<option ><?php echo $Acessorio['NOME']; ?></option>
				  <?php endforeach; ?>
			</select>
    	</div>
         <div >
          <label> Extras: </label>
			<select name="SEGURO"  title="Extras" class="form-control" required>
				<option value='' selected disabled>Selecione um Extra</option>
				<?php foreach ($Extras as $Extra): ?>
					<option value="<?= $Extra['idExtras']?>"><?php echo $Extra['SEGURO']; ?> Valor de $<?php echo $Extra['VALOR']; ?></option>
				  <?php endforeach; ?>
			</select>
        	</div>
     
    </div><!--/.col-xs-6.col-lg-4-->
</div><!--/row-->
      

		
             <div class=" row col-md-12  ">
            <div class=" jumbotron  text-center ">
             
                <p class="corLogo">Cancelamento gratuito a qualquer momento!</p>
                 <input type="submit" class="btn btn-success btn-block" value=" Aceitar Tarifas e Taxas &raquo; ">
    
            </div>
            
           
        </div>
  </form>
</div><!--/.col-xs-12.col-sm-9-->
        
  
          
         
 <?php
require_once FOOTER;
?>