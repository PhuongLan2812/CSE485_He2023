<?php
$keys = array( "field1"=>"first", "field2"=>"second", "field3"=>"third");
$values = array( "field1value"=>"dinosaur", "field2value"=>"pig", "field3value"=>"platypus");
$keysAndValues = array();
foreach ($keys as $key => $value) { 
    $fieldKey = "{$key}value"; 
    if (array_key_exists($fieldKey, $values)) 
    { $keysAndValues[$value] = $values[$fieldKey]; }
}print_r($keysAndValues);
?>