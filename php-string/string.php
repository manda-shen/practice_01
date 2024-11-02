<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-size: 16px;
            color: rgb(100,100,100)
        }

    </style>
</head>
<body>

<h3>1. substr() & mb_substr()</h3>
<p>給定字串 $text = "PHP is awesome!"，請使用 substr() 截取 "awesome" 並印出。</p>

<?php
$text="PHP is awesome";
$subtext=substr($text,-8,-1);
echo "$subtext";
?>
<hr>

<p>給定 UTF-8 編碼字串 $text = "你好，世界！"，請使用 mb_substr() 截取 "世界" 並印出。</p>

<?php
$text= "你好，世界！";
$newtext=mb_substr($text,-3,-1,'UTF-8');
echo "$newtext";
?>
<hr>

<h3>2.trim()</h3>
<p>給定字串 $text = " Hello World! "，請去除字串首尾的空白並印出結果。</p>

<?php
$text=" Hello World! ";
$newtext=trim($text);
echo "$newtext";
?>
<hr>

<p>給定字串 $text = "___Hello___"，請使用 trim() 去除首尾的下劃線 _ 並印出結果。</p>

<?php
$text="___Hello___";
$newtext= trim($text,"___");
echo "$newtext";
?>
<hr>

<h3>3.str_repeat()</h3>
<p>使用 str_repeat() 輸出字串 "Hi!" 三次。</p>

<?php
$text="Hi!";
$newtext= str_repeat($text,"3");
echo "$newtext";
?>

<p>請將字串 "*" 重複 10 次，並印出結果。</p>

<?php
$text="*";
$newtext=str_repeat($text,10);
echo "$newtext";
?>
<hr>

<h3>4. str_replace()</h3>
<p>給定字串 $text = "I love apples."，請將 "apples" 替換為 "bananas" 並印出。</p>

<?php
$text= "I love apples.";
$newtext=str_replace("apples","bananas",$text);
echo "$newtext";
?>
<hr>

<p>將字串 "The sky is blue." 中的 "blue" 替換為 "green"，並印出結果。</p>

<?php
$text="The sky is blue.";
$newtext=str_replace("blue","green",$text);
echo "$newtext";
?>
<hr>

<h3>5. explode()</h3>
<p>給定字串 $text = "apple,banana,orange"，請將其以逗號分割為陣列並印出。</p>

<?php
$text="apple,banana,orange";
$text_array=explode(",",$text);
print_r($text_array);
?>
<hr>

<p>將字串 "John|Doe|30" 以 | 分割，並印出分割後的陣列。</p>

<?php
$text="John|Doe|30";
$text_array=explode("|",$text);
echo "<pre>";
print_r($text_array);
echo "</pre>";
?>
<hr>

<h3>6. implode() / join()</h3>
<p>給定陣列 ["PHP", "is", "fun"]，請使用 implode() 將其組合成字串 "PHP is fun"。</p>

<?php
$array=["PHP", "is", "fun"];
$mixed=implode(" ",$array);
echo "$mixed";
?>
<hr>

<p>將陣列 ["a", "b", "c"] 用 join() 方法組合成 "a-b-c" 字串並印出。</p>

<?php
$array2=["a", "b", "c"];
$mixed2=join("-",$array2);
echo "$mixed2";
?>
<hr>

<h3>7. strpos()</h3>
<p>給定字串 $text = "Hello, PHP!"，請找出 "PHP" 的位置並印出。</p>

<?php
$text="Hello, PHP!";
$pos=strpos($text,"PHP");
echo "$pos";
?>
<hr>

<p>檢查字串 "apple" 中是否包含 "p"，並印出位置。</p>

<?php
$text="apple";
$position=strpos($text,"p");
echo "$position";
?>
<hr>

<h3>8. strlen()</h3>
<p>計算字串 "Learning PHP" 的長度。</p>

<?php
$text="Learing PHP";
$textlen=strlen($text);
echo "$textlen";
?>
<hr>

<p>請計算字串 ""（空字串）的長度，並印出結果。</p>

<?php
$string="";
$stringlen=strlen($string);
echo "$stringlen";
?>
<hr>

<h3>9. strtolower()</h3>
<p>將字串 "HELLO WORLD" 全部轉為小寫並印出。</p>

<?php
$text="HELLO WORLD";
$lowertext=strtolower($text);
echo "$lowertext";
?>
<hr>

<p>將字串 "Php Is Fun" 轉為小寫並印出結果。</p>

<?php
$text="Php Is Fun";
$textlower=strtolower($text);
echo "$textlower";
?>
<hr>

<h3>10. strtoupper()</h3>
<p>將字串 "hello world" 全部轉為大寫並印出。</p>

<?php
$text="hello world";
$textupper=strtoupper($text);
echo "$textupper";
?>
<hr>

<p>將字串 "Php Is Fun" 轉為大寫並印出結果。</p>

<?php
$text="Php Is Fun";
$textupper=strtoupper($text);
echo "$textupper";
?>
<hr>

<h3>11. ucfirst()</h3>
<p>給定字串 "hello world"，請將字串的第一個字母轉為大寫並印出結果。</p>

<?php
$string="hello world";
$ucfirst_str=ucfirst($string);
echo "unfirst_str";
?>
<hr>

<h3>12. ucwords()</h3>
<p>將字串 "hello world, how are you?" 中每個單字的首字母轉為大寫並印出。</p>

<?php
$string="hello world, how are you?";
$ucwords_str=ucwords($string);
echo "$ucwords_str";
?>
<hr>

<h3>13. strrev()</h3>
<p>給定字串 "GOOD"，請將其反轉並印出。</p>

<?php
$text="GOOD";
$newtext=strrev($text);
echo "$newtext";
?>
<hr>

<h3>14. number_format()</h3>
<p>將數字 1234567.89 格式化為 "1,234,567.89" 並印出。</p>

<?php
$nb="1234567.89";
$nb_format= number_format($nb,2,".",",");
echo "$nb_format";
?>
<hr>

<h3>15. str_pad()</h3>
<p>將字串 "42" 以 * 填充到 5 個字元長度，並印出。</p>

<?php
$nb="42";
$string1=str_pad($nb,5,"*",STR_PAD_RIGHT);
$string2=str_pad($nb,5,"*",STR_PAD_LEFT);
$string3=str_pad($nb,5,"*",STR_PAD_BOTH);
echo "$string1<br>$string2<br>$string3";
?>
<hr>

<!-- 這個題目沒有解出來 -->
<h3>16. htmlspecialchars()</h3>
<p>給定字串 "<b>Hello</b>"，請轉換 HTML 特殊字元以防止 XSS，並印出結果。</p>

<?php
$string="<b>Hello</b>";
$new_str=htmlspecialchars($string);
echo "<p>$new_str</p>";
?>
<hr>

<h3></h3>
<p></p>

<?php



?>
<hr>

<h3></h3>
<p></p>

<?php



?>
<hr>

<h3></h3>
<p></p>

<?php



?>
<hr>

<h3></h3>
<p></p>

<?php



?>
<hr>

<h3></h3>
<p></p>

<?php



?>
<hr>

<h3></h3>
<p></p>

<?php



?>



</body>
</html>