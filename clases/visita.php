<?php
class visita
{
	private $visita;


					//metodo  constructor
					public function contruc()
					{
						$this->visita=array();
					}
//		
			//============================================================================================
				//metodo muestra todas  categorias 
			public function leer_visita_id($id)
			{
				$sql="SELECT * FROM mot_visita WHERE id_mot='$id'";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->visita[]=$reg;
				}
					return $this->visita;	
			}
			
			//============================================================================================
                        //metodo muestra todas  categorias 
			public function actualizar_visita_id($id,$motivo)
			{
				$sql="UPDATE mot_visita SET motivo='$motivo' WHERE id_mot='$id'";
				$res=mysql_query($sql,conectar::con());
                               
				
			}
                        
                        //============================================================================================
                        //metodo muestra todas  categorias 
			public function eliminar_visita_id($id)
			{
				$sql="DELETE FROM mot_visita  WHERE id_mot='$id'";
				$res=mysql_query($sql,conectar::con());
                               
				
			}
			
                        //============================================================================================
                        
                        public function meter_regvis_user($id,$motvis,$fecha,$dia){
                            
                          $sql="INSERT INTO reg_mot_vis (id_user,mot_visita,fecha_visita,dia_visita) value('$id','$motvis','$fecha','$dia')";
                          $res=mysql_query($sql,conectar::con());                                                  
                        }
                        
                         //============================================================================================
                        
                        public function contar_regvis_user($id){
                            
                          $sql="SELECT * FROM reg_mot_vis WHERE  id_user='$id'";
                          $res=mysql_query($sql,conectar::con());
                          while($reg=mysql_fetch_assoc($res))
				{
					$this->visita[]=$reg;
				}
					return $this->visita;
                        }
                        
                         //============================================================================================
                        
                        public function contar_regvis_fecha($fecha){
                            
                          $sql="SELECT * FROM reg_mot_vis WHERE  fecha_visita='$fecha'";
                          $res=mysql_query($sql,conectar::con());
                          while($reg=mysql_fetch_assoc($res))
				{
					$this->visita[]=$reg;
				}
					return $this->visita;
                        }
                        
                          //============================================================================================
                        
                        public function leer_regvis_user($id){
                            
                          $sql="SELECT * FROM reg_mot_vis WHERE id_user='$id'";
                          $res=mysql_query($sql,conectar::con());
                          while($reg=mysql_fetch_assoc($res))
				{
					$this->visita[]=$reg;
				}
					return $this->visita;
                        }
                         //============================================================================================
                        
                        public function leer_regvis_user2(){
                            
                          $sql="SELECT * FROM reg_mot_vis";
                          @$res=mysql_query($sql,conectar::con());
                          while($reg=mysql_fetch_assoc($res))
				{
					$this->visita[]=$reg;
				}
					return $this->visita;
                        }
                        
                        //============================================================================================
				//metodo muestra todas  categorias 
			public function leer_visita()
			{
				$sql="SELECT * FROM mot_visita";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->visita[]=$reg;
				}
					return $this->visita;	
			}
                        //============================================================================================
				//metodo muestra todas  categorias 
			public function add_visita($mot)
			{
				$sql="INSERT into mot_visita (motivo) value('$mot')";
				$res=mysql_query($sql,conectar::con());
					
			}
			 //============================================================================================
				//metodo muestra todas  categorias 
			public function leer_visita_fecha()
			{
				$sql="SELECT * FROM mot_visita";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->visita[]=$reg;
				}
					return $this->visita;	
			}
			//============================================================================================
}   
?>
