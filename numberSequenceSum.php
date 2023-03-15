<?php

$num1 = intval(fgets(STDIN));
$num2 = intval(fgets(STDIN));
$total = 0;

if($num1 > $num2){
  $temp = $num1;
  $num1 = $num2;
  $num2 = $temp;
}

for($i = $num1 ; $i < $num2 ; $i++){
  if($num1 == 0 or $num2 == 0){
    break;
  }
  $total += $i;
  echo "$i ";
}
if($num1 != 0 and $num2 != 0){
  echo "sum=$total \n";
}

?>

