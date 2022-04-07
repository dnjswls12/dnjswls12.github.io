<html>

<body>
<pre>
<?php
$n = $_GET['number'];
echo "선택한 숫자는 ".$n." 입니다. "."<br>";
echo "<br>";
echo "<br>";


$a=0;
$sum=0;
$b=1;
$arraY = array('');

for ($a=1; $a<$n+1; $a++){   
    $sum= $sum+$a;
    $b=$b*$a;
    array_push($arraY,$a);
}

echo "1부터 n까지의 배열은 :<br>";

print_r($arraY);
echo " 입니다. <br>";

echo "1부터 n까지의 합계는 : "."$sum" ." 입니다.<br>";

echo "1부터 n까지의 곱은 : "."$b" ." 입니다.";


?>
</pre>
</body>
</html>