<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin1',
                'fullname' => 'John Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'fullname' => 'Jane Smith',
                'role' => 'Cashier'
            ],
            [
                'username' => 'staff1',
                'fullname' => 'Peter Cruz',
                'role' => 'Staff'
            ],
            [
                'username' => 'staff2',
                'fullname' => 'Mary Reyes',
                'role' => 'Staff'
            ],
            [
                'username' => 'manager1',
                'fullname' => 'Robert Garcia',
                'role' => 'Manager'
            ]
        ];

        return view('users', ['users' => $users]);
    }
}