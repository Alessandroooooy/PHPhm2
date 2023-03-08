<?php

$handle = fopen ("php://stdin","r");

echo "Please give me number to Fizz:  ";

$fizz = fgets($handle);

if (!ctype_digit($fizz)) {
    echo "wrong value";
    return;
}
echo "Please give me number Buzz:  ";

$buzz = fgets($handle);

if (!ctype_digit($buzz)) {
    echo "wrong value";
    return;
}
echo "Please give me number end number:  ";

$end = fgets($handle);

if (!ctype_digit($end)) {
    echo "wrong value";
    return;
}

for ($i = 1; $i <= $end; $i++) {

    if ($i % $fizz === 0 && $i % $buzz === 0) {
        echo "FB";
    } else if ($i % $buzz === 0) {
        echo "B";
    } else if ($i % $fizz === 0) {
        echo "F";
    } else  {
        echo $i;
    }

    echo " ";
}



echo PHP_EOL;
