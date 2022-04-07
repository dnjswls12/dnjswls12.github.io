<?php

$w= $_GET['width'];
$h= $_GET['height'];
$w1= $_GET['width1'];
$h1= $_GET['height1'];
//삼각형
if(isset($w)) {
    
echo $w*$h/2;
}
//직사각형

if(isset($w1)) {
    echo $w1*$h1;
}

?>