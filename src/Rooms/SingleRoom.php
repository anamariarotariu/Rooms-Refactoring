<?php

namespace App\Rooms;

use App\BedTypeInterface;

class SingleRoom extends Room implements BedTypeInterface
{
    public function getBedType(): string
    {
        return '1 Single Bed ';
    }
}