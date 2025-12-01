<?php

namespace Src\Weapons;

class Pistol extends Weapon 
{
    public function __construct() {
        parent::__construct(
            "Pistolet d'appoint",
            "Un pistolet artisanal, qui manque de précision",
            "Distance",
            3,
            8,
            1.8,
            1
        );
    }
}