<?php

//課題１
$name = "高野ひなた";

if ($name == "高野ひなた") {
    echo "私は $name です。" . PHP_EOL;
} else {
    echo "$name ではありません。" . PHP_EOL;
}



//課題２
$total = 0;
echo $total . PHP_EOL;

for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}

echo $total . PHP_EOL;



//課題３
$fruits = array("banana", "lemon", "cherry", "pineapple", "peach");

foreach($fruits as $fruit){
    echo $fruit . PHP_EOL;
}



//応用課題
$start = 1;
$end = 100;
 for ($i = $start; $i <= $end; $i++){
     if($i % 5 ==0){
         echo $i . PHP_EOL;
     }
 }
 