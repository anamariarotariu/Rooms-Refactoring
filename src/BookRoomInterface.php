<?php

namespace App;

use App\Rooms\Room;

interface BookRoomInterface
{
    public function bookRoom(Room $room): void;
}