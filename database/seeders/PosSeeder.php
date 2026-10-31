<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email'     => 'juan@example.com',
                'phone'     => '09171234567',
            ],
            [
                'full_name' => 'Maria Santos',
                'email'     => 'maria@example.com',
                'phone'     => '09181234567',
            ],
            [
                'full_name' => 'Pedro Reyes',
                'email'     => 'pedro@example.com',
                'phone'     => '09191234567',
            ],
            [
                'full_name' => 'Ana Garcia',
                'email'     => 'ana@example.com',
                'phone'     => '09201234567',
            ],
            [
                'full_name' => 'Carlo Mendoza',
                'email'     => 'carlo@example.com',
                'phone'     => '09211234567',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }

        $users = [
            [
                'username'  => 'admin',
                'full_name' => 'System Administrator',
            ],
            [
                'username'  => 'jdelacruz',
                'full_name' => 'Juan Dela Cruz',
            ],
            [
                'username'  => 'msantos',
                'full_name' => 'Maria Santos',
            ],
            [
                'username'  => 'preyes',
                'full_name' => 'Pedro Reyes',
            ],
            [
                'username'  => 'agarcia',
                'full_name' => 'Ana Garcia',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}