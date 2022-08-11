<?php

namespace App\Rooms;

class Room
{
    protected array $roomSettings;
    protected int $type;
    protected int $price;

    public function __construct(array $roomSettings, int $type, int $price)
    {
        $this->setRoomSettings($roomSettings);
        $this->type = $type;
        $this->price = $price;
    }

    /** generating setters and getters for class's attributes */

    protected function setRoomSettings(array $roomSettings): void
    {
        $this->roomSettings = $roomSettings;
    }

    public function getRoomSettings(): array
    {
        return $this->roomSettings;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

}