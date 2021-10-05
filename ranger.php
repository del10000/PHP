<?php

$file = 'contenu.json';
$tab = [];
asort($argv);

foreach ($argv as $val) {
    if($val !== "ranger.php"){
        array_push($tab, $val);
    }
}

file_put_contents($file, json_encode($tab));

