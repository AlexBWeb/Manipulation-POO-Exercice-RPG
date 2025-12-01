<?php

namespace Src\Interfaces;

interface RaceInterface 
{
    public function getName(): string;
    public function getDescription(): string;
    public function getBonusStats(): array;
    public function getPassiveSkill(): string;
    public function useSkill(object $self): string;
}
