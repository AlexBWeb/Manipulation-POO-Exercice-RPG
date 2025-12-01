<?php

namespace Src\Races;

class SeaUrchin extends Race
{
    public function __construct()
    {
        parent::__construct(
            "Homme Oursin",
            "Moitié homme, moitié oursin, c'est l'homme-oursin",
            [
                'MAXHP' => -50,
                'MAXMP' => 100,
                'STR' => -2,
                'END' => 2,
                'MAG' => 3,
                'SPI' => 4,
                'DEX' => -3,
                'CHA' => -2
            ],
            "Exosquelette Épineux",
        );
    }

    public function useSkill($self): string
    {
        return "L'homme-oursin utilise "
            . $this->getpassiveSkill()
            . " sur "
            . (string) $self
            . ".";
    }
}

