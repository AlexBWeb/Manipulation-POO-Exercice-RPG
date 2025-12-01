<?php

namespace Src\Weapons;

use Src\Interfaces\WeaponInterface;

abstract class Weapon implements WeaponInterface
{
    private string $name;
    private string $description;
    private string $type;
    private int $minDamages;
    private int $maxDamages;
    private float $cooldown;
    private float $requiredLevel;

    
    public function __construct(string $name, string $description, string $type, int $minDamages, int $maxDamages, float $cooldown, int $requiredLevel)
    {
        $this->name = $name;
        $this->description = $description;
        $this->type = $type;
        $this->minDamages = $minDamages;
        $this->maxDamages = $maxDamages;
        $this->cooldown = $cooldown;
        $this->requiredLevel = $requiredLevel;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getDescription(): string
    {
        return $this->description;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getMinDamages(): int
    {
        return $this->minDamages;
    }

    public function getMaxDamages(): int
    {
        return $this->maxDamages;
    }

    public function getCooldown(): float
    {
        return $this->cooldown;
    }

    public function getRequiredLevel():int
    {
        return $this->requiredLevel;
    }
    public function useWeapon(object $target): string
    {
        $damages = rand($this->minDamages, $this->maxDamages);
        return "{$this->name} attaque {$target->getName()} et inflige {$damages} dégâts.";
    }
}