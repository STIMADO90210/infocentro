 <?php
include 'libreria.php';


      if(isset($_POST['imagen']) and $_POST['enviar']=="guarda"){

          $img_slider=$_POST['imagen'];
           $sl=new slider();
           $s=$sl->add_slider($img_slider);

           ?>
<script>

        alert('Slider Se Registro Correctamente');
        window.location='mant_slider.php';
</script>

    <?php
    //
      }

          if(isset($_POST['imagen']) and $_POST['enviar']=="actualiza"){

          $img_slider=$_POST['imagen'];
          $id_slider=$_POST['id'];
           $sl=new slider();
           $s=$sl->actualiza_slider_id($img_slider, $id_slider);

           ?>
<script>

        alert('Slider Se Actualizo Correctamente');
        window.location='mant_slider.php';
</script>

    <?php
    //
      }
 
      
      if (isset($_GET['id_edit'])){
          
       $id_slider=$_GET['id_edit'];
       
                        $sl=new slider();
                        $s=$sl->leer_slider_id($id_slider);
                       
                        $id=$s[0]['id_slider'];
                        $img=$s[0]['img_slider'];
                       
                      
   }
      
 ?>
<!DOCTYPE html>
<html>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->  
<script type="text/JavaScript">
<!--
   
// -->
</script>

    <?php
include 'cabecera.php';
?>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->

<body onload="JavaScript:AutoRefresh(15000);">
    
  
 <!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->   
<section id="menu-0">   
  <?php
include 'vistas/cabeza.php';                                                             
 
 //----------------------------------------------------------------------------------------------
 
 
 
 
  ?>
    
</section>

<section class="mbr-section" id="listado1" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
<div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">Modulo Slider</h3>
                        <small class="mbr-section-subtitle bg-danger">Modulo Ingresar Imagenes Nuevas al Slider</small>                                                                                                                                      
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding" id="recarga">
        <div class="container">
            <div class="row">
  
                <form action="" method="post" name="form1" id="form1" class="form-group">
                   
                   <div class="form-group col-lg-9"> 
                       <?php  if (isset($img)){ ?>
                       <input class="form-control " name="imagen" type="text" value=" <?php echo $img ?>">                        
                         <?php  }else{ ?>
                         <input class="form-control color-blanco" name="imagen" type="text" placeholder="IMAGEN">  
                        <?php  } ?>
                    </div>    
                    
                    <a onclick="javascript:subirimagen();" class="btn btn-danger">BUSCAR IMAGEN</a>
                   
                     
                    <br>
                    <br>
                    <br>
                    <div class="clearfix"></div>
                    <?php  if (isset($_GET['id_edit'])){ ?>
                    <button type="submit" class="btn btn-primary col-lg-4" name="enviar" value="actualiza">Actualiza Imagen</button>
                    <input type="hidden" name="id" value="<?php echo $_GET['id_edit'] ?>">
                    <?php  }else{ ?>
                    <button type="submit" class="btn btn-primary col-lg-4" name="enviar" value="guarda">Guardar Imagen</button>
                    <?php  } ?>
                </form>                                                
            </div>

        </div>

    </div>

</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-0" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 40px;">
    
   <?php
    include 'vistas/rodapie.php';
   ?>
    
</section>
 
<script> 
 function subirimagen()
  {
	  self.name = 'opener';
	  remote = open('subirimg.php','remote','toolbar=yes, scrollbars=yes, resizable=yes, top=100, left=100, width=1150, height=500');
	  remote.focus();
	  
  }
  </script>







<script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
  <input name="animation" type="hidden">
</body>
</html>