<?php
// Примеры значений:
// - true или false -> выведет "Type is bool"
// - 3.14 -> выведет "Type is float"
// - 42 -> выведет "Type is int"
// - "Hello" -> выведет "Type is string"
// - null -> выведет "Type is null"
// - [] (пустой массив) или объект -> выведет "Type is other"

$variable = "Hello";

switch (true) {
    case is_bool($variable):
        $type = 'bool';
        break;
    case is_float($variable):
        $type = 'float';
        break;
    case is_int($variable):
        $type = 'int';
        break;
    case is_string($variable):
        $type = 'string';
        break;
    case is_null($variable):
        $type = 'null';
        break;
    default:
        $type = 'other';
        break;
}

echo "Type is $type";
?>
