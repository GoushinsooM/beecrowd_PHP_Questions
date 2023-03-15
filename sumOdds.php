<?php

$num1 = intval(fgets(STDIN));
$num2 = intval(fgets(STDIN));
$total = 0;

if($num1 > $num2){
  $temp = $num1;
  $num1 = $num2;
  $num2 = $temp;
}
for($i = $num1+1 ; $i < $num2 ; $i++){
    if (abs($i % 2) == 1){
      $total += $i;
    } 
}
echo "$total \n";
?>

