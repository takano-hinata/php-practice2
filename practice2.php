<?php

//課題１
$name = "高野ひなた";

if ($name == "高野ひなた") {
    echo "私は $name です。" . "\n";
} else {
    echo "$name ではありません。" . "\n" ;
}



//課題２
$total = 0;
echo $total . "\n";


for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}

echo $total . "\n";



//課題３
$fruits = array("banana", "lemon", "cherry", "pineapple", "peach");

foreach($fruits as $fruit){
    echo $fruit . "\n";
}



//応用課題
$start = 1;
$end = 100;
 for ($i = $start; $i <= $end; $i++){
     if($i % 5 ==0){
         echo $i . PHP_EOL;
     }
 }
 
 
 