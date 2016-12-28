<?php

 class nivel{
     private $nivel;
            
                //metodo  constructor
					public function contruc()
					{
						$this->$nivel=array();
					}
                                        
                        //------------------------------------------------------------------------------------------------------------                 
                                        function loguea($email,$pass){
                                            $sql="SELECT * FROM niveles WHERE email='$email' and password='$pass'";
                                               $res=mysql_query($sql,conectar::con());
                                               
                                                while($reg=mysql_fetch_assoc($res))
                                                {
                                                        $this->nivel[]=$reg;
                                                }
                                                        return $this->nivel;	
                                         }
                       //------------------------------------------------------------------------------------------------------------                  
                                         function leer_nivel(){
                                            $sql="SELECT * FROM niveles";
                                               $res=mysql_query($sql,conectar::con());
                                               
                                                while($reg=mysql_fetch_assoc($res))
                                                {
                                                        $this->nivel[]=$reg;
                                                }
                                                        return $this->nivel;	
                                         }
                     //------------------------------------------------------------------------------------------------------------                  
                                         function leer_nivel_id($id){
                                            $sql="SELECT * FROM niveles WHERE id_niv='$id'";
                                               $res=mysql_query($sql,conectar::con());
                                               
                                                while($reg=mysql_fetch_assoc($res))
                                                {
                                                        $this->nivel[]=$reg;
                                                }
                                                        return $this->nivel;	
                                         }
                      //------------------------------------------------------------------------------------------------------------                  
                                         function actualizar_nivel_id($id,$admin,$email,$pass,$nivel){
                                            $sql="UPDATE niveles SET nombre_niv='$admin',email='$email',password='$pass' ,nivel='$nivel'  WHERE id_niv='$id'";
                                               $res=mysql_query($sql,conectar::con());
                                               
                                               	
                                         }   
                       //------------------------------------------------------------------------------------------------------------                  
                                         function elimina_nivel_id($id){
                                            $sql="DELETE FROM niveles  WHERE id_niv='$id'";
                                               $res=mysql_query($sql,conectar::con());                                                                                              	
                                         }                      
                    //------------------------------------------------------------------------------------------------------------                  
                                         function add_nivel($admin,$email,$pass,$nivel){
                                            $sql="INSERT INTO niveles  (nombre_niv,email,password,nivel) value('$admin','$email','$pass','$nivel')";
                                               $res=mysql_query($sql,conectar::con());
                                               
                                               	
                                         }    
 }                    
 
 
        
?>