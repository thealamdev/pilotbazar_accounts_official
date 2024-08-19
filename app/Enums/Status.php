<?php

namespace App\Enums;

enum Status
{
    case ACTIVE;
    case INACTIVE;

    public function toString(): string
    {
        return match ($this) {
            self::ACTIVE => '1',
            self::INACTIVE => '0',
        };
    }
}
