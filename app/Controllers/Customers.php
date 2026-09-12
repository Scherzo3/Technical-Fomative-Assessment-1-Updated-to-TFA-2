<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
$customers = [ 
    [ 
        'name' => 'Elijah Navarro', 
        'email' => 'elijah.navarro@example.com', 
        'phone' => '09171234567' 
    ], 
    [ 
        'name' => 'Sofia Marquez', 
        'email' => 'sofia.marquez@example.com', 
        'phone' => '09181234567' 
    ], 
    [ 
        'name' => 'Caleb Villanueva', 
        'email' => 'caleb.villanueva@example.com', 
        'phone' => '09191234567' 
    ], 
    [ 
        'name' => 'Bianca Salazar', 
        'email' => 'bianca.salazar@example.com', 
        'phone' => '09201234567' 
    ], 
    [ 
        'name' => 'Nathaniel Mercado', 
        'email' => 'nathaniel.mercado@example.com', 
        'phone' => '09211234567' 
    ] 
];

        return view('customers', ['customers' => $customers]);
    }
}