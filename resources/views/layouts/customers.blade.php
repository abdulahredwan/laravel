@extends('layout')

@section('title' , 'CUSTOMER LIST')



@section('content')
<div class="row">
    <div class="col-12"><h1>Customers Register</h1></div>
</div>
    <div class="row">
        <div class="col-12"><form action="customer " method="POST" >
        <div class="form-group">
        <label for="name">Name of Customer:</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">

            <span style="color: darkred "> <strong>{{$errors->first('name')}}<br></span> </strong>

            @csrf

        </div>
        <div class="form-group">
        <label for="email">Email</label>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
            <strong><span style="color: red">{{$errors->first('email')}}<br></span></strong>
            @csrf
        </div>

        <div class="form-group">
        <label for="active">Status</label>
        <select name="active" id="active" class="form-control">
          <option value="" disabled>Select Customer Status</option>
          <option value="1">Active</option>
          <option value="0">Inactive</option>
          @csrf


        </select>
        </div>

        <div class="form-group">
        <label for="company_id">Select Company</label>
        <select name="company_id" id="company_id" class="form-control">
           @foreach($companies as $company)
               <option value="{{$company->id}}">{{$company->name}}</option>
            @endforeach
          @csrf


        </select>
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Add customer</button>
    @csrf
    </form></div>
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
               @foreach($companies as $company)
                   <h3> Custoemors of {{$company->name}}</h3>
                  <ul>
                      @foreach($company->customers as $customer)
                          <li>{{$customer->name}}</li>
                      @endforeach
                  </ul>
               @endforeach
           </div>
       </div>
    @csrf

@endsection
   </div>
