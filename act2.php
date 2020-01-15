<?php
session_start();
require 'config.php';
if(isset($_POST['login']) )
{                      
             $lemail =$_POST['email'];
             $lpassword =$_POST['password'];
             $stmt = $conn->prepare("SELECT * FROM user WHERE email=? && password=?");
             $stmt->bind_param("ss",$lemail,$lpassword);
             $stmt->execute();
             $res = $stmt->get_result();
             $r = $res->fetch_assoc();
             if(isset($r))
             {
             $_SESSION['name'] =$r['name'];
             header("Location:home.php");
             }
             else
             {
                 echo("Wrong Password or User Name");
             }

            
            
}

    
?>