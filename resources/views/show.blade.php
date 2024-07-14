@extends('layouts.layout')

@section('content')

<div class="container">

    <p class="text-muted">First Name - {{$stuent->First_Name}}</p>
    <p class="text-muted">Other Names - {{$stuent->Other_Names}}</p>
    <p class="text-muted">Last Name - {{$stuent->Last_Name}}</p>
    <p class="text-muted">age - {{$stuent->age}}</p>
    <p class="text-muted">University options : </p>
    <ul>
        @foreach ($stuent->schools as $school)
        <li class="text-muted">
            {{$school}}
        </li>
        @endforeach
    </ul>

    <form action="/students/ {{$stuent->id}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-primary" value="DELETE STUDENT">
    </form>

    <a href="/students">
        <- Back To All tudents</a>
</div>
@endsection