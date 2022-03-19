<?php
$say=function($name){
    echo "Hello" .$name;

}; 
echo "<br>";
$say("world");
function myCaller($myCallback){
    echo $myCallback();
}
myCaller(function() { echo "Hello" ;});
$a = array(1,2,3,4,5);
$b = array_map(function($n){
    return $n*$n*$n;
},$a);
print_r($b);

echo "<br>-------------------end bai1------------------<br>";
function countToFive(){
    yield 1;
    yield from[2,3,4];
    yield 5;
}
foreach (countToFive() as $v)
echo $v;

echo "<br>-------------------end bai 2---------------<br>";
// substr=chuỗi,index start,chiều dài lấy
echo substr('082307',0,2);
echo ":";
echo substr('082307',2,2);
echo ":";
echo substr('082307',4,2);
echo "<br>-------------------end bai 3---------------<br>";
echo "<pre>";
function thamso(){
    $arr = func_get_args();
    var_dump($arr);
    echo "<br>";
}
echo "<br>";
thamso('Twinkle, twinkle, little star ','How I wonder what you are ',
'Up above the world so high '
,'Like a diamond in the sky ');

echo "<br>-------------------end bai 4---------------<br>";
