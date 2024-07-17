<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    //
    public function welcome()
    {
        $employees = Employees::with('departments')->get()->map(function ($employee) {
            return [
                'first_name' => $employee->First_Name,
                'last_name' => $employee->Last_Name,
                'department' => $employee->departments ? $employee->departments->DepartmentName : null,
            ];
        });

        return view('company.welcome', compact('employees'));
    }

    public function create()
    {
        return view("company.create");
    }

    public function store()
    {
        $employee = new Employees();

        $employee->First_Name = request('first_name');
        $employee->Last_Name = request('last_name');
        $employee->Gender = request('gender');
        $employee->National_id = request('national_id');
        $employee->departments_id = request('department');

        $employee->save();

        return redirect('/company');
    }
}
