<?php
// Примеры значений:
// - true или false -> выведет "Type is bool"
// - 3.14 -> выведет "Type is float"
// - 42 -> выведет "Type is int"
// - "Hello" -> выведет "Type is string"
// - null -> выведет "Type is null"
// - [] (пустой массив) или объект -> выведет "Type is other"

$variable = "Hello";

if (is_bool($variable)) {
    $type = 'bool';
} elseif (is_float($variable)) {
    $type = 'float';
} elseif (is_int($variable)) {
    $type = 'int';
} elseif (is_string($variable)) {
    $type = 'string';
} elseif (is_null($variable)) {
    $type = 'null';
} else {
    $type = 'other';
}

echo "Type is $type";
?>