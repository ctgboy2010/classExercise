<?php
    //Example 1: array_keys()

    $a=array(0=>100,"color"=>"red");
    print_r($a);
    print_r(array_keys($a));

    $b=array("blue","red","green","blue","blue");
    print_r($b);
    print_r(array_keys($b,"blue"));

    $c=array("color"=>array("blue","red","green"),
        "size"=>array("small","medium","large"));
    print_r($c);
    print_r(array_keys($c));
?>