<?php
    //Example 1: array_flip()

    $a=array('oranges','apples','pears');

    print_r(array_flip($a));

    //array_flip() collision
    $b=array('b'=>1,'a'=>1,'c'=>2);
    print_r(array_flip($b));
?>