<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Investor;

class InvestorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Investor::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '1234567890',
            'company' => 'Doe Investments'
        ]);

        Investor::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'phone' => '0987654321',
            'company' => 'Smith Ventures'
        ]);

    }
}
