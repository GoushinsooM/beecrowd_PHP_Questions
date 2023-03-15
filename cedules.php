<?php
$note_list = [100, 50, 20, 10, 5, 2, 1];

$money = readline();

echo "$money \n";

for ($i = 0; $i < count($note_list); $i++) {
    $count =  $money / $note_list[$i];
    
    echo intval($count) . " nota(s) de R$ $note_list[$i],00\n";
    
    $money %= $note_list[$i];
}
?>
