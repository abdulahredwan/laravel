<div class="form-group">
    <label for="name">Name of Customer:</label>
    <input type="text" name="name" value="{{old('name') ?? $customer->name}}" class="form-control">

    <span style="color: darkred "> <strong>{{$errors->first('name')}}<br></span> </strong>

    @csrf

</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" value="{{old('email') ?? $customer->email}}" class="form-control">
    <strong><span style="color: red">{{$errors->first('email')}}<br></span></strong>
    @csrf
</div>
<div class="form-group">
    <label for="pho">Phone:</label>
    <input type="text" name="pho" value="{{old('pho') ?? $customer->pho}}" class="form-control">
    <strong><span style="color: red">{{$errors->first('pho')}}<br></span></strong>
    @csrf
</div>

<div class="form-group">
    <label for="active">Status</label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select Customer Status</option>
        <option value="1" {{$customer->active == 'Active' ? 'selected' :''}}>Active</option>
        <option value="0" {{$customer->inactive == 'Inactive' ? 'selected' : ''}}>Inactive</option>
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
