<?php
include("../includes/connection.php");

class Crud extends Connection
{

  public function __construct()
 {
	  parent::__construct();
 }
 

  public function create($data)
{
  $insert = $this->con->query($data) or die();

  if($insert)
  {
    return $insert;
  }
  else 
  {
    echo "Query failed...";
  }
}
 
 public function read($data)
{
  $view = $this->con->query($data) or die();

  if ($view->num_rows > 0)
  {
    return $view;
  }
  else
  {
	 return $view;
  }
}

  public function update($data)
{
  $update = $this->con->query($data) or die();

  if($update)
  {
   return $update;
  }
  else 
  {
    echo "Query failed...";
  }
}

 public function deletes($data)
{
  $delete = $this->con->query($data) or die();

  if($delete)
  {
    return $delete;
  }
  else
  {
    echo "Query failed...";
  }
}
}
?>