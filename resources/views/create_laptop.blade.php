@extends('layouts.layout')

@section('content')

<div class="container">

    <div class="form-container text-center text-underline">
        <h1 class="display-5">Add a laptop</h1>
        <form action="/laptops" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <lable for="brand" class="form-label">Laptop Brand</lable>
                <input type="text" class="form-control" id="brand" placeholder="Enter laptop brand" name="brand">
            </div>
            <div class="mb-3">
                <lable for="processor" class="form-label">Laptop Processor</lable>
                <input type="text" class="form-control" id="processor" placeholder="Enter laptop processor"
                    name="processor">
            </div>
            <div class="mb-3">
                <lable for="ram" class="form-label">Laptop ram</lable>
                <input type="text" class="form-control" id="ram" placeholder="Enter Laptop ram" name="ram">
            </div>
            <div class="mb-3">
                <lable for="student_id" class="form-label">Student ID</lable>
                <input type="text" class="form-control" id="student_id" placeholder="Enter student id"
                    name="student_id">
            </div>
            <div class="mb-3">
                <lable for="graphics_card" class="form-label">Laptop Graphics card</lable>
                <input type="text" class="form-control" id="graphics_card" placeholder="Enter laptop Graphics card"
                    name="graphics_card">
            </div>
            <div class="mb-3">
                <lable for="SN" class="form-label">Laptop Serial Number</lable>
                <input type="text" class="form-control" id="SN" placeholder="Enter laptop serial number" name="SN">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>

</div>
@endsection