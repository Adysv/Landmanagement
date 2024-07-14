@extends('layouts.layout')

@section('content')

<div class="container">

    <h1 class="display-1">This is my first laravel lesson 1</h1>

    @foreach($stuents as $stuent)
    <div>
        {{$stuent->First_Name}}-{{$stuent->Other_Names}}-{{$stuent->Last_Name}}-{{$stuent->age}}
    </div>
    @endforeach

    <p class="text-muted">{{session('mssg')}}</p>

    <a href="/students/create">
        Create a new student</a>
</div>
@endsection