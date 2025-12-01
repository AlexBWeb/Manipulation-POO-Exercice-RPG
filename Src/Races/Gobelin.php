<?php

namespace Src\Races;

class Gobelin extends Race
{
    public function __construct()
    {
        parent::__construct(
            "Gobelin",
            "Petit être vert à nez crochu, avare et hargneux",
            [
                'MAXHP' => -50,
                'MAXMP' => 0,
                'STR' => -1,
                'END' => -1,
                'MAG' => 2,
                'SPI' => -1,
                'DEX' => 3,
                'CHA' => 2
            ],
            "Disparition",
        );
    }

    public function useSkill($self): string
    {
        return "Le Gobelin utilise "
            . $this->getPassiveSkill()
            . " sur "
            . (string) $self
            . ".";
    }
}
