@extends('layouts.app')

@section('title' , 'CUSTOMER LIST')



@section('content')
<div class="row">
    <div class="col-12"><h1>Customers Register</h1></div>
    <p><a href="customer/create">Add new customers</a></p>
</div>

    <hr>

  @foreach($customers  as $customer)

      <div class="row">
          <div class="col-2">
              {{$customer->id}}
          </div>
          <div class="col-4">
              <a href="/customer/{{$customer->id}}">{{$customer->name}}</a>
          </div>
          <div class="col-4">{{$customer->company->name}}</div>
          <strong> <div class="col-2">{{$customer->active ?   'Active' : 'Inactive' }}-<br></div></strong>
          <strong> <div class="row">{{$customer->pho}}</div></strong>
      </div>
  @endforeach
@endsection
