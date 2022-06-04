<?php
echo"ashima <br/>";
$str = "abc and xyz";
$pattern = "/xy(z){1}/";//metacharacter
echo preg_match($pattern,$str);
$str = "ashima";
$pattern = "/ashima/i";//modifiers
echo"<br>";
echo preg_match($pattern,$str);
echo"<br>";
echo"OPERATORS <br/>";
echo"ARHITHMETIC OPERATORS <br/>";
$a=10;
$b=20;
$c=$a+$b;
$d=$a-$b;
$e=$a*$b;
$f=$a/$b;
$g=$a%$b;
echo"Variable first a=".$a."<br/>";
echo"Variable second b=".$b."<br/>";
echo"sum=".$c."<br/>";
echo"subtraction=".$d."<br/>";
echo"multiplication=".$e."<br/>";
echo"division=".$f."<br/>";
echo"modulas=".$g."<br/>";
echo"INCREMENT OPERATORS <br/>";
echo"pre-increment=".++$a."<br/>";
echo"post-increment=".$a++."<br/>";
echo"DECREMENT OPERATORS <br/>";
echo"pre-decrement=".--$b."<br/>";
echo"post-decrement=".$b--."<br/>";
?>