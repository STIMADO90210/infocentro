<?php
class regvisita
{
	private $regvisita;


					//metodo  constructor
					public function contruc()
					{
						$this->$regvisita=array();
					}
		
//============================================================================================
				//metodo muestra todas  categorias 
			public function leer_regvisita()
			{
				$sql="SELECT * FROM reg_visita";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->regvisita[]=$reg;
				}
					return $this->regvisita;	
			}
			
			//============================================================================================
                       	//metodo muestra todas  categorias 
			public function leer_regvisita_ced($ced)
			{
				$sql="SELECT * FROM reg_visita WHERE ced_user='$ced'";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->regvisita[]=$reg;
				}
					return $this->regvisita;	
			}
                     //============================================================================================
  
                        
                        	//metodo muestra todas  categorias 
			public function reg_visita($ced,$mot,$fec,$hor)
			{
				$sql="INSERT INTO reg_visita (ced_user,mot_visita,fecha,hora) value('$ced','$mot','$fec','$hor')";
				
                                $res=mysql_query($sql,conectar::con());
                                
                             return;
			}
			
                        
			//============================================================================================
}
?>
