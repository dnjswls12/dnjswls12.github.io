<html>

<body>
<pre>
<?php

function fibonacci($n){
$array= array();
$array[0] =1;
$array[1] =1;
    for($i=2;$i<$n;$i++){
        $array[$i] = $array[$i-1] + $array[$i-2];
    

    }

    print_r($array);
    


}

$n = $_GET['number3'];
echo "입력한 숫자는 ".$n." 입니다. "."<br>";
echo "<br>";
echo "<br>";

fibonacci($n);




?>
</pre>
</body>
</html>