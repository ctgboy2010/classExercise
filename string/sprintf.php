<?php
    //sprintf Argument swapping
    $num=5;
    $location='tree';
    $format="There are %d monkeys in the %s";
    echo sprintf($format,$num,$location);
    //output: There are 5 monkeys in the tree
?>