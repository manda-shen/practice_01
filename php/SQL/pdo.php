<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$dns="mysql:host=localhost;dbname:school;charset=utf8;";
$pdo=new PDO($dns,'root','');

$sql="select * from classes";

$row=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);

?>
    
</body>
</html>