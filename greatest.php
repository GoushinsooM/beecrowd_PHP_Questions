<?php
$nums = explode(" ", fgets(STDIN));

$greatestAB = ($nums[0] + $nums[1] + abs($nums[0] - $nums[1]))/2;
$greatest = ($greatestAB + $nums[2] + abs($greatestAB - $nums[2]))/2;


echo "$greatest eh o maior\n";
?>