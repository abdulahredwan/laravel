@extends('layout')

@section('title' , 'CUSTOMER LIST')



@section('content')
<div class="row">
    <div class="col-12"><h1>Customers Register</h1></div>
    <p><a href="customers/create">Add new customers</a></p>
</div>

    <hr>

  @foreach($customers  as $customer)
      <div class="row">
          <div class="col-2">
              {{$customer->id}}
          </div>
          <div class="col-4">{{$customer->name}}</div>
          <div class="col-4">{{$customer->company->name}}</div>
          <strong> <div class="col-2">{{$customer->active ?   'Active' : 'Inactive' }}</div></strong>
      </div>
  @endforeach
@endsection
