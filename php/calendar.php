<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            border: 1px solid black;
            margin: auto;
        }
        td{
            padding: 5px 15px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    

<table>

<tr>
    <td>日</td>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
</tr>
    
<?php


$firstday=date("Y-m-01");
$firstday_stamp=strtotime($firstday);
$N_firstday=date("N",$firstday_stamp);

$day_stamp=strtotime("-$N_firstday day",$firstday_stamp);


for($i=0; $i<6; $i++){
    echo "<tr>";
    for($j=0; $j<7; $j++){
        echo "<td>";
        echo date("j",$day_stamp);
        echo "</td>";
        $day_stamp=strtotime("+1 day", $day_stamp);
    }
    echo "</tr>";
}

?>

</table>

</body>
</html>