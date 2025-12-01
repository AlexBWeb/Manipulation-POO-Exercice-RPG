<?php

namespace Src\Weapons;

class Bow extends Weapon 
{
    public function __construct() {
        parent::__construct(
            "Arc court",
            "Un arc court des plus basiques",
            "Distance",
            8,
            12,
            5.6,
            1
        );
    }
}