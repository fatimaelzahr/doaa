<?php
if(isset($_POST['book_name'],$_POST['desc'],$_POST['quant'],$_FILES['image']) )
{
$bookname=$_POST['book_name'];
$bookquantity=$_POST['quant'];
$bookdescription=$_POST['desc'];



    $image_name = basename($_FILES["image"]["name"]);
    $target_dir = "uploads/";
    $target_file = $target_dir . uniqid() . '_' . $image_name;

    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
// echo $bookname,$bookquantity,$bookdescription;
// echo "hi";
require "connection.php";
$sql="insert into books(book_name,book_quantity,book_desc,book_path) values(?,?,?,?)";
$stmt=$connection->prepare($sql);
$stmt->execute([$bookname,$bookquantity,$bookdescription, $target_file]);




header("location:cards.php");

    }

else{
echo "error";

}
?>

