<?php
while (($line = fgets(STDIN)) !== false) {
    $num_slugs = intval(trim($line));

    $slugs = explode(" ", trim(fgets(STDIN)));

    $fastest = max($slugs);

    if ($fastest < 10) {
        echo "1 \n";
    }
    elseif ($fastest < 20) {
        echo "2 \n";
    }
    else {
        echo "3 \n";
    }
}
?>
