<?php
require_once("connection.php");
$sql="SELECT* FROM books" ;
$stmt=$connection->prepare($sql);

$stmt->execute();
$bookdata=$stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($bookdata) ;
echo"<br>";

?>


<?php foreach($bookdata as $book)
{
    ?>
    <div class ='card'>
        
        <img src="<?=$book['book_path']?>" alt="">
<h1><?= $book['book_name']?></h1>
<p><?= $book['book_id']?></p>
<p><?= $book['book_desc']?></p>

<a href="orders.php ?id=<?= $book['book_id']?>"><button > add to card</button></a>

</div>

<?php
}
?>