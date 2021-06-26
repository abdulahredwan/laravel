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
    public function show(Customer $customer)
    {
      return view('customers.show', compact('customer'));
    }
    public function edit(Customer $customer)
    {
        $companies = Company::all();
      return view('customers.edit', compact('customer' , 'companies'));
    }
    public function update(Customer $customer)
    {
        $data = request()->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email',
          ]);
        $customer->update($data);
        return redirect('customer/' .$customer->id);

    }
}
