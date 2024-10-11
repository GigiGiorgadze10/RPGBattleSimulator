<?php

namespace App\Models;

class Warrior extends Character
{
    public function attack(Character $opponent)
    {
        // Generate random damage within a range
        $damage = rand(20, 40);

        // Ensure getName() and other variables return valid values
        echo "{$this->getName()} (Warrior) strikes {$opponent->getName()} with a sword! Dealing {$damage} damage.\n";
        
        // Apply damage to opponent
        $opponent->takeDamage($damage);
    }
}
