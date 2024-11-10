<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style_pdo.css">
</head>
<body>

<?php

$dns="mysql:host=localhost;dbname=school;charset=utf8;";
$pdo=new PDO($dns,'root','');

$sql="select * from classes";

$row=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>

<table>
<?php
foreach($row as $row){
?>
    <tr>
        <td>序號</td>
        <td>班級</td>
        <td>導師</td>
    </tr>
    <tr>
        <td><?=$row['id'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['tutor'];?></td>
    </tr>

<?php
}
?>
</table>

</body>
</html>