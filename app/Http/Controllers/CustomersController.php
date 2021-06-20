<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\RedirectResponse;

class CustomersController extends Controller
{
 Public function list()
{
      
    $activeCustomers =Customer::where('active', 1)->get();
    $inactiveCustomers =Customer::where('active', 0)->get();




  return view('layouts.customers', [
      'activeCustomer'=>$activeCustomers,
      'inactiveCustomer'=>$inactiveCustomers,
  ]);
}
public  function store()
{ 
    $data = request()->validate([
        'name'=> 'required|min:3',
        'email'=> 'required|email',
        'active'=> 'required',

    ]);
     
    $customer =new Customer();
    $customer->name =request('name');
    $customer->email =request('email');
    $customer->active =request('active');

    $customer->save();
 
    return back();
}
}
