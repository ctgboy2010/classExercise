<?php
    $numbers=range(1, 20);
    shuffle($numbers);
    $count=0;
    foreach ($numbers as $number) {
        echo "$number"."<br />";
        $count++;
    }
    echo "count = ".$count;
?>