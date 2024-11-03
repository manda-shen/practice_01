<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>BMI結果</h3>

<?php
if(isset($_GET['height'])){
    $height=$_GET['height'];
}elseif(isset($_POST['height'])){
    $height=$_POST['height'];
}else{
    echo "請由正確途徑進入此頁面!";
    exit();
}

if(isset($_GET['weight'])){
    $weight=$_GET['weight'];
}elseif(isset($_POST['weight'])){
    $weight=$_POST['weight'];
}else{
    echo "請由正確途徑進入此頁面!";
    exit();
}


?>
<div>你的身高: <?=$height;?>公分</div>
<div>你的體重: <?=$weight;?>公斤</div>

<?php
$h=$height/100;
$bmi=round($weight/($h*$h),2);
?>

<div>你的BMI值為: <?=$bmi;?></div>
<a href="bmi.php">回上頁</a>

</body>
</html>