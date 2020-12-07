<?php
header('Content-Type: text/plain');


function multi($a, $b = 10)
{
    return $a * $b;
}

echo multi(6, 7);
echo "\n";
echo multi(6);
