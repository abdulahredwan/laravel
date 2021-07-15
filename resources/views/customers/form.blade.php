<div class="form-group">
    <label for="name">Name of Customer:</label>
    <input type="text" name="name" value="{{old('name') ?? $customer->name}}" class="form-control">

    <span style="color: red "> <strong>{{$errors->first('name')}}<br></span> </strong>

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

        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{$activeOptionKey}}" {{$customer->active == $activeOptionValue ? 'selected' :''}}>{{$activeOptionValue}}</option>
        @endforeach
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
<div class="form-group d-flex flex-column">
    <label for="image">Profile Image</label>
    <input type="file" name="image" class="py-2">
    <span style="color: red "> <strong>{{$errors->first('image')}}<br></span> </strong>
</div>
@csrf
