<?php

if(isset($_GET['id']) )
{
   $id=$_GET['id']; 
require_once("connection.php");
$sql="DELETE FROM orders WHERE book_id=?" ;
$stmt=$connection->prepare($sql);

$stmt->execute([$id]);
echo "done";
// header("location:orders.php");
}
?>