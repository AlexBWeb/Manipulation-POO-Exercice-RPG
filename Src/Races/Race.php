<?php

namespace Src\Races;

use Src\Interfaces\RaceInterface;

abstract class Race implements RaceInterface
{
    private string $name;
    private string $description;
    private array  $bonusStats;
    private string $passiveSkill;

    public function __construct(string $name, string $description, array $bonusStats = [], string $passiveSkill ='')
    {
        $this->name = $name;
        $this->description = $description;
        $this->bonusStats = $bonusStats;
        $this->passiveSkill = $passiveSkill;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getBonusStats(): array
    {
        return $this->bonusStats;
    }

    public function getPassiveSkill(): string
    {
        return $this->passiveSkill;
    }
    public function useSkill(object $self): string
    {
        $nom = $this->getPassiveSkill();
        return "{$this->getName()} utilise sa capacité raciale '{$nom}' sur {$self->getName()}.";
    }
}
