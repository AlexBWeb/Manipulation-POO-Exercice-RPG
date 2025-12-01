<?php

namespace Src\Weapons;

class Mace extends Weapon 
{
    public function __construct() {
        parent::__construct(
            "Massue en bois",
            "Un massue lourde en bois de chêne",
            "Mêlée",
            7,
            13,
            4.5,
            1
        );
    }
}