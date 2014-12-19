<?php
    //Example 1: A simple array_combine()

    $a=array('green','red','yellow');
    //$a=array(1,2,3.45);
    $b=array('avocado','apple','banana');
    print_r($a);
    print_r($b);
    print_r(array_combine($a,$b));
?>