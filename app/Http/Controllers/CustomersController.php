<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;

class CustomersController extends Controller
{
 Public function list()
{

    $activeCustomers =Customer::active()->get();
    $inactiveCustomers =Customer::inactive()->get();
    $companies = Company::all();




  return view('layouts.customers', compact('activeCustomers', 'inactiveCustomers', 'companies'));
}

public  function store()
{
    $data = request()->validate([
        'name'=> 'required|min:3',
        'email'=> 'required|email',
        'active'=> 'required',
//        'random'=> '',

    ]);

   Customer::create($data);



    return back();
}
}
