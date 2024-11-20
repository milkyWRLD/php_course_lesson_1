<?php
// Чтение двух чисел из стандартного ввода (stdin)
$firstNumber = fgets(STDIN);
$secondNumber = fgets(STDIN);

$firstNumber = trim($firstNumber);
$secondNumber = trim($secondNumber);

// Проверяем, что оба значения — это целочисленные числа (int)
if (!is_numeric($firstNumber) || !is_numeric($secondNumber)) {
    fwrite(STDERR, "Введите, пожалуйста, число\n");
    exit(1);
}

$firstNumber = (int)$firstNumber;
$secondNumber = (int)$secondNumber;

if ($secondNumber == 0) {
    fwrite(STDERR, "Делить на 0 нельзя\n");
    exit(1);
}

$result = $firstNumber / $secondNumber;

echo "Результат деления: $result\n";
?>
