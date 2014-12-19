<?php
    //Example 1: array_shift()

    $stack=array("orange","banana","apple","raspberry");
    print_r($stack);
    $fruit=array_shift($stack);
    print_r($stack);
?>