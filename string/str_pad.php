<?php
    //str_pad
    $a="Alien";
    $c="<br />";
    echo str_pad($a,10).$c; //Alien

    echo str_pad($a,10,"-=",STR_PAD_LEFT).$c; //-=-=-Alien

    echo str_pad($a,10,"_",STR_PAD_BOTH).$c;    //__Alien___

    echo str_pad($a,10,"__"); //Alien_____
?>