<?php

namespace App;

use App\Rooms\DoubleRoom;
use App\Rooms\LargeRoom;
use App\Rooms\SingleRoom;

class HotelManager
{
    protected LargeRoom $largeRoom;
    protected SingleRoom $singleRoom;
    protected DoubleRoom $doubleRoom;

}