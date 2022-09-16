<?php
  $_hostname  = "localhost";
  $_username  = "root";
  $_password  = "";
  $_database  = "allphptricks";


    try{
        $con = new PDO("mysql:host=$_hostname;dbname=$_database;",$_username,$_password);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "success connection";
     } catch(PDOException $err){
        echo $err->getMessage();
    }
?>