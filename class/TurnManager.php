<?php

include('Turn.php');
include('TurnType.php');

class TurnManager {
    
    const TYPE_QUESTION = "Please, introduce type";
    
    private array $turns;

    public function __construct() {
        $this-> turns = [];
    }

    public function generateTurn() {
        $type = $this->askType();
        //$id = $this->generateId();
    }

    private function askType(): TurnOption {
        //TODO: Show Options and Validation!!
        return TurnType::tryFrom(readline(self::TYPE_QUESTION));
    }

    //Call Turn

    //Erase Turn
}