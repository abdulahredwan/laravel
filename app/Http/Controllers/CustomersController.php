<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;

class CustomersController extends Controller
{
 Public function index()
{
    $customers =Customer::all();

   return view('customers.index', compact('customers'));





  return view('customers.index', compact('activeCustomers', 'inactiveCustomers'));
}
public function create(){
    $companies = Company::all();
  return view('customers.create' , compact('companies'));
}

public  function store()
{
    $data = request()->validate([
        'name'=> 'required|min:3',
        'email'=> 'required|email',
        'active'=> 'required',
        'company_id'=> 'required',
//        'random'=> '',

    ]);

   Customer::create($data);



   return redirect('customer');
}
}
