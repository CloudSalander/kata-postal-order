<?php

enum TurnType: string {
    case C = 'Previous Appointment';
    case E = 'Shipping';
    case R = 'Collection';
    case O = 'Other Prodecures';
    case I = 'Information';
}

class Turn {

    public function __construct(private int $id, private TurnType $turn){}

}