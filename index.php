<?php

include('class/TurnManager.php');

define('DEFAULT_TURNS_TO_GENERATE', 10);

$turnManager = new TurnManager();

$generatedTurns = 0;
$turnToGenerate = $argv[1] ?? DEFAULT_TURNS_TO_GENERATE;  

while($turns < $turnToGenerate) {
    $turnManager->generateTurn();
    ++$turns;
}
$turnManager->callTurn();

?>