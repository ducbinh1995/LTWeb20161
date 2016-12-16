<?php 
require_once("../connection.php");
require_once("../model/model.php");
require_once("../model/product.php");

$result = Product::findById('2');

echo(json_encode($result));
	//echo($result); 
	//echo(count($result));
?>