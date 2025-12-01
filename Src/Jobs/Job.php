<?php

namespace Src\Jobs;

use Src\Interfaces\JobInterface;

abstract class Job implements JobInterface
{
    private string $name;
    private string $description;
    private array $allowedWeapons;
    private array $allowedSkills;


    public function __construct(
        string $name,
        string $description,
        array $allowedSkills = [],
        array $allowedWeapons = []
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->allowedSkills = $allowedSkills;
        $this->allowedWeapons = $allowedWeapons;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getDescription(): string
    {
        return $this->description;
    }


    public function getAllowedSkills(): array
    {
        return $this->allowedSkills;
    }


    public function getAllowedWeapons(): array
    {
        return $this->allowedWeapons;
    }
}