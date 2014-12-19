<?php
    //Example 1: array_intersect_key()
    $a=array('blue'=>1,'red'=>2,'green'=>3,'purple'=>4);
    $b=array('green'=>5,'blue'=>6,'yellow'=>7,'cyan'=>8);

    print_r(array_intersect_key($a,$b));
?>