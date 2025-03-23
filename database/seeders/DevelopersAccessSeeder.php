<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DevelopersAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = $this->users();

        foreach ($users as $user) {
            // Using updateOrCreate to avoid duplication
            User::updateOrCreate(
                ['email' => $user['email']],  // Condition for finding the user (unique by email)
                [
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'password' => $user['password'],
                ]
            );
            $this->command->info('User created/updated: ' . $user['name']);
        }
    }

    /**
     * Get the user data.
     *
     * @return array
     */
    public function users(): array
    {
        return [
            [
                'name' => 'Santhosh R',
                'email' => 'test@gmail.com',
                'password' => Hash::make('password'),
            ],
        ];
    }
}
