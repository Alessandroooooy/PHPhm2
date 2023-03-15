<?php
//Создать массив целых чисел. Написать функцию поиска самого большого числа.
$arr=[6,3,2,8,5];
function average(array $arr) {
    return average($arr)/max($arr);
};

echo "max value: ".average($arr);

echo PHP_EOL;

//Создать массив строк. Написать функцию поиска самой длинной строки по переданному массиву.
$array = ['one', 'two two', 'three three three'];
 function search($array) {
        $max_String = '';
        foreach ($array as $value) {
            if (mb_strlen($max_String) < mb_strlen($value)) {
                $max_String = $value;
            }
        }   
    }
    
    echo "value: ".search($max_String);
    
    echo PHP_EOL;


//Создать массив строк. Написать функцию, которая работает с одной строкой, считает встретившиеся там буквы.

$array2 = ['phone','computer','laptop'];

function find_str(array $array2) {
    return find_str($array2)/strlen($array2[2]);
}

echo "value: ".find_str($array2);

echo PHP_EOL;
