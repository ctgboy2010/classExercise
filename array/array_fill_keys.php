<?php
    //Example 1: array_fill_keys

    $a=array('foo',5,10,'bar');

    print_r(array_fill_keys($a,'banana'));
    //print_r(array_fill_keys(array('foo',5,10,'bar'),'test'));
    //var_dump(array_fill_keys(array('foo',5,10,'bar'),'test'));
?>