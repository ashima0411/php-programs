<?php
echo"ashima<br>";
$arr=array("hi","hello");
print_r(array_pad($arr,4,"hey")); //pad()
echo"<br>";
$a=array("dog","cat","snake","rabbit","tiger");
print_r(array_slice($a,2)); //slice()
echo"<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"pink","d"=>"purple");
$a2=array("a"=>"blue","b"=>"black");
array_splice($a1,0,2,$a2);//splice()
print_r($a1);
echo"<br>";
$my_array=array("dog","cat","horse");
list($a,$b,$c)=$my_array;//list()
echo"i have several animals,a $a,a $b and a $c.";
?>