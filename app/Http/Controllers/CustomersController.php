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
        $customer =new Customer();
        return view('customers.create' , compact('companies', 'customer'));
    }

    public  function store()
    {


        Customer::create($this->validateRequest());



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
        $customer->update($this->validateRequest());
        return redirect('customer/' .$customer->id);

    }
    private function validateRequest()
    {
        return request()->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email',
            'pho'=> 'required|min :10',

            'active'=> 'required',
            'company_id'=> 'required',
        ]);
    }
}
