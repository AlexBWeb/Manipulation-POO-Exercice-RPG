<?php
namespace Src\Skills;

class SummonHarpooner extends Skills {
    public function __construct() {
        parent::__construct("Invocation de l'harponneuse","Inflige des dégâts à chaque fois que l'utilisateur attaque",'Invocation', 70, 10,55.4);
    }

    public function useSpell($target): string {
        return $this->getName(). "utilisé sur" .$target->getName(). ": -3HP après chaque attaque";
    }
}
