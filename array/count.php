<?php
    //Example 1: count()
    $a[0]=1;
    $a[1]=2;
    $a[2]=3;
    print_r(count($a));	//3

    $b[0]=7;
    $b[1]=8;
    $b[2]=9;
    print_r(count($b)); // 3

    print_r(count(null)); // 0
    print_r(count(false));	//1
?>