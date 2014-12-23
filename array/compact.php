<?php
    $city="San Francisco";
    $state="CA";
    $event="SIGGRAPH";

    $locantion_vars=array("city","state");
    print_r(compact("event","nothing_here",$locantion_vars));
?>