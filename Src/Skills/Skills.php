<?php

namespace Src\Skills;

use Src\Interfaces\SkillInterface;

abstract class Skills implements SkillInterface
{
    private string $name;
    private string $description;
    private string $type;
    private int $manaCost;
    private int $requiredLevel;
    private float $cooldown;

    public function __construct(string $name, string $description, string $type, int $manaCost, int $requiredLevel, float $cooldown)
    {
        $this->name = $name;
        $this->description = $description;
        $this->type = $type;
        $this->manaCost = $manaCost;
        $this->requiredLevel = $requiredLevel;
        $this->cooldown = $cooldown;
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

    public function getManaCost(): int
    {
        return $this->manaCost;
    }

    public function getRequiredLevel(): int
    {
        return $this->requiredLevel;
    }

    public function getCooldown(): float
    {
        return $this->cooldown;
    }

    abstract public function useSpell(object $target): string;
}