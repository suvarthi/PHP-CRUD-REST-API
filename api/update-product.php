<?php
include("../class/crud.php");
header("Access-Control-Allow-Origin: *");
header("Content-type:application/json"); 

$crud = new Crud();

if($_SERVER["REQUEST_METHOD"] == "PUT")
{
$data = array();
parse_str(file_get_contents('php://input'),$data );

$product_name = $data["product_name"];
$manufacturer = $data["manufacturer"]; 
$short_description = $data["short_description"]; 
$price = $data["price"];  

$sql = "update products set product_name = '$product_name' , manufacturer = '$manufacturer', short_description = '$short_description' , price = '$price' where product_id=".$_GET['product_id'];
$res = $crud->update($sql);


if ($res)
{
	$result = array("status" => true , "message" => "Product Updated Succefully...");
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