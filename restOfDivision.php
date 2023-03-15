<?php

$num1 = intval(fgets(STDIN));
$num2 = intval(fgets(STDIN));

if($num1 > $num2){
  $temp = $num1;
  $num1 = $num2;
  $num2 = $temp;
}

for($i = $num1 ; $i < $num2 ; $i++){
    if ($i % 5 == 2 or $i % 5 == 3){
      echo "$i \n";
    } 
}
?>