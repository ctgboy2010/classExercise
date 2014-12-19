<?php
    //Example 1: array_merge()

    $a=array("color"=>"red",2,4);
    $b=array("a","b","color"=>"green","shape"=>"trapezoid",4);

    print_r($a);
    print_r($b);
    print_r(array_merge($a,$b));
?>