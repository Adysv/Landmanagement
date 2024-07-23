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
            <th>Courses</th>
            <th>Serial Number</th>
        </thead>
        <tbody>
            @foreach ($stuents as $stuent)
            <tr>
                <td>
                    {{$stuent->First_Name}}
                </td>
                <td>
                    {{$stuent->Last_Name}}
                </td>
                <td>
                    <ul>
                        @foreach ($stuent->courses as $course)
                        <li>{{$course->CourseName}}}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>

            @endforeach

        </tbody>

    </table>
</div>
@endsection