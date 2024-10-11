<?php

namespace App\Models;

class Warrior extends Character
{
    public function attack(Character $opponent)
    {
        $damage = rand(20, 40);

        echo "{$this->getName()} (Warrior) strikes {$opponent->getName()} with a sword! Dealing {$damage} damage.\n";

        $opponent->takeDamage($damage);
    }
}
