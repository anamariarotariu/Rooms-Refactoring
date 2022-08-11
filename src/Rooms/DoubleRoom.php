<?php

namespace App\Rooms;

use App\BedTypeInterface;

class DoubleRoom extends Room implements BedTypeInterface
{
    public function getBedType(): string
    {
        if ($this->type == 1) {
            return '2 Single Bed';
        }
        return '1 Double Bed ';
    }
}