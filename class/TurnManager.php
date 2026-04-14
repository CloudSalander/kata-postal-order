<?php

include('Turn.php');
include('TurnType.php');

class TurnManager {
    
    const TYPE_QUESTION = "Please, introduce option(code)";
    
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

    private function askType(): TurnType {
      
        $option = null;
    
        while(is_null($option)) {
            foreach (TurnType::cases() as $turnType) {
                echo sprintf("%s - %s\n", $turnType->name, $turnType->value);
            }
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

    private function showTurns() {
        foreach($this->turns as $turn) echo $turn;        
    }

    //Call Turn

    //Erase Turn
}