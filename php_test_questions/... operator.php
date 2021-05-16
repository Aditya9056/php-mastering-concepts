<?php
$params = ['count' => 100, 'start_index' => 0, 'value' => 5230];
print_r($params);

$arr = array_fill(...$params);

print_r($arr);
