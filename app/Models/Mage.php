<?php

namespace App\Models;

class Mage extends Character
{
    public function attack(Character $opponent)
    {
        $damage = rand(25, 45);
        echo "{$this->getName()} (Mage) casts a fireball at {$opponent->getName()}! Dealing {$damage} damage.\n";
        $opponent->takeDamage($damage);
    }
}
