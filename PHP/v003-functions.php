<?php

$msg = "Hello World!";
echo "<br> $msg";

$msg_uppercase = strtoupper($msg);
echo "<br> $msg_uppercase";

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$result = implode(", ", $numbers);
echo "<br> $result";

echo "<br> <br>";

add2Numbers(10, 25);
add2Numbers(15, 24);
add2Numbers(352, 78);

function add2Numbers($a, $b)
{
    $total = $a + $b;
    echo "<br> $a + $b = $total";
}

echo "<br> <br>";

$x = 10;
echo "<br> x before function = $x";
alterX($x);

function alterX($x)
{
    $x = 55;
    echo "<br> x inside function = $x";
}

echo "<br> x outside function = $x";


echo "<br> <br>";

$y = 12;
echo "<br> y before function = $y";
alterY();

function alterY(){
    global $y;
    $y = 510;
    echo "<br> y inside function = $y";

}

echo "<br> y outside function = $y";
