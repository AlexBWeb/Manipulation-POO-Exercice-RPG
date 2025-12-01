<?php

namespace Src\Interfaces;

interface SkillInterface 
{
    public function getName():string;
    public function getDescription():string;
    public function getType():string;
    public function getManaCost():int;
    public function getRequiredLevel():int;
    public function getCooldown():float;
    public function useSpell(object $target): string;
}