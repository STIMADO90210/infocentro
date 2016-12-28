 <?php 
 include 'libreria.php';               

//include($_SERVER['DOCUMENT_ROOT']."/inc/headerCode.inc.php");

 ?>
<!DOCTYPE html>
<html>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->  
<?php
include 'cabecera.php';
?>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<body onload="mueveReloj()">
 <!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->   
<section id="menu-0">   
  <?php
 include 'vistas/cabeza.php';                                                             
  ?>
</section>
<section class="mbr-section" id="listado1" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
<div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">Tiempos En PC</h3>
                        <small class="mbr-section-subtitle bg-danger">Control De Tiempo Del Ususario En Cada Maquina </small>
                        
                    </div>
                </div>
            </div>
        </div>

    
    

    <div class="mbr-testimonials mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">

                
                <table class="table table-bordered text-lg-center table-responsive">
                    <tr class="table-inverse  letra-blanca "> 
                       
                       <td>Nombre</td> 
                         <td>Fecha</td> 
                        <td>Hora Entrada</td>                        
                        <td>Tiempo Transcurrido</td>                       
                        <td>Hora De Salidad</td>
                       
                        <td>Maquina</td>                                                                        
                        
                    </tr>
                    
                    <?php 
                     //$usuario=new usuario();
                       // $user=$usuario->leer_usuario();  
                    for($i=0;$i<sizeof($equipo);$i++)
                    { ?>
                    <tr>                    
                       
                        <td><?php echo strtoupper($equipo[$i]['nomb']) ?></td>
                       
                        
                       
                        
                        
                        
                        <td><?php echo cambiaf_a_normal(date('d / m / Y')) ?></td>
                        
                        
                        <td>
                            <div id="relojPantalla">
                                 
                                
                            </div>
                        </td>
                       
                        
                        <td>
                        
                       
                            <iframe width="350" height="180" src="https://w2.countingdownto.com/1617158" frameborder="0"></iframe>

                            
                            </td>
                        
                        
                        
                        <td>
                              <div id="relojPantalla2">
                                 
                                
                            </div>
                        </td>
                        
                          
                        
                        
                        <td>
                            <select>
                                <?php  for ($maq=0;$maq<12;$maq++){ ?>
                                <option value="<?php echo $maq ?>">PC - <?php echo $maq+1 ?></option>
                                <?php } ?>
                            </select>
                            
                            
                        </td>
                       
                        
                    </tr>
                    <?php } ?>
                </table>
                

            </div>

        </div>

    </div>

</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-0" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 40px;">
    
   <?php
    include 'vistas/rodapie.php';       
   ?>
    
</section>




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