<?php

 class usuario
{
	private $usuario;


					//metodo  constructor
					public function contruc()
					{
						$this->$usuario=array();
					}
		
//============================================================================================
				//metodo muestra todas  categorias 
			public function leer_usuario()
			{
				$sql="SELECT * FROM reg_user ORDER BY cont_vis DESC";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->usuario[]=$reg;
				}
					return $this->usuario;	
			}
                        
  //============================================================================================
				//metodo muestra todas  categorias 
			public function leer_usuario2()
			{
				$sql="SELECT * FROM reg_user ORDER BY id_user DESC";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->usuario[]=$reg;
				}
					return $this->usuario;	
			}                      
			
			//============================================================================================
                        	//metodo muestra todas  categorias 
			public function actualizar_usuario_id($id,$cant2)
			{
				$sql="UPDATE reg_user SET tiempo=1, cont_vis='$cant2' WHERE id_user='$id'";
				$res=mysql_query($sql,conectar::con());
				while($reg=@mysql_fetch_assoc($res))
				{
					$this->usuario[]=$reg;
				}
                                
					return $this->usuario;	
			}
                        
                        //============================================================================================
                        	//metodo muestra todas  categorias 
			public function actualizar_usuario2_id($nomb, $ced, $telf, $fecha_nac, $sexo, $id)
			{
				$sql="UPDATE reg_user SET nombre_user='$nomb',cedula_user='$ced',telefono_user='$telf',fecha_nac='$fecha_nac' ,sexo_user='$sexo' WHERE id_user='$id'";
				$res=mysql_query($sql,conectar::con());
				while($reg=@mysql_fetch_assoc($res))
				{
					$this->usuario[]=$reg;
				}
                                
					return $this->usuario;	
			}
                        
                        
                      //============================================================================================
				//metodo muestra todas  categorias 
			public function leer_usuario_ced($ced)
			{
				$sql="SELECT * FROM reg_user WHERE cedula_user='$ced'";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->usuario[]=$reg;
				}
					return $this->usuario;	
			}
                         //============================================================================================
				//metodo muestra todas  categorias 
			public function buscar_cedula($ced)
			{
				$sql="SELECT * FROM reg_user WHERE cedula_user='$ced'";
				$res=mysql_query($sql,conectar::con());
                                
                                while($reg=mysql_fetch_assoc($res))
				{
					$this->usuario[]=$reg;
				}
					return $this->usuario;
			}
                         //============================================================================================
				//metodo muestra todas  categorias 
			public function leer_usuario_id($id)
			{
				$sql="SELECT * FROM reg_user WHERE id_user='$id'";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->usuario[]=$reg;
				}
					return $this->usuario;	
			}
			//============================================================================================
				//metodo muestra todas  categorias 
			public function eliminar_usuario_id($id)
			{
				$sql="DELETE  FROM reg_user WHERE id_user='$id'";
				$res=mysql_query($sql,conectar::con());
					
			}
			//============================================================================================
				//metodo muestra todas  categorias 
			public function leer_nuevos_fecha($fec)
			{
				$sql="SELECT * FROM reg_user WHERE tiempo=0 ";
				$res=mysql_query($sql,conectar::con());
				$reg=mysql_fetch_assoc($res);
                                while($reg=mysql_fetch_assoc($res))
				{
					$this->usuario[]=$reg;
				}
					return $this->usuario; 	
			}
                        //============================================================================================
				//metodo muestra todas  categorias 
			public function leer_regulares_fecha($fec)
			{
				$sql="SELECT * FROM reg_user WHERE tiempo=1 ";
				$res=mysql_query($sql,conectar::con());
				$reg=mysql_fetch_assoc($res);
                                while($reg=mysql_fetch_assoc($res))
				{
					$this->usuario[]=$reg;
				}
					return $this->usuario; 	
			}
			//============================================================================================
  	//metodo muestra todas  categorias 
			public function guarda_usuario($nomb,$ced,$telf,$fecha_nac,$sexo,$cont)
			{
                            //
$sql="INSERT INTO reg_user (nombre_user,  cedula_user, telefono_user, fecha_nac, sexo_user, cont_vis)"
        ."value('$nomb', '$ced', '$telf', '$fecha_nac', '$sexo', '$cont')";
//
				$res=mysql_query($sql,conectar::con());
                                //var_dump($res);
                                if($res){
                                    
                                    return;
                                    
                                }
			} 
                        
                       
			
			//============================================================================================

}                                        
?>

