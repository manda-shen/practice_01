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
題目 1: 計算成績評價
撰寫一個 PHP 函數，根據分數輸出相應的成績評價。成績評價如下：
- 90 分以上：A
- 80-89 分：B
- 70-79 分：C
- 60-69 分：D
- 60 分以下：E
*/

$score =80;

if($score >=90){
    $level ='A';
}elseif($score >=80){
    $level ='B';
}elseif($score >=70){
    $level ='C';
}elseif($score >=60){
    $level ='D';
}else{
    $level ='E';
}

switch($level){
    case 'A':
        echo "你的成績為{$score}分，恭喜你得了A!真是優秀!";
        break;
    case 'B':
        echo "你的成績為{$score}分，恭喜你得了B!不錯的成績，可以再進步!";
        break;
    case 'C':
        echo "你的成績為{$score}分，你得了C，需要再努力努力!";
        break;
    case 'D':
        echo "你的成績為{$score}分，你得了D，有點危險!請加倍努力!";
        break;
    case 'E':
        echo "你的成績為{$score}分，你得了E，快快站起來!";
        break;
}


echo"<br>";
echo"<hr>";
echo"<br>";

/*
題目 2: 星期幾
撰寫一個 PHP 函數，根據給定的數字（1-7）輸出相應的星期幾。例如：
- 1：星期一
- 2：星期二
- 3：星期三
- 4：星期四
- 5：星期五
- 6：星期六
- 7：星期日
*/

$day=3;

switch($day){
    case '1':
        echo "今天星期一";
        break;
    case '2':
        echo "今天星期二";
        break;
    case '3':
        echo "今天星期三";
        break;
    case '4':
        echo "今天星期四";
        break;
    case '5':
        echo "今天星期五";
        break;
    case '6':
        echo "今天星期六";
        break;
    case '7':
        echo "今天星期日";
        break;
    default:
        echo "這是哪一天?我不知道!";
}

echo"<br>";
echo"<hr>";
echo"<br>";

/*
題目 3: 計算運算符
撰寫一個 PHP 函數，根據給定的運算符（+、-、*、/）和兩個數字，返回計算結果。運算符可以是以下之一：
- '+'：加法
- '-'：減法
- '*'：乘法
- '/'：除法
*/



echo"<br>";
echo"<hr>";
echo"<br>";

/*
題目 4: 交通工具分類
撰寫一個 PHP 函數，根據給定的交通工具（car、bus、bicycle、train）輸出相應的類別：
- car：汽車
- bus：公共汽車
- bicycle：自行車
- train：火車
- 其他：未知交通工具
*/

$i=3;
$a=['car','bus','bicycle','train','else'];

switch($a=$i){
    case '1':
        echo "請自行開車";
        break;
    case '2':
        echo "請搭乘公車";
        break;
    case '3':
        echo "請騎乘自行車";
        break;
    case '4':
        echo "請搭乘火車";
        break;
    case '5':
        echo "無法判斷交通工具";
        break;
    default:
        echo "無效選擇，請輸入1-5間的數字";
}


echo"<br>";
echo"<hr>";
echo"<br>";

/*
題目 5: 顏色代碼
撰寫一個 PHP 函數，根據顏色名稱（red、green、blue）輸出相應的十六進制顏色代碼：
- red：#FF0000
- green：#00FF00
- blue：#0000FF
- 其他顏色：未知顏色
*/




?>


</body>
</html>