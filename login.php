<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
    <link rel="stylesheet" href="login.css">
</head>
<body> 
<h3 id="TITLE">login Form</h3>
<form action="selectfromdb.php" method="POST" class="data">
        <label for="user_name">UserName</label>
        <input type="text" id="user_name" name="user">
        <br><label for="password">Password </label>
        <input type="password" id="password" name="pass"><br>
        <input type="submit" value="login" class="data">
        <a href="register.php">تسجيل جديد</a>
    </form>
       <SPan id="welcome">WELCOME IN OUR BOOKSTORE</SPan> 
    </body>
    </html>