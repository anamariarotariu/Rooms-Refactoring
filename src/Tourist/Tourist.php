<?php

namespace App\Tourist;

use App\Rooms\DoubleRoom;
use App\Rooms\LargeRoom;
use App\Rooms\SingleRoom;

class Tourist
{
    private LargeRoom $largeRoom;
    private SingleRoom $singleRoom;
    private DoubleRoom $doubleRoom;
    private string $firstName;
    private string $lastName;


    public function __construct(LargeRoom  $largeRoom,
                                SingleRoom $singleRoom,
                                DoubleRoom $doubleRoom,
                                string     $firstName,
                                string     $lastName)
    {
        $this->largeRoom = $largeRoom;
        $this->singleRoom = $singleRoom;
        $this->doubleRoom = $doubleRoom;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getLargeRoom(): LargeRoom
    {
        return $this->largeRoom;
    }

    public function setLargeRoom(LargeRoom $largeRoom): void
    {
        $this->largeRoom = $largeRoom;
    }

    public function getSingleRoom(): SingleRoom
    {
        return $this->singleRoom;
    }

    public function setSingleRoom(SingleRoom $singleRoom): void
    {
        $this->singleRoom = $singleRoom;
    }

    public function getDoubleRoom(): DoubleRoom
    {
        return $this->doubleRoom;
    }

    public function setDoubleRoom(DoubleRoom $doubleRoom): void
    {
        $this->doubleRoom = $doubleRoom;
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