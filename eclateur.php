<?php

$tab = [];

$test = strtolower($argv[1]);


foreach (count_chars($test, 1) as $i => $val) {
    if (chr($i) !== " "){
        echo "" ,chr($i), " => $val".PHP_EOL;
    }
}