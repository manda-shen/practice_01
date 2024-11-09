<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$acc=$_POST['acc'];
$password=$_POST['password'];

if($acc == 'admin' && $password == '1234'){
    echo "成功登入!";
}else{
    echo "登入失敗，帳號密碼錯誤!<br>";
    echo "<a href='./login.php'>請重新登入</a>";
}
?>
    
</body>
</html>