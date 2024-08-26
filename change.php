<?php
if(isset($_POST['oldpass'],$_POST['newpass'],$_POST['resetpass'],$_POST['username']) )
{

echo $_POST ['username'];
echo"<br>";
// echo $_POST['resetpass'];
// echo $_POST['newpass'];
// echo$_POST['oldpass'];
     $userform=$_POST['username'];
     echo $userform;
     echo"<br>";
$oldpass=$_POST['oldpass'];
$newpass=$_POST['newpass'];
echo"<br>";
echo $newpass;
$resetmpass=$_POST['resetpass'];
 
require "connection.php";
$oldstring=$connection->prepare('SELECT * FROM users WHERE  user_name =?');

 
$oldstring->execute([ $userform]);
echo"<br>";
print_r($oldstring) ;
$users=$oldstring->fetch(PDO::FETCH_ASSOC);
echo"<br>";
 $name=($users['user_name']);
 

}
 $sql=$connection->prepare('UPDATE users SET  dppassword =?  where user_name=?');
 $sql->execute([$newpass,$name]);

 ?>
<!-- <form action="change.php" method="POST" class="data">
<label for="user_name">اسم المستخدم</label>
<input type="text" id="user_name" name="user_name" value="">
        <label for="oldpass">كلمة المرور القديمة</label>
        <input type="text" id="oldpass" name="oldpass" value="">
        <br><label for="newpass">كلمة المرور الجديدة </label>
        <input type="password" id="newpass" name="newpass"><br>
        <br><label for="resetpass">تاكيد كلمة المرور </label>
        <input type="password"  name="resetpass"><br>
        <input type="submit" value="تعديل الحساب" class="data">
        
    </form> -->

<!-- //  $userdata=$querystring->fetch(PDO::FETCH_ASSOC);
//  $sql=$connection->prepare('UPDATE users SET  dppassword ="$newpass" where user_name=?');
//  $sql->execute([$formuser]);
} -->