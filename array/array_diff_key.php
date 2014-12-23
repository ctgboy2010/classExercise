<?php
    //Example 1: array_diff_key

    $a=array('blue'=>1,'red'=>2,'green'=>3,'purple'=>4);
    $b=array('green'=>5,'blue'=>6,'yellow'=>7,'cyan'=>4);

    print_r($a);
    print_r($b);
    print_r(array_diff_key($a,$b));
    var_dump(array_diff_key($a,$b));
?>