<?php 

include 'libreria.php';

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
if(isset($_POST['buscar_ced']) && $_POST['buscar_ced']!=''){
    $ced=$_POST['buscar_ced'];
    $cedula=new usuario();
    $c=$cedula->buscar_cedula($ced);
    $ha=sizeof($c);
    
    if($ha==0)
        {        
        
        ?>
            <script>
                var mensaje2 = confirm("La cedula no esta Registrada ¿Desea Registrarla?");
            </script>
        <?php
       
       header('location:registro_user.php?ced='.$ced);
    }else{
        ?>
            <script>
                var mensaje = confirm("La cedula esta Registrada ¿Desea Registrar esta Visita?");
            </script>
         <?php    
          header('location:listado2.php?buscar='.$ced);
    }
}


?>
<!DOCTYPE html>
<html>
<?php

include 'cabecera.php';

 $visi=new visita();
        $vis=$visi->leer_regvis_user2();
        $cn=0;
        $cr=-1;
        $ci=0;
        $cd=0;
        if(sizeof($vis)>0){
         $fec=$vis[0]['fecha_visita'];
        } 
        for($i=0;$i<sizeof($vis);$i++){   
            
           $result = buscarfecha($vis[$i]['fecha_visita']);
           
          $per=new usuario();
          $user=$per->leer_usuario_id($vis[$i]['id_user']);
          if($fec!=$vis[$i]['fecha_visita']){ $fec=$vis[$i]['fecha_visita'];$cn=0;      $cr=0;         $ci=0;         $cd=0;}
                if($user[0]['tiempo']==0){$cn++;}
                if($user[0]['tiempo']==1){$cr++;}
           $induser=new indigena();
           $ind=$induser->leer_indigena_user($vis[$i]['id_user']);
                        if($ind[0]['indi_user']>1){$ci++;}

           $disc=new discap();
           $d=$disc->leer_discap_user($vis[$i]['id_user']);
                        if($d[0]['disc_user']>0){$cd++;}
           
            if ($result==FALSE){
               $fec=$vis[$i]['fecha_visita'];
               $dia=$vis[$i]['dia_visita'];
                $sql="INSERT INTO cont (dia,fecha,cont_nuevos,cont_regulo,cont_indio,cont_desc) "
                        . "VALUE('$dia','$fec','$cn','$cr','$ci','$cd')";
                $res=mysql_query($sql,conectar::con());
                
            }else{               
                if($d[0]['disc_user']!=NULL){
                $sql="UPDATE cont SET cont_nuevos=$cn,cont_regulo=$cr, cont_indio=$ci,cont_desc=$cd WHERE fecha='$fec'";
                $res=mysql_query($sql,conectar::con());
                } 
                
            }
            
            
        }
        


?>
<body>
 <!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->   
<section id="menu-0">
    
  <?php
include 'vistas/cabeza.php';

  ?>

</section>

<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<section class="mbr-section" id="msg-box5-0" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">
    <br>
<br>
<br>
     
     
    <div class="jumbotron">
    <!-- Búsqueda Google -->
<center>
<FORM method=GET action="http://www.google.com/search">
<TABLE bgcolor="#FFFFFF"><tr><td>
<A HREF="http://www.google.com/">
<IMG SRC="http://www.google.com/logos/Logo_40wht.gif" border="0" ALT="Google" align="absmiddle"></A>
<INPUT TYPE=text name=q size=31 maxlength=255 value="">
<INPUT TYPE=hidden name=hl value=es>
<INPUT type=submit name=btnG VALUE="Búsqueda Google">
</td></tr></TABLE>
</FORM>
</center>
<!-- Búsqueda Google -->
    </div>
</section>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<section class="mbr-section" id="msg-box5-0" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">
   <br>
<br>
<br>
     
   
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">
<?php 
       
        $blog=new blog();
        $b=$blog->leer_blog_ultimo();
?>               
              <div class="mbr-table-cell mbr-right-padding-md-up  text-xs-center ">
                  <h3 class="mbr-section-title display-2"><?php echo strtoupper($b[0]['titulo_art'])  ?></h3>
                  <div class="lead">
                      <p class="text-justify"><?php echo $b[0]['cont_art']  ?></p>
                  </div>
                  <div><a class="btn btn-primary" href="blog_detalle.php?id=<?php echo  $b[0]['id_art'] ?>"> LEER MAS  ...</a></div>
              </div>           
              <div class="mbr-table-cell mbr-valign-top col-md-4">
                  <div class="mbr-figure"><img src="assets/images/<?php echo $b[0]['img_art']?> " width="100"></div>
              </div>

            </div>
        </div>
    </div>
 <br>
<br>
<br>
</section>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<section class="mbr-section" id="msg-box5-0" style="background-color: rgb(48, 48, 48); padding-top: 0px; padding-bottom: 0px;">
   <br>
<br>
<br>
     
   
    <div class="container">
        <h3 class=" text-white text-lg-center">Buscar Cedula en Base de Datos</h3>
        <br>
        <form class="form-group" method="post" action="" name="buscar">
            <div class="form-group col-lg-6 col-lg-offset-3">
                <input name="buscar_ced" placeholder="Buscar Cedula" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Buscar Cedula</button>
        </form>
    </div>
<br>
<br>
</section>


<br>
<br>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar" data-ride="carousel" data-keyboard="false" data-wrap="true" data-interval="3000" id="slider-0">
  <?php 
  include 'vistas/slider.php';
  ?>
</section>
<br>
<br>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->

<section class="mbr-section" id="pricing-table1-0" style="background-color: rgb(48, 48, 48); padding-top: 120px; padding-bottom: 120px;">

    

    <div class="mbr-section mbr-section__container mbr-section__container--middle">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 text-xs-center">
                  <h3 class="mbr-section-title display-2">TABLA ESTADISTICA</h3>
                  <small class="mbr-section-subtitle">Porcentajes de usuarios segun categoria.</small>
              </div>
          </div>
      </div>
    </div>
        
    <div class="mbr-section mbr-section-nopadding mbr-price-table">
      <div class="row">
            <div class="col-xs-12  col-md-6 col-xl-3">
                <div class="mbr-plan card text-xs-center">
                    <div class="mbr-plan-header card-block">
                      
                      <div class="card-title">
                        <h3 class="mbr-plan-title">TOTAL VISITAS</h3>
                        <small class="mbr-plan-subtitle">NUEVOS/REGULARES/COMUNIDADES</small>
                      </div>
                        <?php
                            $todo=new visita();
                             $tot=$todo->leer_regvis_user2();
                             $total=  sizeof($tot);
                            ?>
                      <div class="card-text">
                          <div class="mbr-price">
                            <span class="mbr-price-value"></span>
                            <span class="mbr-price-figure"><?php echo $total; ?></span><small class=""></small>
                          </div>
                          <small class="mbr-plan-price-desc">100 % Visitas</small>
                      </div>
                    </div>
                   <!-- <div class="mbr-plan-body card-block">
                      <div class="mbr-plan-list"><ul class="list-group list-group-flush"><li class="list-group-item">32 GB storage</li><li class="list-group-item">Unlimited users</li><li class="list-group-item">15 GB bandwidth</li></ul></div>
                      <div class="mbr-plan-btn"><a href="www.infocentro.com" class="btn btn-white btn-white-outline">DEMO</a></div>
                    </div>-->
                </div>
            </div>
            <div class="col-xs-12  col-md-6 col-xl-3">
                <div class="mbr-plan card text-xs-center">
                    <div class="mbr-plan-header card-block bg-primary">
                     <!-- <div class="mbr-plan-label">HOT!</div>--->
                      <div class="card-title">
                        <h3 class="mbr-plan-title">REGULARES</h3>
                        <small class="mbr-plan-subtitle">MAS DE 2 VISITAS</small>
                      </div>
                     
                     <?php
                        $cont=  leer_cont();
                        $totind=0;
                        $totnuevos=0;
                        $totregulo=0;
                        $contdesc=0;
                         for($i=0;$i<sizeof($cont);$i++){                              
                             $totind=$totind+$cont[$i]['cont_indio'];                             
                             $totnuevos=$totnuevos+$cont[$i]['cont_nuevos']; 
                              $totregulo=$totregulo+$cont[$i]['cont_regulo'];  
                            $contdesc=$contdesc+$cont[$i]['cont_desc'];                                                                                 
                         }
                         
                            $pornue = $total * ($totnuevos/100);
                            $porreg = $total * ($totregulo/100);
                            $porind = $total * ($totind/100);
                            $pordes = $total * ($contdesc/100);
                         
                     ?>
                      <div class="card-text">
                          <div class="mbr-price">
                            <span class="mbr-price-value"></span>
                            <span class="mbr-price-figure"><?php echo $totregulo; ?></span><small class=""></small>
                          </div>
                          <small class="mbr-plan-price-desc"><?php echo $porreg ?>  % Visitas</small>
                      </div>
                    </div>
                
                </div>
            </div>
            <div class="col-xs-12  col-md-6 col-xl-3">
                <div class="mbr-plan card text-xs-center">
                    <div class="mbr-plan-header card-block">
                      
                      <div class="card-title">
                        <h3 class="mbr-plan-title">NUEVOS</h3>
                        <small class="mbr-plan-subtitle">NUEVOS VISITANTES</small>
                      </div>
                      <div class="card-text">
                          <div class="mbr-price">
                            <span class="mbr-price-value"></span>
                            <span class="mbr-price-figure"><?php echo $totnuevos ?></span><small class=""></small>
                          </div>
                          <small class="mbr-plan-price-desc"><?php echo $pornue ?>  % Visitas</small>
                      </div>
                    </div>
                  
                </div>
            </div>
            <div class="col-xs-12  col-md-6 col-xl-3">
                <div class="mbr-plan card text-xs-center">
                    <div class="mbr-plan-header card-block">
                      
                      <div class="card-title">
                        <h3 class="mbr-plan-title">Com. Indigena/PCD</h3>
                        <small class="mbr-plan-subtitle">TOTAL VISITAS</small>
                      </div>
                      <div class="card-text">
                          <div class="mbr-price">
                            <span class="mbr-price-value"></span>
                            
                            <span class="mbr-price-figure"><?php echo $totind.' / '.$contdesc ?></span><small class=""></small>
                          </div>
                          <small class="mbr-plan-price-desc"><?php echo $porind.'% Visitas / '.$pordes ?>  % Visitas</small>
                      </div>
                    </div>
                  
                </div>
            </div>
          </div>
    </div>

</section>
<br>
<br>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->

<section class="mbr-section  " id="contacts1-0" style="background-color: rgb(46, 46, 46); padding-top: 10px;   padding-bottom: 30px;">
    
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

  <!--<script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>-->
  
  
  <input name="animation" type="hidden">
  </body>
</html>