<?php

// app/Models/Mage.php

namespace App\Models;

class Mage extends Character
{
    public function attack(Character $opponent)
    {
        // Generate random damage within a range, e.g., 25 to 45
        $damage = rand(25, 45);
        echo "{$this->getName()} (Mage) casts a fireball at {$opponent->getName()}! Dealing {$damage} damage.\n";
        $opponent->takeDamage($damage);
    }
}
