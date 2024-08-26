<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body> 
    <h3 id="TITLE">books</h3>
    <form action="addbooks.php" method="POST" class="book" enctype="multipart/form-data">
        <label for="book_name">اسم الكتاب</label>
        <input type="text" id="book_name" name="book_name"><br>
        <label for="desc">وصف الكتاب</label>
        <input type="textarea" id="desc" name="desc">
        
        <br><label for="quant">الكمية</label>
        <input type="number" id="quant" name="quant"><br>
        <br><label for="image">صورة الغلاف</label>
        <input type="file" id="image" name="image" accept="image/*"><br>
        <input type="submit" value="add" class="book">
    </form>
    
</body>
</html>