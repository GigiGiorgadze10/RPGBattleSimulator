<?php

namespace App\Models;

class Healer extends Character
{
    public function attack(Character $opponent)
    {
        if (rand(0, 1) === 0) {
            $healing = rand(15, 25); 
            $this->health += $healing;

            echo "{$this->getName()} (Healer) heals itself for {$healing} health. Current health: {$this->getHealth()}.\n";
        } else {
            $damage = rand(5, 15);
            echo "{$this->getName()} (Healer) strikes {$opponent->getName()} with a light attack! Dealing {$damage} damage.\n";
            $opponent->takeDamage($damage);
        }
    }
}
