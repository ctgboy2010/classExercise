<?php
    $a=substr("abcdef",-1); //f
    echo $a."<br />";
    $a=substr("abcdef",-2); //ef
    echo $a."<br />";
    $a=substr("abcdef",-3,1); //d
    echo $a."<br />";
    $a=substr("abcdef",3); //def
    echo $a."<br />";
    $a=substr("abcdef",3,2); //de
    echo $a;
?>