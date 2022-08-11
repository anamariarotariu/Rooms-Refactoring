<?php

namespace App\Rooms;
abstract class Room
{
    protected array $roomSettings;
    protected int $type;
    protected int $price;
    protected bool $isBooked;

    public function __construct(array $roomSettings, int $type, int $price, bool $isBooked)
    {
        $this->setRoomSettings($roomSettings);
        $this->type = $type;
        $this->price = $price;
        $this->isBooked = $isBooked;
    }

    abstract public function getBedType(): string;

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

    public function isBooked(): bool
    {
        return $this->isBooked;
    }

    public function setIsBooked(bool $isBooked): void
    {
        $this->isBooked = $isBooked;
    }


}