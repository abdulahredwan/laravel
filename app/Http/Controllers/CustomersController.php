<?php

namespace App\Http\Controllers;

use App\Events\NewCustomerHasRegisteredEvent;
use App\Mail\WelcomeNewUserMail;
use App\Models\Company;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this ->middleware('auth')->except('index');
    }

    Public function index()
    {
        $customers =Customer::with('company')->paginate(3);

        return view('customers.index', compact('customers'));






    }
    public function create(){
        $companies = Company::all();
        $customer =new Customer();
        return view('customers.create' , compact('companies', 'customer'));
    }

    public  function store()
    {

         $this->authorize('create', Customer::class);
       $customer = Customer::create($this->validateRequest());
       $this->storeImage($customer);
       event(new NewCustomerHasRegisteredEvent($customer));




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

        $this->storeImage($customer);

        return redirect('customer/' .$customer->id);

    }
    public function destroy(Customer $customer)
    {
        $this->authorize('delete', $customer);
     $customer->delete();

     return redirect('customer');

    }
    private function validateRequest()
    {

        return tap(request()->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email',
            'pho'=> 'required|min :10',

            'active'=> 'required',
            'company_id'=> 'required',

        ]), function (){

            if (request()->hasFile('image')){
                request()->validate([
                    'image'=>'file|image|max:50000',
                ]);
            }

        });


    }

    private function storeImage($customer)
    {
        if (request()->has('image')){
            $customer->update([
                'image'=>request()->image->store('uploads' ,'public')
            ]);
        }
    }
}
