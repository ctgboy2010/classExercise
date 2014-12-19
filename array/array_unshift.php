<?php
    //Example 1: array_unshift()

    $queue=array("orange","banana");
    print_r($queue);
    array_unshift($queue, "apple","raspberry","blue");
    print_r($queue);
?>