<?php
 class slider
{
	private $slider;


					//metodo  constructor
					public function contruc()
					{
						$this->$slider=array();
					}
                                        
                                        
                     //============================================================================================
				//metodo muestra todas  categorias 
			public function leer_slider()
			{
				$sql="SELECT * FROM slider ORDER BY id_slider ASC";
				$res=mysql_query($sql,conectar::con());
				while($reg=mysql_fetch_assoc($res))
				{
					$this->slider[]=$reg;
				}
					return $this->slider;	
                        }            

                                        
                     //============================================================================================                                          
			  	//metodo muestra todas  categorias 
			public function add_slider($img_slider)
			{                                                                                                    
				$sql="INSERT INTO slider (img_slider)VALUE('$img_slider')";
				$res=mysql_query($sql,conectar::con());
					
                        }    
                    //====================================================================================
				//metodo muestra todas  categorias 
			public function delete_slider_id($id)
			{
                            
				$sql="DELETE  FROM slider WHERE id_slider='$id'";
				$res=mysql_query($sql,conectar::con());
				
                                
                        }                          
                        
                        //====================================================================================
				//metodo muestra todas  categorias 
			public function leer_slider_id($id)
			{
                            
				$sql="SELECT * FROM slider WHERE id_slider='$id'";
				$res=mysql_query($sql,conectar::con());
                                print_r($res);
                                while ($reg = mysql_fetch_assoc($res))
                                {
					$this->slider[]=$reg;
				}
					return $this->slider;
				
                                
                        }                          

                //===========================================================================================                    
                                        
		public function actualiza_slider_id($img_slider,$id)
			{
				$sql="UPDATE slider SET img_slider='$img_slider'  WHERE id_slider='$id'";                               
				$res=mysql_query($sql,conectar::con());
                              
					
                        }  
                        
}                        