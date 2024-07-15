@extends('layouts.layout')

@section('content')

<div class="container">

    <h1 class="display-1">This is my first laravel lesson 1</h1>

    <table class="table" id="details">

        <thead>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>Laptop Brand</th>
            <th>Serial Number</th>
        </thead>
        <tbody>
            @foreach ($laptops as $laptop)
            <tr>
                <td>
                    {{$laptop['student_name']}}
                </td>
                <td>
                    {{$laptop['last_name']}}
                </td>
                <td>
                    {{ $laptop['laptop_brand']}}
                </td>
                <td>
                    {{ $laptop['serial_number']}}
                </td>
            </tr>

            @endforeach

        </tbody>

    </table>
</div>
@endsection