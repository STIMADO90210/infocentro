<?php
 class blog
{
	private $blog;


					//metodo  constructor
					public function contruc()
					{
						$this->$blog=array();
					}
		
//============================================================================================
				//metodo muestra todas  categorias 
			public function leer_blog()
			{
				$sql="SELECT * FROM blog_info ORDER BY id_art ASC";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->blog[]=$reg;
				}
					return $this->blog;	
                        }            
//============================================================================================
				//metodo muestra todas  categorias 
			public function leer_blog_id($id)
			{
				$sql="SELECT * FROM blog_info WHERE id_art='$id' ";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->blog[]=$reg;
				}
					return $this->blog;	
                        }  
                        //============================================================================================
				//metodo muestra todas  categorias 
			public function leer_blog_ultimo()
			{
				$sql="SELECT * FROM blog_info ORDER BY id_art DESC" ;
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->blog[]=$reg;
				}
					return $this->blog;	
                        }   
//====================================================================================
				//metodo muestra todas  categorias 
			public function delete_blog_id($id)
			{
                            
				$sql="DELETE  FROM blog_info WHERE id_art='$id'";
				$res=mysql_query($sql,conectar::con());
				
                                
                        }                          

//============================================================================================
				//metodo muestra todas  categorias 
			public function actualiza_blog_id($fecha,$titulo,$arti,$imagen,$id)
			{
				$sql="UPDATE blog_info SET fec_art='$fecha',titulo_art='$titulo', cont_art='$arti', img_art='$imagen'  WHERE id_art='$id'";
                                //
				$res=mysql_query($sql,conectar::con());
                                //var_dump($res);
					
                        }                
                        
//============================================================================================
				//metodo muestra todas  categorias 
			public function add_blog($titulo,$arti,$imagen,$fecha)
			{
                           
                          
                        
                       
				$sql="INSERT INTO blog_info (fec_art,titulo_art,cont_art,img_art)"
                                        ."VALUE('$fecha','$titulo','$arti','$imagen')";
				$res=mysql_query($sql,conectar::con());
					
                        }                
                                                    
                        
                        
//============================================================================================
}                        
?>

