<?php

include 'Cal.php';

$cal = new Cal(0);
$cal->min('20');
$cal->add(20);

if (!$cal->getResult()) {
    $cal->add(42);
}

echo $cal->getResult().PHP_EOL;
