@extends('layouts.layout')

@section('content')

<div class="container">

    <h1 class="display-3 text-center student"> Create a new student.</h1>
    <div class="form-container text-center text-underline">
        <h1 class="display-5">Add a student</h1>
        <form action="/students" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <lable for="First_Name" class="form-label">First Name</lable>
                <input type="text" class="form-control" id="name" placeholder="Enter Student Name" name="First_Name">
            </div>
            <div class="mb-3">
                <lable for="Other_Names" class="form-label">Other Names</lable>
                <input type="text" class="form-control" id="o_names" placeholder="Enter Student's Other names"
                    name="Other_Names">
            </div>
            <div class="mb-3">
                <lable for="Last_Name" class="form-label">Last Name</lable>
                <input type="text" class="form-control" id="o_names" placeholder="Enter Student's last name"
                    name="Last_Name">
            </div>
            <div class="mb-3">
                <lable for="age" class="form-label">Age</lable>
                <input type="text" class="form-control" id="age" placeholder="Enter Student's age" name="age">
            </div>
            <p class="display-5">University Preferences</p>
            <fieldset class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check input" name="schools[]" id="UZ"
                        value="University_Of_Zimbabwe">
                    <label for="UZ" class="form-check-label">University Of Zimbabwe</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check input" name="schools[]" id="ZOU"
                        value="Zimbabwe_Open_University">
                    <label for="ZOU" class="form-check-label">Zimbabwe Open Univeristy</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check input" name="schools[]" id="MSU"
                        value="Midlands_State_University">
                    <label for="MSU" class="form-check-label">Midlands State University</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check input" name="schools[]" id="AU" value="Africa_University">
                    <label for="AU" class="form-check-label">Africa University</label>
                </div>
            </fieldset>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>

</div>
@endsection