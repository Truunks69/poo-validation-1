<?php

namespace classes;

class Druid extends Character {

    function __construct(string $name) {
        parent::__construct($name);
    }
    
    public function attack(Character $target) {
        $rand = rand(1, 10);
        if ($rand <= 8) {
            return $this->attack2($target);
        } else if ($rand > 8) {
            return $this->booster();
        }
    }
    
    private function attack2(Character $target) {
        $attack = rand(5, 15);
        var_dump($this->booster);
        if ($this->booster) {
            $rand = rand(17, 30);
            $rand /= 10;
            $attack *= $rand;
            $this->booster = False;
        }
        $target->setlifePoints($attack);
        $results = "{$this->name} attaque {$target->name}! Il reste {$target->getLifePoints()} points de vie à {$target->name} !";
        return $results;
    }

    private function booster() {
        $this->booster = True;
        $results = "{$this->name} se concentre pour taper plus fort!";
        return $results;
    }

}