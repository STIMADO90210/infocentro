<?php
 class comenta
{
	private $comenta;


					//metodo  constructor
					public function contruc()
					{
						$this->$comenta=array();
					}
		
//============================================================================================
				//metodo muestra todas  categorias 
			public function leer_comenta()
			{
				$sql="SELECT * FROM comenta ORDER BY id_art DESC";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->comenta[]=$reg;
				}
					return $this->comenta;	
                        }            
//============================================================================================
				//metodo muestra todas  categorias 
			public function leer_comenta_id($id)
			{
				$sql="SELECT * FROM comenta WHERE id_art='$id' ORDER BY id_come DESC ";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->comenta[]=$reg;
				}
					return $this->comenta;	
                        }                
                            
//============================================================================================
				//metodo muestra todas  categorias 
			public function add_comenta($fecha,$hora,$nick,$comenta,$id2)
			{
                           
                          
                        
                       
				$sql="INSERT INTO comenta (fecha,hora,nick,comentario,id_art)"
                                        ."VALUE('$fecha','$hora','$nick','$comenta','$id2')";
				$res=mysql_query($sql,conectar::con());
					
                        }                
                                                    
                        
                        
//============================================================================================
}                        
?>

