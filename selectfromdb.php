<?php
if(isset($_POST['user'],$_POST['pass']) )
{
 
$formuser=$_POST['user'];
$formpass=$_POST['pass'];
//  echo $formuser,$formpass;

require "connection.php";
$querystring=$connection->prepare('SELECT user_name,dppassword FROM users where  user_name =?');

 
$querystring->execute([$formuser]);


 $userdata=$querystring->fetchAll(PDO::FETCH_ASSOC);
print_r($userdata); 
 if(!empty( $userdata))
//  {
 
// $dbloginpassword=$userdata['dppassword'];

// if(password_verify($formpass,$dbloginpassword))

// {

    // $_SESSION['bookstore'] =$formuser;
    header("location:bookstore.php");

    
} if(empty( $userdata)){
echo "errorindata";

// }



 }
 
// header("location:login.php");



// else{
//     header("location: Registe.php");

// }


