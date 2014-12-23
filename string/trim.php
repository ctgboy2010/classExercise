<?php
    $text="\t\tThese are a few words :) ... ";
    $binary="\x09Example string\x0A";
    $hello="Hello World";

    //var_dump($text,$binary,$hello);

    print "\n";
    echo trim($text);
    print "<br />";
    echo trim($binary);
    print "<br />";
    echo trim($hello," \t.");
    print "<br />";
    echo trim($hello,"Hdle");
?>