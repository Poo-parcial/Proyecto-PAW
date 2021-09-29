<?php
 include  "../../../models/conexion.php";
 include  "../../../controllers/procesos.php";
 include " ../../../models/procesos.php ";
 
 $user =_POST ["user"];
 $email =_POST ["emal"];
 
  $query1 = "SELECT COUNT (usuario) AS tuser from usuarios WHERE usuario = "$user"  AND email = "$user" ";
 
 $query1 = "SELECT COUNT (email) AS temail from usuarios WHERE usuario = "$user"  AND email = "$EMAIL" ";
 
  $buscauser = CRUD($query1, "s");
  $buscauser = CRUD($query2, "s");
  
  foreach ($buscaemail AS $result)
  {
      echo $contuser = $result ["tuser"];
  }
  
  foreach
  {
      
  }
 ?>