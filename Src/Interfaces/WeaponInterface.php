<?php 

namespace Src\Interfaces;

interface WeaponInterface 
{
    public function getName():string;
    public function getDescription():string;
    public function getType():string;
    public function getMinDamages():int;
    public function getMaxDamages():int;
    public function getCooldown():float;
    public function getRequiredLevel():int;
    public function useWeapon(object $target): string;
}