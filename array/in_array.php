<?php
    $a=array("Mac","NT","Irix","Linux");
    print_r($a);
    if(in_array("Irix",$a)){
        echo "Got Irix";
    }
    if(in_array("mac", $a)){
        echo "Got mac";
    }
?>