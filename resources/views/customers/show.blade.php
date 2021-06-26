@extends('layout')

@section('title' , 'Details of  ' .$customer->name)



@section('content')
    <div class="row">
        <div class="col-12"><h1>Add customers</h1></div>
     <p></p><br>
{{--        <br> <button type="button" class="btn btn-primary"></button>--}}
        <button type="button" class="btn btn-outline-primary"><a href="/customer/{{$customer->id}}/edit">Edit</a></button>
    </div>
    <div class="row">
        <div class="col-12" style="color: blue" >
<h3>Details of {{$customer->name}} </h3>
        </div>
    </div>
    <div class="row">
      <div class="col-12">
          <p><strong>NAME:</strong>{{$customer->name}}</p>
          <p> <span style="font-style: initial"><strong>email:</strong></span>{{$customer->email}}</p>
          <p><strong>Company:</strong>{{$customer->company->name}}</p>
          <p><strong>Company phone :</strong>{{$customer->company->phone}}</p>
      </div>
    </div>
    <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/customer/">LIST CUSTOMERS</a></button>
@endsection
