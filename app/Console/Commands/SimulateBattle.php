<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Warrior;
use App\Models\Mage;
use App\Models\Healer;
use App\Models\Battle;

class SimulateBattle extends Command
{
    protected $signature = 'simulate:battle';
    protected $description = 'Simulates a battle between characters';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $warrior = new Warrior('Aragorn', 100, 30);
        $mage = new Mage('Gandalf', 80, 25);
        $healer = new Healer('Elrond', 70, 20);

        $battle = new Battle();

        $battle->simulate($warrior, $mage);
        $battle->simulate($warrior, $healer); 
    }
}
