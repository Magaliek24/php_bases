<?php

$maVariable1 = 123;
$maVariable2 = 12.3;
$maVariable3 = 'toto';
$maVariable4 = true;
// echo $maVariable4 . "<br>"; => rien si false | 1 si true

echo ("maVariable1: " . gettype($maVariable1) . "<br>"); // integer
echo ("maVariable2: " . gettype($maVariable2) . "<br>"); // double
echo ("maVariable3: " . gettype($maVariable3) . "<br>"); // string
echo ("maVariable4: " . gettype($maVariable4) . "<br>"); // boolean
