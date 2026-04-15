<?php


class Turn {

    public function __construct(public int $order, public TurnType $type){}
    public function __toString() {
        $formatted_order = sprintf("%03d", $this->order);
        return $this->type->name.$formatted_order;
    }

}