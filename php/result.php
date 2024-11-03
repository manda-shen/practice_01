<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>BMI結果</h3>
<div>你的身高: <?=$_GET['height'];?>公分</div>
<div>你的體重: <?=$_GET['weight'];?>公斤</div>

<?php
$h=$_GET['height']/100;
$w=$_GET['weight'];
$bmi=round($w/($h*$h),2);
?>

<div>你的BMI值為: <?=$bmi;?></div>
<a href="bmi.php">回上頁</a>

</body>
</html>