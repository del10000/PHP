<?php

$tab = [];

foreach ($argv as $val) {
    if($val !== "retourneur.php"){
        array_push($tab, strrev($val));
    }
}
$separated = implode(" ", $tab);
echo $separated;