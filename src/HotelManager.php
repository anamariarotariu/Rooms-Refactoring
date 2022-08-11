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
    protected LargeRoom $largeRoom;
    protected SingleRoom $singleRoom;
    protected DoubleRoom $doubleRoom;
    protected Tourist $tourist;

    public function __construct(LargeRoom $largeRoom, SingleRoom $singleRoom, DoubleRoom $doubleRoom, Tourist $tourist)
    {
        $this->largeRoom = $largeRoom;
        $this->singleRoom = $singleRoom;
        $this->doubleRoom = $doubleRoom;
        $this->tourist = $tourist;
    }

    /**
     * @throws Exception
     */
    public function manage(Room $room): string
    {
        if ($room->getRoomSettings()[1] == $this->largeRoom->getRoomSettings()[1]
            || $room->getRoomSettings()[1] == $this->singleRoom->getRoomSettings()[1]
            || $room->getRoomSettings()[1] == $this->doubleRoom->getRoomSettings()[1]) {
            throw new Exception('Room already booked.');
        } else {
            return sprintf("Tourist %s %s booked the room no %d which has %s.\n",
                $this->tourist->getFirstName(),
                $this->tourist->getLastName(),
                $room->getRoomSettings()[1],
                $room->getBedType());
        }
    }
}