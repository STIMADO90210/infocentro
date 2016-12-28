  

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        
        <div class="container-fluid">
    
            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <?php 
                        
                       // if(!isset($_SESSION['nivel'])){ ?>
                   <!--     <a href="index.php" class="navbar-logo img-thumbnail"><img src="assets/images/LOGO.jpg" alt="Infocentro"></a>-->
                        <?php 
                        //}  else {
                            
                        
                        //if(isset($_SESSION['nivel']) and $_SESSION['nivel']=2){ ?>
                        <a href="index.php" class="navbar-logo img-thumbnail"><img class="img-responsive img-fluid" src="assets/images/LOGO02CHAVEZ.jpg" alt="Infocentro"></a>
                        <?php// }else{
                       // if(isset($_SESSION['nivel']) and $_SESSION['nivel']=1){
                        ?>
   <!-- <a class="navbar-caption" href="index.php">PATRIA NUEVA</a>-->
                        <?php// }}} ?>
                        
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item">
                            <?php if(isset($_SESSION['nombre'])){?>
                            <a class="nav-link link text-uppercase" href="index.php"> <?php echo $_SESSION['nombre']; ?></a>
                            <?php }else{?>
                            <a class="nav-link link" href="index.php">PRINCIPAL</a>
                            <?php }?>
                        </li>
                       
                        <li class="nav-item"><a class="nav-link link" href="blog_full.php">BLOG</a></li>
                         <?php if(isset($_SESSION['nivel']) and $_SESSION['nivel']<2){?>
                        <li class="nav-item dropdown">
                            <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="www.infocentro.com/">REPORTES</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="listado1.php">Listado Principal</a>
                                <a class="dropdown-item" href="ver_visita.php">Ver Registros</a>
                                <a class="dropdown-item" href="reporte_semanal.php">Reporte Semanal</a>
                                
                                 
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle" data-toggle="dropdown-submenu" href="www.infocentro.com/">Impresiones</a>
                                <div class="dropdown-menu dropdown-submenu">
                                    <a class="dropdown-item" href="contru.php">Porcentje Visistas Al mes</a>
                                    <a class="dropdown-item" href="contru.php">Listado De Usuarios</a>
                                    <a class="dropdown-item" href="contru.php">Listado Indigena</a>
                                    <a class="dropdown-item" href="contru.php">Listado Descapacitado</a>                                    
                                                                                                                                                                                                                   
                                </div>
                            </div>
                                <a class="dropdown-item" href="contru.php">Calculos Estimados %</a>
                            </div></li>
                         <?php } ?>
                             <?php if(isset($_SESSION['nivel']) and $_SESSION['nivel']<2){?>
                            <li class="nav-item dropdown">
                                <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="www.infocentro.com/">REGISTRO</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="contru.php">Registrar Infocentro</a>
                                    <a class="dropdown-item" href="registro_user.php">Registrar Usuario</a>
                                    <a class="dropdown-item" href="listado2.php">Registrar Visita</a>
                                    <a class="dropdown-item" href="mant_usuario.php">Usuarios</a>
                                    <a class="dropdown-item" href="motivo.php">Motivos de Visitas</a>
                                    <a class="dropdown-item" href="mant_discap.php">Discapacidad</a>                                      
                                    <a class="dropdown-item" href="mant_indigena.php">Com. Indigena</a>
                                    <a class="dropdown-item" href="lista_blog.php">Mant. Blog</a>
                                     <a class="dropdown-item" href="mant_slider.php">Mant. Slider</a>
                                    
                                    <?php if($_SESSION['nivel']==0){ ?>
                                    <a class="dropdown-item" href="mant_nivel.php">Mant. Admin</a>
                                    <?php } ?>
                                </div>
                            </li>
                            <?php }?>
                             <li class="nav-item dropdown">
                                <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="www.infocentro.com/">LOGIN</a>
                                <div class="dropdown-menu">
                                     <?php if(isset($_SESSION['nombre'])){?>
                                    <a class="dropdown-item" href="logout.php">CERRAR SESSION</a>
                                     <?php }else{?>
                                    <a class="dropdown-item" href="loguear.php">INICIAR SESSION</a>
                                    <?php }?>
                                    
                                   
                                    
                                </div>
                            </li>
                            <li class="nav-item nav-btn">
                                <a class="nav-link btn btn-white btn-white-outline text-uppercase" ><?php echo $dia[date('w')].' '.date('j').' de '.$mes[date('n')-1].' de '. date('Y'); ?></a>
                            </li>
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>
