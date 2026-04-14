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
        //$id = $this->generateId();
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

    //Call Turn

    //Erase Turn
}