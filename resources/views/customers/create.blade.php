@extends('layouts.app')

@section('title' , 'ADD NEW ')



@section('content')
    <div class="row">
        <div class="col-12"><h1>Add customers</h1></div>

    </div>
    <div class="row">
        <div class="col-12"><form action="/customer " method="POST" >
          @include('customers.form')
                <button type="submit" class="btn btn-primary">Add customer</button>
                @csrf
            </form></div>
    </div>
    <hr>

        @endsection

