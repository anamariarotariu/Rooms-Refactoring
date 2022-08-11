<?php

namespace App\Rooms;
class LargeRoom extends Room
{
    public function getBedType(): string
    {
        switch ($this->type):
            case 3:
                return '3 Single Bed';
            case 2:
                return '1 Double Bed 1 Single Bed';
            case 1:
                return '1 Triple Bed';
            default:
                return '2 Double Bed';

        endswitch;
    }
}