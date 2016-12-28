<?php
class indigena
{
	private $indigena;


					//metodo  constructor
					public function contruc()
					{
						$this->indigena=array();
					}
		
			//============================================================================================
				//metodo muestra todas  categorias 
			public function leer_indigena_id($id)
			{
				$sql="SELECT * FROM indigena WHERE id_ind='$id'";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->indigena[]=$reg;
				}
					return $this->indigena;	
			}
                        
                        //============================================================================================
				//metodo muestra todas  categorias 
			public function add_indigena($com)
			{
				$sql="INSERT INTO indigena (comunidad) value('$com')";
				$res=mysql_query($sql,conectar::con());
				
			}
			//============================================================================================
				//metodo muestra todas  categorias 
                         
			public function editar_indigena_id($id, $indico)
			{
				$sql="UPDATE  indigena SET comunidad='$indico'  WHERE id_ind='$id'";
				$res=mysql_query($sql,conectar::con());
					
			}
                        
			//============================================================================================
                        
                        public function meter_indigena_user($id,$ind){
                            
                          $sql="INSERT INTO indigena_user (id_user,indi_user) value('$id','$ind')";
                          $res=mysql_query($sql,conectar::con());
                          //var_dump($res);
                        }
                        
                        //============================================================================================
                        
                        public function editar_indigena_user($id,$indico){
                           
                          $sql="UPDATE  indigena_user SET indi_user='$indico' WHERE id_user='$id'";
                          $res=mysql_query($sql,conectar::con());
                          //var_dump($res);
                        }
                        //============================================================================================
				//metodo muestra todas  categorias 
                         
			public function elimina_indigena_id($id)
			{
				$sql="DELETE FROM  indigena  WHERE id_ind='$id'";
				$res=mysql_query($sql,conectar::con());
					
			}
                        //============================================================================================
                        
                        public function leer_indigena_user($id){
                            
                          $sql="SELECT * FROM indigena_user WHERE id_user='$id'";
                          $res=mysql_query($sql,conectar::con());
                          while($reg=mysql_fetch_assoc($res))
				{
					$this->indigena[]=$reg;
				}
					return $this->indigena;	
                        }
                        
                        
                        //============================================================================================
				//metodo muestra todas  categorias 
			public function leer_indigena()
			{
				$sql="SELECT * FROM indigena";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->indigena[]=$reg;
				}
					return $this->indigena;	
			}
			
			//============================================================================================
}              
?>
