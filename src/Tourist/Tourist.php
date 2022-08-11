<?php

namespace App\Tourist;

use App\BookRoomInterface;
use App\Rooms\Room;
use Exception;

class Tourist implements BookRoomInterface
{
    private string $firstName;
    private string $lastName;


    public function __construct(
        string $firstName,
        string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @throws Exception
     */
    public function bookRoom(Room $room): bool
    {
        if ($room->isBooked())
            throw new Exception("Room is already booked.");
        else {
            $room->setIsBooked(true);
            echo "Room with number " . $room->getRoomSettings()[1]
                . " booked successfully by "
                . $this->getFirstName() . " and the room has "
                . $room->getBedType()
                . ".\n";
            return true;
        }
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }
}