<?php
if(isset($_GET['id']) )
{
   $bookid=$_GET['id']; 
//    echo   $bookid;
require_once("connection.php");
$sql="insert into  orders(book_id) values(?)";
$stmt=$connection->prepare($sql);
$stmt->execute( [$bookid]);

$sql="SELECT* FROM books INNER JOIN orders on books.book_id=orders.book_id where books.book_id=?" ;
$stmt=$connection->prepare($sql);

$stmt->execute([ $bookid]);
$bookdata=$stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($bookdata) ;
echo"<br>";
}
?>



<?php foreach($bookdata as $book)
{
    ?>
    <div class ='card'>
        
        <img src="<?=$book['book_path']?>" alt="">

<h1><?= $book['book_name']?></h1>

<a href="deletorders.php ?id=<?= $book['book_id']?>"><button>delete order</button></a>

</div>

<?php
}
?>







