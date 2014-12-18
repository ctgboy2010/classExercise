<?php
//Example: 1. array_change_key_case()

$input_array=array("First"=>1,"Second"=>4);
print_r(array_change_key_case($input_array));
print_r(array_change_key_case($input_array,CASE_UPPER));
print_r(array_change_key_case($input_array,CASE_LOWER));
?>
