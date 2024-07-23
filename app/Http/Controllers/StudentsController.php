<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stuents;

class StudentsController extends Controller
{
    public function index()
    {
        $stuents = Stuents::all();
        return view('prac', ['stuents' => $stuents]);
    }

    public function show($id)
    {
        $stuent = Stuents::findOrFail($id);

        return view('show', ['stuent' => $stuent]);
    }

    public function create()
    {
        return view('Create');
    }

    public function store()
    {

        $stuent = new Stuents();


        $stuent->First_Name = request('First_Name');
        $stuent->Other_Names = request('Other_Names');
        $stuent->Last_Name = request('Last_Name');
        $stuent->age = request('age');
        $stuent->schools = request('schools');
        // dd($stuent->schools);

        $stuent->save();

        return redirect('/students')->with('mssg', 'New student added');
    }
    public function remove($id)
    {
        $stuent = Stuents::findOrFail($id);
        $stuent->delete();
        return redirect('/students');
    }
}
