 <?php 
include 'libreria.php';



//<!----------------------------------------------------------------------------------------------------------------------------------------->
//<!----------------------------------------------------------------------------------------------------------------------------------------->
//<!----------------------------------------------------------------------------------------------------------------------------------------->  
function leer_cont(){
     $visita=  array();
     $sql="SELECT * FROM cont ";
     $res=mysql_query($sql,conectar::con());
     while($reg=mysql_fetch_assoc($res))
				{
					$visita[]=$reg;
				}
					return $visita;
 }
 
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
<body>
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
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 ">INFORME</h3>
                        <small class="mbr-section-subtitle bg-danger">visitas Totales</small>
                    </div>
                </div>
            </div>
        </div>

    
        <div class="container">
            <?php 
                $correcto=true;
                    if(isset($_POST['fec_ini'])>isset($_POST['fec_fin'])){
                        //var_dump($_POST);
                        $correcto=false;
                        ?>
                        <div class="container">
                        <br>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert" ><span>&times</span></button>
                                            <h6 class="text-lg-center">La fecha Inicial Debe Ser Menor Que La Final</h6>
                                    </div>
                                </div>
                            </div>
                         
                                  


                        </div>
                            
                            <?php
                    }
                    
                        
                                    
                                  
                                    $co=new contador();
                                   $c=$co->leer_contador(); 
                        
                                   
            ?>
            <form name="buscar_fecha" id="buscar_fecha" action="" class="form-group" method="post">
                <div class="col-lg-3">
                    <h6 class="text-lg-center">Fecha Inicial</h6>
                <select name="fec_ini" class="form-control">
                     <?php for($i=0;$i<sizeof($c);$i++){ ?>
                    <option value=" <?php echo $c[$i]['fecha'] ?>"> <?php echo strtoupper($c[$i]['dia']).'  '. cambiaf_a_normal($c[$i]['fecha'])  ?>      </option>
                     <?php } ?>
                </select>
                </div>
             
                     <?php 
   
                          if(isset($_POST['fec_ini']) and isset($_POST['fec_fin'])){
                                 
                                $conta=new contador();
                                $cont=$conta->leer_contador_rango($_POST['fec_ini'], $_POST['fec_fin']);
                                    
                       }else{
                          
                                    $conta=new contador();
                                   $cont=$conta->leer_contador(); 
                                  
                        }  
                        
             
             ?> 
                
                <div class="col-lg-3">
                    <h6 class="text-lg-center">Fecha Final</h6>
                    <select name="fec_fin" class="form-control" ">
                     <?php for($i=0;$i<sizeof($c);$i++){ ?>
                        <option value=" <?php echo $c[$i]['fecha'] ?>"> <?php echo strtoupper($c[$i]['dia']).'  '. cambiaf_a_normal($c[$i]['fecha'])  ?>      </option>
                     <?php } ?>
                </select>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-lg">Buscar Fecha</button>
                
                
            </form>
            
            <form action="imp_rep_semanal.php" name="pasar" method="post" >
                <button type="submit" class="btn btn-success btn-lg col-lg-offset-9">Imprimir Reporte Semanal</button>
                <?php
                            // var_dump($_POST['fec_ini']);
                if(isset($_POST['fec_ini']) and isset($_POST['fec_fin'])){ ?>
                <input type="hidden" name="valor1" value=" <?php echo $_POST['fec_ini']  ?>">
                <input type="hidden" name="valor2" value=" <?php echo $_POST['fec_fin']  ?>">
                
                <?php } ?>
            </form>
        </div>
    
    <br>
  
    <br>
    <div class="mbr-testimonials mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">

                
                <table class="table table-fluid text-lg-center">
                    <tr class="table-inverse  letra-blanca "> 
                        <td>Dia</td>
                        <td>Fecha</td>
                      
                       
                        <td>Usuarios<br> Nuevos</td>
                        <td>Usuarios<br> Regulares</td>
                        <td>Total</td>
                         <td>Acciones</td>
                                                                                                                                                                                                                   
                    </tr>                                                              
                             <?php 
                            //echo sizeof($cont);
                             $suma=0;
                             $sum_n=0;
                             $sum_r=0;
                             for($i=0;$i<sizeof($cont);$i++){ 
                             ?>   
                    <tr>  
                    <td><?php echo strtoupper($cont[$i]['dia']); ?></td>
                        <td><?php echo cambiaf_a_normal($cont[$i]['fecha']); ?></td>
                      
                       
                        <td><?php
                        
                        echo $cont[$i]['cont_nuevos'];
                        ?></td>
                        
                       
                        
                        <td><?php
                       
                        echo $cont[$i]['cont_regulo']; 
                        
                        ?></td>
                        <td><?php 
                        
                        $tot=$cont[$i]['cont_nuevos']+$cont[$i]['cont_regulo'];
                        echo $tot
                                
                        ?></td>
                        <td><a href="imp_rep_diario.php?dia=<?php  echo  $cont[$i]['dia'] ?>&fec=<?php  echo  $cont[$i]['fecha'] ?>" class="btn btn-danger btn-sm">Imprimir Reporte Diario</a></td>
                    </tr>  
                                
                             <?php 
                             $sum_n=$sum_n+$cont[$i]['cont_nuevos'];;
                             $sum_r=$sum_r+$cont[$i]['cont_regulo'];
                             $suma=$suma + $tot;
                             
                             } ?>
                   
                    
                     <tr class="table-inverse  letra-blanca "> 
                        <td>Totales</td>
                        <td></td>
                      
                       
                        <td><?php echo  $sum_n  ?></td>
                        <td><?php echo  $sum_r  ?></td>
                        <td><?php echo  $suma  ?></td>
                         <td></td>
                                                                                                                                                                                                                   
                    </tr>                                                              
                </table>
                <br>
                

            </div>

        </div>

    </div>

</section>

<section class="mbr-section " id="contacts1-0" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 40px;">
    
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
  

</script>
  
  
  <input name="animation" type="hidden">
</body>
</html>