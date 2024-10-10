<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

/*
題目 1: 打印數字
編寫一個 PHP 程式，使用 for 迴圈打印從 1 到 20 的所有整數。
*/

for($i =1; $i<=20; $i++){
    echo "$i <br>";
}

echo "<br>";
echo "<hr>";
echo"<br>";

/*
題目 2: 打印偶數
編寫一個 PHP 程式，使用 for 迴圈打印從 1 到 50 的所有偶數。
*/

for($i=2; $i<=50; $i+=2){
    echo "$i 、";
}

echo "<br>";
echo "<hr>";
echo"<br>";

for($i=1; $i<=25; $i++){
    echo ($i*2)."、";
}

echo "<br>";
echo "<hr>";
echo"<br>";

for($i=1; $i<=(50/2); $i++){
    echo ($i*2)."、";
}

echo "<br>";
echo "<hr>";
echo"<br>";


for($i=1; $i<=50; $i++){
    if($i %2 ==0){
        echo $i."、";
    }
}

echo "<br>";
echo "<hr>";
echo"<br>";

/*
題目 3: 打印乘法表
編寫一個 PHP 函式，使用 for 迴圈打印 1 到 10 的乘法表。
*/

for($i=1; $i<10; $i++){
    echo "$i X ".(10-$i)."=".($i*(10-$i))."<br>";
}

echo "<br>";
echo "<hr>";
echo"<br>";

/*
題目 4: 求和
編寫一個 PHP 程式，使用 for 迴圈計算並打印從 1 到 100 的所有整數的總和。
*/

echo "<br>";
echo "<hr>";
echo"<br>";

/*
題目 5: 反向打印
編寫一個 PHP 程式，使用 for 迴圈反向打印從 10 到 1 的所有整數。
*/



?>
    
</body>
</html>