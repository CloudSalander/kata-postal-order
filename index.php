<?php

include('class/TurnManager.php');

define('DEFAULT_TURNS_TO_GENERATE', 10);

$turnManager = new TurnManager();

$generatedTurns = 0;
$turnToGenerate = $argv[1] ?? DEFAULT_TURNS_TO_GENERATE;  

while($generatedTurns < $turnToGenerate) {
    $turnManager->generateTurn();
    ++$generatedTurns;
}
$turnManager->callTurn();
$turnManager->deleteTurn();

?>