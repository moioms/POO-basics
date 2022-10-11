<?php

class Car
{
    private int $nbWheels;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;

    private bool $start = false;

    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyType = $energyType;
    }

    public function startCar(): bool
    {
        return $this->start = true;
    }

    public function forward(): string
    {
        if ($this->start === false) {
            return "You have to start the car to move forward!!!";
        } else {
            $this->currentSpeed = 35;

            return "Go !";
        }
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}
