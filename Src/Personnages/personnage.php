<?php
// src/Personnage.php
namespace Src;

use Src\Interfaces\JobInterface;
use Src\Interfaces\SkillInterface;
use Src\Interfaces\RaceInterface;
use Src\Interfaces\WeaponInterface;
use Src\Races\Goatman;

class Personnage
{
    private string $name;
    private RaceInterface $race;
    private JobInterface $job;
    private ?WeaponInterface $equippedWeapon = null;
    private array $skills = [];
    private int $level = 1;
    private int $exp = 0;
    private int $maxHp;
    private int $currentHp;
    private int $maxMp;
    private int $currentMp;
    private array $baseStats;

    public function __construct(string $name, RaceInterface $race, JobInterface $job, array $baseStats = [])
    {
        $this->name = $name;
        $this->race = $race;
        $this->job = $job;

        $defaults = [
            'MAXHP' => 1000,
            'MAXMP' => 300,
            'STR' => 10,
            'END' => 10,
            'MAG' => 10,
            'SPI' => 10,
            'DEX' => 10,
            'CHA' => 10,
        ];

        $this->baseStats = [...$baseStats, ...$defaults];


        foreach ($this->race->getBonusStats() as $key => $value) {
            if (array_key_exists($key, $this->baseStats)) {
                $this->baseStats[$key] += $value;
            } else {
                $this->baseStats[$key] = $value;
            }
        }

        $this->maxHp = $this->baseStats['MAXHP'];
        $this->currentHp = $this->maxHp;
        $this->maxMp = $this->baseStats['MAXMP'];
        $this->currentMp = $this->maxMp;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getRace(): RaceInterface
    {
        return $this->race;
    }
    public function getJob(): JobInterface
    {
        return $this->job;
    }
    public function getLevel(): int
    {
        return $this->level;
    }
    public function getExp(): int
    {
        return $this->exp;
    }
    public function getStats(): array
    {
        return $this->baseStats;
    }
    public function getCurrentHp(): int
    {
        return $this->currentHp;
    }
    public function getCurrentMp(): int
    {
        return $this->currentMp;
    }
    public function getEquippedWeapon(): ?WeaponInterface
    {
        return $this->equippedWeapon;
    }
    public function getSkills(): array
    {
        return $this->skills;
    }
}