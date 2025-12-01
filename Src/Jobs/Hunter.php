<?php

namespace Src\Jobs;

class Hunter extends Job
{
    public function __construct()
    {
        parent::__construct(
            'Chasseur',
            "Expert en traque et en précision à distance.",
            ['RainShot', 'SummonBeast', 'Aiming'],
            ['Bows', 'Crossbows', 'Daggers']
        );
    }
}