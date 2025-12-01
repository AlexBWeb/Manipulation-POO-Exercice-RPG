<?php

namespace Src\Races;

class Goatman extends Race
{
    public function __construct()
    {
        parent::__construct(
            "Goatman",
            "Moitié homme, moitié chèvre, c'est l'homme-chèvre",
            [
                'MAXHP' => 50,
                'MAXMP' => -50,
                'STR'   => 1,
                'END'   => 2,
                'MAG'   => -1,
                'SPI'   => -2,
                'DEX'   => 3,
                'CHA'   => 0
            ],
            "Equilibre",
        );
    }

    public function useSkill($self): string
    {
        return "{$this->getName()} active '{$this->getPassiveSkill()}' sur {$self->getName()} : +10 PV (exemple).";
    }
}
