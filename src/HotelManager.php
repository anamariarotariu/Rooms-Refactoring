<?php

namespace App;

use App\Rooms\DoubleRoom;
use App\Rooms\LargeRoom;
use App\Rooms\Room;
use App\Rooms\SingleRoom;
use App\Tourist\Tourist;
use Exception;

class HotelManager
{
    protected array $room;
    protected Tourist $tourist;

    public function __construct(Tourist $tourist, Room ...$room)
    {

        $this->tourist = $tourist;
        $this->room = $room;
    }

    /**
     * @throws Exception
     */
    public function manage(Room $room): string
    {
        echo count($this->room) . "\n";
        foreach ($this->room as $roomIndex) {
            if ($room->getRoomSettings()[1] == $this->room[$roomIndex]->getRoomSettings()[1])
                throw new Exception('Room already booked.');
        }
        return sprintf("Tourist %s %s booked the room no %d which has %s.\n",
            $this->tourist->getFirstName(),
            $this->tourist->getLastName(),
            $room->getRoomSettings()[1],
            $room->getBedType());
    }

}