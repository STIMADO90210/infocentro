<?php
class discap
{
	private $discap;


					//metodo  constructor
					public function contruc()
					{
						$this->discap=array();
					}
		
			//============================================================================================
				//metodo muestra todas  categorias 
			public function leer_discap_id($id)
			{
                            
                            
				 $sql="SELECT * FROM discap WHERE id_disc='$id'";
				$res=mysql_query($sql,conectar::con());
                                
				while($reg=mysql_fetch_assoc($res))
				{
					$this->discap[]=$reg;
				}
					return $this->discap;	
			}
                        
                        
			
			//============================================================================================
                        	//metodo muestra todas  categorias 
			public function editar_discap_id($id,$disc)
			{
				$sql="UPDATE discap SET discapacida='$disc' WHERE id_disc='$id'";
				$res=mysql_query($sql,conectar::con());
				
			}
                        
                        	//============================================================================================
                        	//metodo muestra todas  categorias 
			public function elimina_discap_id($id)
			{
				$sql="DELETE FROM discap  WHERE id_disc='$id'";
				$res=mysql_query($sql,conectar::con());
				
			}
                
                        //============================================================================================
				//metodo muestra todas  categorias 
			public function leer_discap()
			{
				$sql="SELECT * FROM discap";
				$res=mysql_query($sql,conectar::con());
                                
				while($reg=mysql_fetch_assoc($res))
				{
					$this->discap[]=$reg;
				}
					
                                        return $this->discap;	
			}
			
			//============================================================================================
                        
                        public function meter_discap($disc){
                            
                          $sql="INSERT INTO discap (discapacida) value('$disc')";
                          $res=mysql_query($sql,conectar::con());
                          
                        }
                        //============================================================================================
                        
                        public function meter_discap_user($id,$disc){
                         
                       $sql="INSERT INTO disc_user (id_user, disc_user) VALUE('$id','$disc')";
                          $res=mysql_query($sql,conectar::con());
                         
                        }
                        
                        
                         public function editar_discap_user($id,$disc){
                            
                          $sql="UPDATE disc_user SET disc_user='$disc' WHERE id_user='$id'";
                          $res=mysql_query($sql,conectar::con());
                          //var_dump($res);
                        }
                        //============================================================================================
                        
                        public function leer_discap_user($id){
                           
                          $sql="SELECT *  FROM disc_user WHERE id_user='$id'";
                          $res=mysql_query($sql,conectar::con());
                         while($reg=mysql_fetch_assoc($res))
				{
					$this->discap[]=$reg;
				}
					
                                        return $this->discap;
                        }
                        
}                        
?>

