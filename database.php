<?php 
  
   $servername = "localhost"; 
   $username = "root";
   $password = "";
   $bdname = "tienda"; 
   
   //create connection to database
   $conn = new mysqli ($servername,$username,$password,$bdname);
   //cheking
   if($conn->connect_error){
	   die("connection failed: ".$conn->connect_error);
   }else{
	   //echo "I am connected to tienda"; 
   } 
   
?>