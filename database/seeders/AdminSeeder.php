<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::updateOrCreate(
            ['email' => 'admin@keuzedeel.nl'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'is_active' => true,
            ]
        );

        // Create test student user
        User::updateOrCreate(
            ['email' => 'student@test.nl'],
            [
                'name' => 'Test Student',
                'password' => Hash::make('student123'),
                'role' => 'student',
                'is_active' => true,
            ]
        );

        $this->command->info('Admin account created:');
        $this->command->info('Email: admin@keuzedeel.nl');
        $this->command->info('Password: admin123');
        $this->command->info('');
        $this->command->info('Test student account created:');
        $this->command->info('Email: student@test.nl');
        $this->command->info('Password: student123');
    }
}
