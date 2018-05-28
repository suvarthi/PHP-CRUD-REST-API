<?php
include("../class/crud.php");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/x-www-form-urlencoded");
 
$crud = new Crud();

if($_SERVER["REQUEST_METHOD"] === "POST")
{
$data = array();
parse_str(file_get_contents('php://input'),$data); 

$product_name = $data["product_name"]; 
$manufacturer = $data["manufacturer"]; 
$short_description = $data["short_description"]; 
$price = $data["price"];  



$sql = "insert into products (product_name,manufacturer,short_description,price,upload_date) values ('$product_name','$manufacturer','$short_description','$price',NOW())";
$res = $crud->create($sql); 


if ($res)
{
	$result = array("status" => true , "message" => "Product Added Succefully...");
}
else
{
	$result = array("status" => false , "message" => "Something went wrong...");
}

echo json_encode($result);
}
else
{
	 $error = array("status" => 405 , "message" => 'Method not allowed...');
	 
echo json_encode($error);
} 
