<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
$users = [ 
    [ 
        'username' => 'sysadmin01', 
        'fullname' => 'Adrian Valdez', 
        'role' => 'Administrator' 
    ], 
    [ 
        'username' => 'cashier02', 
        'fullname' => 'Clara Mendoza', 
        'role' => 'Cashier' 
    ], 
    [ 
        'username' => 'staff03', 
        'fullname' => 'Ethan Navarro', 
        'role' => 'Staff' 
    ], 
    [ 
        'username' => 'staff04', 
        'fullname' => 'Lia Montemayor', 
        'role' => 'Staff' 
    ], 
    [ 
        'username' => 'manager02', 
        'fullname' => 'Marcus Villareal', 
        'role' => 'Manager' 
    ] 
];

        return view('users', ['users' => $users]);
    }
}