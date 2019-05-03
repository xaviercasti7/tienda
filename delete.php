<?php 
//1. connection
include("database.php");
//2. get data
$id=$_GET['id'];
$cod=_GET['cod'];

echo $id."<br>";
echo $cod;
//3.
$sql = "DELETE FROM productos WHERE id =$id";
//4. Execute sql
$conn->query($sql);
//5. show fonfirmation message
 echo "<script lanjuage='javascript'>alert ( 'producto elminado con exito')</script>";
 
  header("refresh:0, url=index.php");


    
	  




?>