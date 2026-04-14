<?php


class Turn {

    public function __construct(public int $order, public TurnType $type){}
    public function __toString() {
        return $this->type->name.$this->order.PHP_EOL;
    }

}