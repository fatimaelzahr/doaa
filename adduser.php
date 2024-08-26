<?php
if (!empty($_POST))
//   if(isset($_POST['full_name'],$_POST['full_name'],$_POST['email'],$_POST['password']))
// if(isset($_POST['full_name']) )
{
$name=$_POST['full_name'];
$user_name=$_POST['user_name'];
$email=$_POST['email'];
$rowpassword=$_POST['password'];
// $hashpassword=password_hash($rowpassword,PASSWORD_DEFAULT);
// echo $hashpassword;

require "connection.php";

$sql="insert into users(full_name,user_name,email,dppassword) values(?,?,?,?)";
$stmt=$connection->prepare($sql);
$stmt->execute([$name,$user_name,$email,$rowpassword]);
header("location:login.php");

}

if (empty($_POST)){

    header("location:register.php");

}
?>
