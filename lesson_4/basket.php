<?php

const OPERATION_EXIT = 0;
const OPERATION_ADD = 1;
const OPERATION_DELETE = 2;
const OPERATION_PRINT = 3;

$operations = [
    OPERATION_EXIT => OPERATION_EXIT . '. Завершить программу.',
    OPERATION_ADD => OPERATION_ADD . '. Добавить товар в список покупок.',
    OPERATION_DELETE => OPERATION_DELETE . '. Удалить товар из списка покупок.',
    OPERATION_PRINT => OPERATION_PRINT . '. Отобразить список покупок.',
];

$items = [];

function displayItems(array $items)
{
    if (empty($items)) {
        echo "Ваш список покупок пуст." . PHP_EOL;
    } else {
        echo 'Ваш список покупок:' . PHP_EOL;
        echo implode(PHP_EOL, $items) . PHP_EOL;
    }
}

function selectOperation(array $operations, array $items)
{
    do {
        displayItems($items); // Вывод списка
        echo 'Выберите операцию для выполнения:' . PHP_EOL;
        echo implode(PHP_EOL, $operations) . PHP_EOL . '> ';
        $operationNumber = (int) trim(fgets(STDIN));

        if (!array_key_exists($operationNumber, $operations)) {
            system('clear'); // Очищаем экран
            echo '!!! Неизвестный номер операции, повторите попытку.' . PHP_EOL;
        }
    } while (!array_key_exists($operationNumber, $operations));

    return $operationNumber;
}

function addItem(array &$items)
{
    echo "Введите название товара для добавления в список:\n> ";
    $itemName = trim(fgets(STDIN));
    $items[] = $itemName; // Добавляем в массив
}

function deleteItem(array &$items)
{
    if (empty($items)) {
        echo "Ваш список покупок пуст. Удаление невозможно.\n";
        return;
    }

    echo 'Введите название товара для удаления из списка:' . PHP_EOL . '> ';
    $itemName = trim(fgets(STDIN));

    if (in_array($itemName, $items, true)) {
        $items = array_values(array_diff($items, [$itemName]));
        echo "Товар \"$itemName\" удален из списка.\n";
    } else {
        echo "Товар \"$itemName\" не найден в списке.\n";
    }
}

function printItems(array $items)
{
    displayItems($items);
    echo 'Всего ' . count($items) . ' позиций.' . PHP_EOL;
    echo 'Нажмите Enter для продолжения...';
    fgets(STDIN);
}

do {
    system('clear'); // Очистка экрана
    $operationNumber = selectOperation($operations, $items);

    echo 'Выбрана операция: ' . $operations[$operationNumber] . PHP_EOL;

    switch ($operationNumber) {
        case OPERATION_ADD:
            addItem($items);
            break;
        case OPERATION_DELETE:
            deleteItem($items);
            break;
        case OPERATION_PRINT:
            printItems($items);
            break;
    }

    echo "\n ----- \n";
} while ($operationNumber > 0);

echo 'Программа завершена' . PHP_EOL;
