<?php

 $enlace = mysql_connect('localhost', 'root', 'root') or die('Failed to connect' . mysql_error());
  
  

  echo 'Connection Sucessful';
  
   $bd = mysql_select_db('PruebaG', $enlace);
   mysql_set_charset('utf8',$enlace);
   
 ?>