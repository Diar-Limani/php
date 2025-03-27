<?php


   $host = "localhost";
   $db="diardb";
   $user="root";
   $pass="";

   try{
       $pdo= new PDO ("mysql:host=$host; dbname=$db", $user,$pass);
       $sql = "Alter Table products Add email Varchar(255)";
       $pdo->exec($sql);
       echo "hdlloo created successfully";

   }catch(Exception $e){
    echo "Error createin table" . $e->getMessage();
   }

?>