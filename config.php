<?php 
 
 $conn = new mysqli("localhost","root","","daraz_replica");
 if($conn->connect_error){
     die("Connection Failed!".$conn->connect_error);
 }
 

?>