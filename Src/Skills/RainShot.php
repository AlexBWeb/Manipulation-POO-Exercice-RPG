<?php
namespace Src\Skills;

class RainShot extends Skills {
    public function __construct() {
        parent::__construct('Pluie de flêches','Inflige plusieurs fois des dégâts à une cible','Compétence de dégâts', 35, 2,19.4);
    }

    public function useSpell($target): string {
        // $cible peut être un Personnage -> on fait simple : string résultat
        return $this->getName(). "utilisé sur" .$target->getName(). ": -14 * 5HP";
    }
}