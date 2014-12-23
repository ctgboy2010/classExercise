<?php
    //Example 1: array_diff()

    $a=array('a'=>'green','red',23=>'blue','sky','red','sky');
    $b=array('a'=>'c','yellow',23=>'red');
    $c=array('a'=>'orange','think','chokolet','deep','sky');
    print_r($a);
    print_r($b);
    print_r($c);
    print_r(array_diff($a,$b,$c));
?>