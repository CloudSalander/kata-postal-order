<?php

enum TurnType: string {
    case C = 'Previous Appointment';
    case E = 'Shipping';
    case R = 'Collection';
    case O = 'Other Prodecures';
    case I = 'Information';

    
    public static function fromString(string $option): ?self {
        return match($option) {
            'C' => self::C,
            'E' => self::E,
            'R' => self::R,
            'O' => self::O,
            'I' => self::I,
            default => null
        };
    }
}