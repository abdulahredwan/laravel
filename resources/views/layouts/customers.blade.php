@extends('layout')

@section('title' , 'CUSTOMER LIST')



@section('content')
<div class="row">
    <div class="col-12"><h1>Customers Register</h1></div>
</div>
    <div class="row">
        <div class="col-12"><form action="customer " method="POST" >
        <div class="form-group">
        <label for="name">Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
   
            {{$errors->first('name')}}<br>
 

           
        </div>
        <div class="form-group">
        <label for="email">Email</label>
            <input type="text" name="email" value="{{old('name')}}" class="form-control"> 
            {{$errors->first('email')}}<br>

        </div>
        <div class="form-group">
        <label for="active">Status</label>
        <select name="active" id="active" class="form-control">
          <option value="" disabled>Select Customer Status</option>
          <option value="1">Active</option>
          <option value="0">Inactive</option>

 

        </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Add customer</button>
    @csrf
    </form></div>
    </div>
    <hr>
   <div class="row">
       <div class="col-6"> <ul>
       <h3>Active Customer</h3>
       <ul>
    @foreach ($activeCustomer as $activeCustomer)
    <li>{{$activeCustomer->name}}<span class="text-muted">({{$activeCustomer->email}})</span></li>
    @endforeach

    </ul>
    
    </div>

    <div class="col-6"> <ul>
    <h3>Inactive Customer</h3>
    @foreach ($inactiveCustomer as $inactiveCustomer)
    <li>{{$inactiveCustomer->name}}<span class="text-muted">({{$inactiveCustomer->email}})</span></li>
    @endforeach

    </ul>
    
    </div>

  
@endsection
   </div>
