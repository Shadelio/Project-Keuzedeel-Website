<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SlbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create SLB user
        User::updateOrCreate(
            ['email' => 'slb@keuzedeel.nl'],
            [
                'name' => 'SLB Begeleider',
                'password' => Hash::make('slb123'),
                'role' => 'slb',
                'is_active' => true,
            ]
        );

        $this->command->info('SLB account created:');
        $this->command->info('Email: slb@keuzedeel.nl');
        $this->command->info('Password: slb123');
    }
}
