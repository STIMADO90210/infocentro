<head>
  <!-- Site made with Mobirise Website Builder v3.5.1, www.infocentro.com -->
  
  <meta http-equiv="content-Type" content="text/html" charset="iso-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.5.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/icono.png" type="image/x-icon">
  <title>SUEÑOS DEL GIGANTE</title>
 <!-- <meta name="description" content="">-->
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900">
 <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
<link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/bootstrap/css/stilacho.css">
    <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
 <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <script src="http://www.clocklink.com/embed.js"></script> <script type="text/javascript" language="JavaScript">obj=new Object;obj.clockfile="5005-green.swf";obj.TimeZone="Venezuela_Caracas"; obj.width=120;obj.height=40;obj.wmode="transparent";showClock(obj);</script>
  
  <script>
	var inicio=30;
	var timeout=0;
 
	function empezarDetener(elemento)
	{
		if(timeout==0)
		{
			// empezar el cronometro
 
			elemento.value="Detener";
 
			// Obtenemos el valor actual
			inicio=vuelta=new Date().getTime();
 
			// iniciamos el proceso
			funcionando();
		}else{
			// detemer el cronometro
 
			elemento.value="Empezar";
			clearTimeout(timeout);
			timeout=0;
		}
	}
 
	function funcionando()
	{
		// obteneos la fecha actual
		var actual = new Date().getTime();
 
		// obtenemos la diferencia entre la fecha actual y la de inicio
		var diff=new Date(actual-inicio);
 
		// mostramos la diferencia entre la fecha actual y la inicial
		var result=LeadingZero(diff.getUTCHours())+":"+LeadingZero(diff.getUTCMinutes())+":"+LeadingZero(diff.getUTCSeconds());
		document.getElementById('crono').innerHTML = result;
 
		// Indicamos que se ejecute esta función nuevamente dentro de 1 segundo
		timeout=setTimeout("funcionando()",1000);
	}
 /* Funcion que pone un 0 delante de un valor si es necesario */
	function LeadingZero(Time) {
		return (Time < 10) ? "0" + Time : + Time;
	}
	</script>
 
	<style>
	.crono_wrapper {text-align:center;width:200px;}
	</style>
        
        
        
        
        <script language="JavaScript"> 
            function mueveReloj(){ 
                    momentoActual = new Date() ;
                    hora = momentoActual.getHours() ;
                    if(hora>12){hora=hora-12;}
                    if(hora==0){hora=12;}
                    minuto = momentoActual.getMinutes() ;
                    segundo = momentoActual.getSeconds(); 

                    horaImprimible = hora + " : " + minuto + " : " + segundo ;
                        document.getElementById('relojPantalla').innerHTML = horaImprimible;
                        document.getElementById('relojPantalla2').innerHTML = horaImprimible;
                    

                    setTimeout("mueveReloj()",1000) 
            } 
        </script> 
  

 



</head>
