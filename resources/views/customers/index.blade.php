@extends('layout')

@section('title' , 'CUSTOMER LIST')



@section('content')
<div class="row">
    <div class="col-12"><h1>Customers Register</h1></div>
    <p><a href="customers/create">Add new customers</a></p>
</div>

    <hr>
   <div class="row">
       <div class="col-6"> <ul>
       <h3>Active Customer</h3>
       <ul> @csrf
    @foreach ($activeCustomers as $activeCustomer)
               <li>{{$activeCustomer->name}}<span class="text-muted">({{$activeCustomer->company->name}})</span></li>
    @endforeach

    </ul>

    </div>
    @csrf
    <div class="col-6"> <ul>
    <h3>Inactive Customer</h3>
    @foreach ($inactiveCustomers as $inactiveCustomer)
    <li>{{$inactiveCustomer->name}}<span class="text-muted">({{$inactiveCustomer->company->name}})</span></li>
    @endforeach
    @csrf
    </ul>

    </div>
       <div class="row">

           <div class="col-16">

           </div>
       </div>
    @csrf

@endsection
   </div>
