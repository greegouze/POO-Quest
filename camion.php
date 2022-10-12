<?php

require_once 'vehicule.php';

class Truck extends Vehicle
{
    protected int $capacity;

    protected int $loading = 0;

    protected string $energy;

    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    public function __construct(string $color, int $nbrSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbrSeats);
        $this->capacity = $capacity;
        $this->energy = $energy;
    }

    // Capacity Function
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    // Loading function
    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function getLoading()
    {
        return $this->loading;
    }

    public function full(int $loading)
    {
        $sentence = 'In filling';

        if($this->capacity === $loading){
            $sentence = 'Full !';
        }

        return $sentence;
    }
}
