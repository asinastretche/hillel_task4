<?php
function findElementByNumber($array, $number) {
    $currentIndex = 0;
    function searchElement($array, $number, &$currentIndex) {
        foreach ($array as $element) {
            if ($currentIndex === $number) {
                return $element;
            }
            $currentIndex++;
            if (is_array($element)) {
                $found = searchElement($element, $number, $currentIndex);
                if ($found !== null) {
                    return $found;
                }
            }
        }
        return null;
    }
    return searchElement($array, $number, $currentIndex);
}

function countLetterB($input): int|bool
{
    if (!is_string($input)) {
        return false;
    }

    return substr_count($input, 'b');
}

function sumArrayValues($array) {
$sum = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            $sum += sumArrayValues($value);
        } elseif (is_numeric($value)) {
            $sum += $value;
        }
    }
    return $sum;
}

function countNestedSquares($bigSquareSide, $smallSquareSide): float {
    $bigSquareArea = pow($bigSquareSide, 2.0);
    $smallSquareArea = pow($smallSquareSide, 2.0);

    return $count = $bigSquareArea / $smallSquareArea;
}

echo "<br>". "Создать функцию принимающую массив произвольной вложенности
и определяющий любой элемент номер которого передан параметром во всех вложенных массивах: ";
$nestedArray = [
    'a',
    ['b', 'c', ['d', 'e', ['f']]],
    'g',
    ['h', 'i']
];
$number = 0;
echo findElementByNumber($nestedArray, $number) ;


echo "<br>". "<br>"."Создать функцию которая считает все буквы b в переданной строке,
 в случае если передается не строка функция должна возвращать false: ";
echo countLetterB("bubble");


echo "<br>". "<br>". "Создать функцию которая считает сумму значений
 всех элементов массива произвольной глубины: ";
$nestedArray = [
    1,
    [2, 3],
    [4, [5, 6]],
    7
];
echo sumArrayValues($nestedArray);



echo "<br>". "<br>". "Создать функцию которая определит сколько квадратов меньшего размера
 можно вписать в квадрат большего размера размер возвращать в float: ".
    countNestedSquares(12.0,2.0);