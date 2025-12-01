<?php

namespace Src\Interfaces;
interface JobInterface {
public function getName(): string;
public function getDescription(): string;
public function getAllowedWeapons(): array;
public function getAllowedSkills(): array;
}