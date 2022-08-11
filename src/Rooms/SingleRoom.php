<?php

namespace App\Rooms;
class SingleRoom extends Room
{
    public function getBedType(): string
    {
        return '1 Single Bed ';
    }
}