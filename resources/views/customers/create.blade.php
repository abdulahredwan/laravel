@extends('layout')

@section('title' , 'ADD NEW ')



@section('content')
    <div class="row">
        <div class="col-12"><h1>Add customers</h1></div>

    </div>
    <div class="row">
        <div class="col-12"><form action="/customer " method="POST" >
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

        @endsection

