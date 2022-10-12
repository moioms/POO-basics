<?php
require_once "Vehicle.php";

class Truck extends Vehicle
{
    public const MAX_CAPACITY = 100;

    private int $storage;
    private int $loading = 0;

    public function __construct(
        int $storage,
        string $color,
        int $nbSeats,
        string $energy

    ) {
        $this->storage = $storage;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getStorage(): int
    {
        return $this->storage;
    }

    public function setStorage(int $storage)
    {
        $this->storage = $storage;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading)
    {
        $this->loading = $loading;
    }

    public function availablity(int $loading, int $storage): string
    {
        $capacity = ($storage + $loading);
        if ($capacity >= self::MAX_CAPACITY) {
            return "Truck is full !!!";
        } else {
            return "Truck in filling";
        }
    }
}
