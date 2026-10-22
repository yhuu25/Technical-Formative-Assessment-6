<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin01',
                'full_name' => 'Admin User',
                'role' => 'Administrator',
            ],
            [
                'id' => 2,
                'username' => 'cashier01',
                'full_name' => 'Paolo Reyes',
                'role' => 'Cashier',
            ],
            [
                'id' => 3,
                'username' => 'cashier02',
                'full_name' => 'David Cruz',
                'role' => 'Cashier',
            ],
            [
                'id' => 4,
                'username' => 'manager01',
                'full_name' => 'Maria Santos',
                'role' => 'Manager',
            ],
            [
                'id' => 5,
                'username' => 'staff01',
                'full_name' => 'Angela Garcia',
                'role' => 'Staff',
            ],
        ];

        return view('users', compact('users'));
    }
}