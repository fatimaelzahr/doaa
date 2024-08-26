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
    <h3 id="TITLE">Registration Form</h3>password
    <form action="adduser.php " method="POST" class="data">
        <label for="full_name">Full Name</label>
        <input type="text" id="full_name" name="full_name"><br>
        <label for="user_name">UserName</label>
        <input type="text" id="user_name" name="user_name">
        <br><label for="email">email </label>
        <input type="email" id="email" name="email"><br>
        <br><label for="password">Password </label>
        <input type="password" id="password" name=""><br>
        <input type="submit" value="Register" class="reg">
    </form>
    
</body>
</html>