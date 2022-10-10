<?php

class Car 
{
    private int $nbrWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbrSeats;
    private string $typeEnergy;
    private int $levelEnergy;


    public function __construct(string $color, int $nbrSeats, string $typeEnergy)
    {
        $this->color = $color;
        $this->nbrSeats = $nbrSeats;
        $this->typeEnergy = $typeEnergy;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
    
        return "Go !";
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
  
    public function setNbWheels(int $nbrWheels): void
    {
        $this->nbrWheels = $nbrWheels;
    }

    public function getNbWheels()
    {
        return $this->nbrWheels;
    }

   
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    
    public function getNbSeats()
    {
        return $this->nbrSeats;
    }

    public function setSeats(string $nbrSeats): void
    {
        $this->nbrSeats = $nbrSeats;
    }

    
    public function getTypeEnergy()
    {
        return $this->typeEnergy;
    }

    public function getLevelEnergy()
    {
        return $this->levelEnergy;
    }

}