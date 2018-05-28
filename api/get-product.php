<?php
include("../class/crud.php");
header("Access-Control-Allow-Origin: *");
header("Content-type:application/json"); 

$crud = new Crud(); 

if($_SERVER["REQUEST_METHOD"] == "GET")
{
$sql = "select * from products where product_id=".$_GET['product_id'];
$res = $crud->read($sql);

$count = mysqli_num_rows($res);

if($count > 0)
{
 $product = array();

 while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
 {
	 $product[] = $row;
 }
 
 $result = array("status" => true , "productInfo" => $product);
}
else
{
 $result = array("status" => false , "message" => 'Product not found...');
}
	
echo json_encode($result);
}
else
{
	 $error = array("status" => 405 , "message" => 'Method not allowed...');
	 
echo json_encode($error);
}    
