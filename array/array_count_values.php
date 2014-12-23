<?php
    //Example 1: array_count_values

    $array=array(1,"hello",1,"world","hello",'msh','cow','msh','MSH','world',1);
    print_r($array);
    print_r(array_count_values($array));
?>