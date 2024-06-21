<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Startup;

class StartupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Startup::create([
            'id' => '12345',
            'founder' =>'John Wick',
            'description' => 'A tech startup focused on AI solutions.',
            'website' => 'https://techstartup.com',
            'founded_at' => '2022-01-01',
        ]);
    }
}
