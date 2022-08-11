<?php

namespace App\Rooms;
class DoubleRoom extends Room
{
    public function getBedType(): string
    {
        if ($this->type == 1) {
            return '2 Single Bed';
        }
        return '1 Double Bed ';
    }
}