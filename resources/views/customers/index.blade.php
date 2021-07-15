@extends('layouts.app')

@section('title' , 'CUSTOMER LIST')



@section('content')
    <div class="row">
        <div class="col-12"><h1>Customers Register</h1></div>
    </div>
    @can('create', App\Models\Customer::class)
        <div class="row">
            <div class="col-12"></div>
            <p><a href="customer/create">Add new customers</a></p>
        </div>

    @endcan
    <hr>

  @foreach($customers  as $customer)

      <div class="row">
          <div class="col-2">
              {{$customer->id}}
          </div>
          <div class="col-4">
              @can('view', $customer )
                  <a href="/customer/{{$customer->id}}">
                      {{$customer->name}}
                  </a>
              @endcan
             @cannot('view', $customer)
               {{$customer->name}}
                  @endcannot
          </div>
          <div class="col-4">{{$customer->company->name}}</div>
          <strong> <div class="col-2">{{$customer->active ?   'Active' : 'Inactive' }}-<br></div></strong>
          <strong> <div class="row">{{$customer->pho}}</div></strong>
      </div>
  @endforeach
<div class="d-flex justify-content-center">
    {!! $customers->links() !!}
</div>
@endsection
