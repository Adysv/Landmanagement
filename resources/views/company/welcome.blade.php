@extends('layouts.companyLayout')

@section('content')

<div class="container">
    <p class="text-center text-muted display-3">WELCOME TO OUR COMPANY</p>
    <P class="text-center text-muted display-5">list of employees</P>

    <table class="table">
        <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Department</th>
        </thead>
        <tbody>
            @foreach ($employees as $person)
            <tr>
                <td>
                    {{$person['first_name']}}
                </td>
                <td>
                    {{$person['last_name']}}
                </td>
                <td>
                    {{$person['department']}}
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection