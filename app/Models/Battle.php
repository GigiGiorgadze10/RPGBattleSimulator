<?php
// app/Models/Battle.php

namespace App\Models;

class Battle
{
    public function simulate(Character $char1, Character $char2)
    {
        echo "Starting battle between " . $char1->getName() . " and " . $char2->getName() . "!\n";

        while ($char1->isAlive() && $char2->isAlive()) {
            $char1->attack($char2);
            if ($char2->isAlive()) {
                $char2->attack($char1);
            }
            echo "\n";
        }

        if ($char1->isAlive()) {
            echo "Winner: " . $char1->getName() . "\n";
        } else {
            echo "Winner: " . $char2->getName() . "\n";
        }
    }
}
