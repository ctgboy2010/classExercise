
<?php
$yes = array('this', 'is', 'an array');

echo is_array($yes) ? 'Array' : 'not an Array';
echo "\n";

$no = 'this is a string';

echo is_array($no) ? 'Array' : 'not an Array';
//echo is_string($no) ? 'String' : 'not an String';
//echo is_bool($no) ? 'boolean' : 'not an boolean';
?>
