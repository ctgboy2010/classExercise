<?php
    //Example 1: array_diff_assoc

    $a=array("a"=>"green","b"=>"brown","c"=>"blue","red");
    $b=array("a"=>"green","b"=>"orange","c"=>1,"blue","yellow","red");

    print_r($a);
    print_r($b);

    print_r(array_diff_assoc($a,$b));
?>