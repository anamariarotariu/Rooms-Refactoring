<?php

namespace App\Tourist;

use App\Rooms\DoubleRoom;
use App\Rooms\LargeRoom;
use App\Rooms\Room;
use App\Rooms\SingleRoom;

class Tourist
{
    private array $room;
    private string $firstName;
    private string $lastName;


    public function __construct(
        string $firstName,
        string $lastName,
        Room   ...$room)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->room = $room;
    }

    public function getRoom(): array
    {
        return $this->room;
    }

    public function setRoom(array $room): void
    {
        $this->room = $room;
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