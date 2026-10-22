<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '09171234567',
            ],
            [
                'id' => 2,
                'full_name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09181234567',
            ],
            [
                'id' => 3,
                'full_name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'phone' => '09191234567',
            ],
            [
                'id' => 4,
                'full_name' => 'Angela Garcia',
                'email' => 'angela@example.com',
                'phone' => '09201234567',
            ],
            [
                'id' => 5,
                'full_name' => 'Carlo Mendoza',
                'email' => 'carlo@example.com',
                'phone' => '09211234567',
            ],
        ];

        return view('customers', compact('customers'));
    }
}