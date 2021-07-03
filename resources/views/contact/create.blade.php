@extends('layouts.app')
@section('title', 'Contact ')
@section('content')
<h1>Contact us</h1>
@if( ! session()->has('message'))
    <form action="/contact" method="POST">
        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" name="name" value="{{old('name') }}" class="form-control">

            <span style="color: darkred "> <strong>{{$errors->first('name')}}<br></span> </strong>

            @csrf

        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{old('email') }}" class="form-control">
            <strong><span style="color: red">{{$errors->first('email')}}<br></span></strong>
            @csrf
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{old('message') }}</textarea>
            <strong><span style="color: red">{{$errors->first('message')}}<br></span></strong>
            @csrf

        </div>
        @csrf
        <button type="submit" class="btn btn-primary"> Send Message</button>
    </form>
@endif
@endsection
