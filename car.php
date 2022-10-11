<?php



require_once 'vehicule.php';

class Car extends Vehicle
{
    private string $energy;

    private int $energyLevel;


    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car

    {
    
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
    
            $this->setEnergy($energy);
    
        }
    
        return $this;
    
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
