<?php

namespace App\Models;

class Healer extends Character
{
    public function attack(Character $opponent)
    {
        // The Healer can either heal itself or attack an opponent
        if (rand(0, 1) === 0) {
            // Healer chooses to heal
            $healing = rand(15, 25); // Random healing amount
            $this->health += $healing;

            echo "{$this->getName()} (Healer) heals itself for {$healing} health. Current health: {$this->getHealth()}.\n";
        } else {
            // Healer chooses to attack
            $damage = rand(5, 15); // Healer does less damage
            echo "{$this->getName()} (Healer) strikes {$opponent->getName()} with a light attack! Dealing {$damage} damage.\n";
            $opponent->takeDamage($damage);
        }
    }
}
