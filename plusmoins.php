<?php

$rand = rand($argv[1],$argv[2]);
$vies = $argv[3];

echo "vie :$vies".PHP_EOL;

$a=readline('enter number : ');

while ($a !== $rand){
    $vies--;
    echo "vie :$vies".PHP_EOL;
    if($a < $rand){
        echo "Plus grand".PHP_EOL;
        $a=readline('enter number : ');    
    }
    if ($a > $rand){
        echo "plus petit".PHP_EOL;
        $a=readline('enter number : ');    
    }
    if ($a == $rand){
        echo "C'est gagné".PHP_EOL;
        die();
    }
    if ($vies == 0){
        echo "arrete arrete c'est nwar".PHP_EOL;
        echo "le nombre était $rand".PHP_EOL;
        die();
    }
}