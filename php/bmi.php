<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if(isset($_GET['bmi'])){
    echo "你上次測量的BMI值為為{$_GET['bmi']}";
}
?>

<div>BMI計算-GET</div>
<form action="result.php" method="get">
<div>
    <label for="height">身高:</label>
    <input type="number" name="height" id="height" step="0.1">
</div>
<div>
    <label for="weight">體重:</label>
    <input type="number" name="weight" id="weight" step="0.1">
</div>
<div>
    <input type="submit" value="計算">
    <input type="reset" value="清除/重置">
</div>

</form>

<div>BMI計算-POST</div>
<form action="result.php" method="post">
<div>
    <label for="height">身高:</label>
    <input type="number" name="height" id="height" step="0.1">
</div>
<div>
    <label for="weight">體重:</label>
    <input type="number" name="weight" id="weight" step="0.1">
</div>
<div>
    <input type="submit" value="計算">
    <input type="reset" value="清除/重置">
</div>

</form>


</body>
</html>