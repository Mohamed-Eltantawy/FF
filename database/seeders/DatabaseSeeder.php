<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {




        $this->call([
            StartupSeeder::class,
            InvestorSeeder::class,
            Investment_roundsSeeder::class,
        ]);
        User::factory(10)->create();

        User::factory()->create([
            'id'=>'12345',
            'type'=>'startup',
            'founder_name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
