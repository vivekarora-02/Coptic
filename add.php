<?php
session_start();
include_once("config.php");


		$code = ($_POST['product_code']);
		$name = ($_POST['product_name']);
		$cat = ($_POST['brand']);
		$fan = ($_POST['category']);
		$fees = ($_POST['price']);
        $quant = ($_POST['product_qty']);
        


$sql = "INSERT INTO products(product_code,product_name,brand,category,price,product_qty) VALUES ('$code','$name','$cat','$fan','$fees','$quant')";

if (mysqli_query($mysqli,$sql)){
	echo '<script type="text/javascript">alert("New product added. Add more!");</script>';
	header("Location:http://localhost:8080/offymart/add_product.php");
} 
else 
{
	echo '<script type="text/javascript">alert("Error Occured");</script>';
	header("Location:http://localhost:8080/offymart/add_product.php");

}



?>