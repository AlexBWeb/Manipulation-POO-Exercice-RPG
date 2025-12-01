<?php

namespace Src\Jobs;

class Sorcerer extends Job
{
    public function __construct()
    {
        parent::__construct(
            'Sorcier',
            "Utilisateur de magie ancienne et de sortilèges.",
            ['FireBall', 'TimeWrap', 'IceCoffin'],
            ['Staves', 'Maces', 'Daggers']
        );
    }
}