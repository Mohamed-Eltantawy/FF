<?php

namespace Database\Seeders;

use App\Models\Investment_rounds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Startup;
use App\Models\Investor;

class Investment_roundsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $startup1 = Startup::first();
        $investor1 = Investor::first();

        if ($startup1 && $investor1) {
            Investment_rounds::create([
                'startup_id' => $startup1->id,
                'investor_id' => $investor1->id,
                'amount' => 50000.00
            ]);
        }

        $startup2 = Startup::skip(1)->first();
        $investor2 = Investor::skip(1)->first();

        if ($startup2 && $investor2) {
            Investment_rounds::create([
                'startup_id' => $startup2->id,
                'investor_id' => $investor2->id,
                'amount' => 75000.00
            ]);
        }
    }
}
