<?php
    //Example 1: explode()
    $a="piece1 piece2 piece3 piece4 piece5 piece6";
    $pieces=explode(" ",$a);
    echo $pieces[0]; //piece1
    echo $pieces[1]; //piece2

    //Example 2
    $data="foo:*:1023:1000::/home/foo:/bin/sh";
    list($user,$pass,$uid,$gid,$gecos,$home,$shell)=explode(":",$data);
    echo $user; //foo
    echo $pass; //*
?>