<?php
    //Example 1: array_search()

    $a=array(0=>'blue',1=>'red',2=>'green',3=>'red');

    $key=array_search('green', $a); //$key = 2;
    print_r($key);
    echo "<br />";
    $key=array_search('red',$a);	//$key = 1;
    print_r($key);
?>