<?php

namespace App\Controllers;

use App\Models\CustomerModel;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function customers()
{
    $customerModel = new CustomerModel();

    $data['customers'] = $customerModel->findAll();

    return view('customers', $data);
}
}
