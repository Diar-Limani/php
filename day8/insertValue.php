<?php


   $host = "localhost";
   $db="diardb";
   $user="root";
   $pass="";

   try{
       $pdo= new PDO ("mysql:host=$host; dbname=$db", $user,$pass);


       $username="donje";
       $password = "donje123";

       $sql="INSERT INTO users (id,username,password) Values (1,'$username','$password')";
       

       $pdo->exec($sql);
       echo "USER IS ADDED";

   }catch(Exception $e){
    echo "Error createin table" . $e->getMessage();
   }
?>