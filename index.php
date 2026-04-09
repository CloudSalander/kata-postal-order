<?php

include('class/Turn.php');

$turn1 = new Turn(3,TurnType::E);
var_dump($turn1);
$turn2 = new Turn(3,TurnType:H);
var_dump($turn2);

?>