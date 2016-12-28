<?php

class contador
{
	private $contador;


					//metodo  constructor
					public function contruc()
					{
						$this->$contador=array();
					}
		
                    //============================================================================================
				//metodo muestra todas  categorias 
			public function leer_contador()
			{
				$sql="SELECT * FROM cont";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->contador[]=$reg;
				}
					return $this->contador;	
			}
                        //============================================================================================
				//metodo muestra todas  categorias 
			public function leer_contador_fecha($fec1,$fec2)
			{
				$sql="SELECT * FROM cont WHERE fecha BETWEEN '$fec1' AND '$fec2'";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->contador[]=$reg;
				}
					return $this->contador;	
			}
                           //============================================================================================
				//metodo muestra todas  categorias 
			public function leer_contador_rango($fec1,$fec2)
			{
                          
                           
				$sql= "SELECT * FROM cont WHERE fecha BETWEEN '$fec1' AND '$fec2'";
                                
				$res=mysql_query($sql,conectar::con());
                                
				while($reg=mysql_fetch_assoc($res))
				{
                                  
					$this->contador[]=$reg;
                                        
				}
					return $this->contador;	
			}
                     
                            //============================================================================================
  
                        
                        	//metodo muestra todas  categorias 
			public function guardar_contador($dia,$f,$nuevos,$viejos)
			{               
                                    $tot=$nuevos+$viejos;
                                    
				$sql="INSERT INTO contadores (dia,fecha,nuevos,regulares,totales) value('$dia','$f','$nuevos','$viejos','$tot')";
				
                                $res=mysql_query($sql,conectar::con());
                             
                             return;
			}
                         //============================================================================================
  
                        
                        	//metodo muestra todas  categorias 
			public function nuevos_contador($nuevos,$f)
			{               
                                    
				$sql="UPDATE  contadores SET nuevos='$nuevos' WHERE fecha='$f'";
				
                                $res=mysql_query($sql,conectar::con());
                                ?> 
                                    <script type='text/javascript'> 
                                                              alert('esperate');
                                                              window.location='reporte_semanal.php';
                                      </script>;
                                <?php
                             return;
			} 
                         //============================================================================================
  
                        
                        	//metodo muestra todas  categorias 
			public function regulares_contador($regulares,$f)
			{               
                                    
				$sql="UPDATE  contadores SET regulares='$$regulares' WHERE fecha='$f'";
				
                                $res=mysql_query($sql,conectar::con());
                                ?> 
                                    <script type='text/javascript'> 
                                                              alert('esperate');
                                                              window.location='reporte_semanal.php';
                                      </script>;
                                <?php
                             return;
			} 
			
			//============================================================================================
}                        
?>