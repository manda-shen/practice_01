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
題目 1：判斷年齡
寫一個 PHP 程式，根據用戶輸入的年齡，判斷該用戶是否為成年人（18 歲及以上）或未成年人（18 歲以下）。
$age = 20; 
請更改這個值以測試不同的年齡
實現判斷
*/

$age = 17;

if($age >= 18){
    echo "您的年齡為{$age}，您已成年。";
}else{
    echo "您的年齡為{$age}，您尚未成年。";
}


echo "<br>";
/*
題目 2：奇數與偶數
寫一個 PHP 程式，判斷用戶輸入的數字是奇數還是偶數。
$number = 7; 
請更改這個值以測試不同的數字
實現判斷
*/

$number =7;

if($number %2 ==1){
    echo "數字{$number}為偶數";
}else{
    echo "數字{$number}為奇數";
}

echo "<br>";
/*
題目 3：分數評級
寫一個 PHP 程式，根據用戶輸入的分數（0 到 100）給予評級：

90 分以上：A
80 到 89 分：B
70 到 79 分：C
60 到 69 分：D
60 分以下：F
$score = 85; 
請更改這個值以測試不同的分數
實現評級
*/

echo "<hr>";

$score =85;

if($score <= 100 && $score >=90){
    echo "你的評級為A";
}elseif($score <=89 && $score >=80){
    echo "你的評級為B";
}elseif($score <=79 && $score >=70){
    echo "你的評級為C";
}elseif($score <=69 && $score >=60){
    echo "你的評級為D";
}elseif($score <=59 && $score >=0){
    echo "你的評級為E";
}else{
    echo "無效的分數";
    exit;
}

echo "<br>";
echo "<hr>";


/*
題目 4：天氣建議
寫一個 PHP 程式，根據用戶輸入的氣溫（攝氏度）提供建議：

0 度以下：穿上冬衣
0 到 20 度：穿外套
20 到 30 度：穿輕便衣物
30 度以上：穿著涼爽
$temperature = 15; 
請更改這個值以測試不同的氣溫
實現建議
*/


$temperature =15;

if($temperature >=30){
    echo "今天溫度炎熱，請穿著清涼!";
}elseif($temperature >=20 && $temperature <=29){
    echo "今天溫度適宜，請輕便著裝!";
}elseif($temperature >=10 && $temperature <=19){
    echo "今天溫度微寒，請穿長袖及注意保暖!";
}elseif($temperature >=0 && $temperature <=9){
    echo "恐有寒流來襲，請注意保暖及穿厚外套!";
}else{
    echo "此為酷寒，請注意保暖及生命安全!";
}


echo "<br>";
echo "<hr>";


/*
題目 5：年齡分類
寫一個 PHP 程式，根據用戶輸入的年齡，將用戶分類為「小孩」、「青少年」、「成人」或「老人」：
小孩：0 到 12 歲
青少年：13 到 19 歲
成人：20 到 64 歲
老人：65 歲以上
$age = 45; 
請更改這個值以測試不同的年齡
實現分類
*/

$age = 45; 

if($age >=0 && $age <=12){
    echo "你是個小孩".'^o^';
}elseif($age >=13 && $age <=19){
    echo "青少年";
}elseif($age >=20 && $age <=64){
    echo "成人";
}elseif($age >=65){
    echo "老年人";
}else{
    echo "你是妖怪嗎?";
    exit;
}




?>



</body>
</html>