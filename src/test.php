<?php
 
//1.Придумать и написать любой пример использования if-elseif-else.


$book = 3;

if ($book == 1){
    echo "i have one book";
} 
elseif ($book == 2) {
    echo "i have two books";
}
elseif ($book == 3 || $book > 1) {
    echo "i have three books. Someone wanna buy?";
}
else {
    echo "i have no books(((";
}

echo PHP_EOL;



//Переписать скрипт оператора if->elseif->else так, чтобы использовалась конструкция switch->case->break
$book = 3;

switch ($book) {
 case '1':
     echo "i have one book";
    break;
 case '2':
     echo "i have two books";
    break;
case '3':
     echo "i have three books";
    break;
default:
        echo "i have no books(((";
    break;
}





//Придумать и написать любой пример использования тернарного оператора.

$phone = 'sumsung';

$result = $phone == 'Iphone' ?  "it is Iphone" : "it is Sumsung";

echo $result;

echo PHP_EOL;






