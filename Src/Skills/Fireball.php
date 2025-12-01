<?php
namespace Src\Skills;

class Fireball extends Skills {
    public function __construct() {
        parent::__construct('Boule de feu','Inflige de lourds dégâts','Compétences de dégâts', 40, 4,25.5);
    }

    public function useSpell($target): string {
        return "{$this->getName()} est lancé sur {$target->getName()} : -80 HP (exemple).";
    }
}
