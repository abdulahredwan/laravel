@extends('layouts.app')

@section('title' , 'Edit Details '.$customer->name)



@section('content')
    <div class="row">
        <div class="col-12"><h1>Edit Detail {{$customer->name}}</h1></div>

    </div>
    <div class="row">
        <div class="col-12"><form action="/customer/{{$customer ->id}} " method="POST" enctype="multipart/form-data" >
               @method('PATCH')
          @include('customers.form')
                <button type="submit" class="btn btn-primary">SAVE customer</button>
                @csrf
            </form></div>
    </div>
    <hr>

        @endsection

