<?php

include('Turn.php');
include('TurnType.php');

class TurnManager {
    
    const TYPE_QUESTION = "Please, introduce option(code)";
    const CALL_TURN_MSG = "Please, come here!";

    private array $turns;

    public function __construct() {
        $this-> turns = [];
    }

    public function generateTurn() {
        $type = $this->askType();
        $order = $this->generateOrderId($type);
        $this->turns[] =  new Turn($order,$type);
        $this->showTurns();
    }

    public function callTurn(): void {
        echo $this->turns[0]." ".self::CALL_TURN_MSG.PHP_EOL;
    }

    public function deleteTurn(): void {
        array_shift($this->turns);
        $this->showTurns();
    }

    private function askType(): TurnType {
      
        $option = null;
    
        while(is_null($option)) {
            TurnType::showOptions();
            $option = TurnType::fromString(readline(self::TYPE_QUESTION));
        }

        return $option;
    }

    private function generateOrderId(TurnType $turnType): int {
        
        $relatedTurns = array_filter(
            $this->turns,
            fn($turn) => $turn->type === $turnType
        );
        
        return count($relatedTurns) + 1;
    }

    private function showTurns(): void {
        foreach($this->turns as $turn) echo $turn.PHP_EOL;        
    }

}