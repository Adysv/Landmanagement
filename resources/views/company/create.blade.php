@extends('layouts.companyLayout')

@section('content')

<div class="container">
    <p class="text-center text-muted display-3">ADD AN EMPLOYEE</p>

    <form action="/company" method="POST">
        @csrf
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name"
                placeholder="Enter employee first name">
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name"
                placeholder="Enter employee last name">
        </div>
        <div class="mb-3">
            <label for="national_id" class="form-label">National ID</label>
            <input type="text" class="form-control" id="national_id" name="national_id"
                placeholder="Enter employee's national ID">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-select">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <select name="department" id="department" class="form-select">
                <option value="1">Resettlement</option>
                <option value="2">LIMS</option>
                <option value="3">Estates</option>
                <option value="4">HR</option>
                <option value="5">Records</option>
                <option value="6">Accounts</option>
                <option value="7">PLO</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>
    </form>

</div>
@endsection