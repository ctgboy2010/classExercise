<?php
    //Example 1: Get column of first names from recordset

    //Array representing a possible record set returned from a database
    $records=array(array('id'=>2135,'first_name'=>'John','last_name'=>'Doe'),
    array('id'=>3245,'first_name'=>'Sally','last_name'=>'Smith'),
    array('id'=>5342,'first_name'=>'Jane','last_name'=>'Jones'),
    array('id'=>5623,'first_name'=>'Peter','last_name'=>'Doe'));
    print_r($records);
    print_r(array_column($records,'last_name','id'));
    //print_r(array_column($records,'last_name','id'));
?>