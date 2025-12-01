<?php

namespace Src\Jobs;

class Artificer extends Job
{
    public function __construct()
    {
        parent::__construct(
            'Artificier',
            "Maître des explosifs et des mécanismes complexes.",
            ['SummonHarpooner', 'TimeBomb', 'Fireworks'],
            ['Pistols', 'Maces', 'Daggers', 'crossbows']
        );
    }
}