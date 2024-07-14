<?php

namespace App\Http\Controllers;

use App\Models\ApplicantTable;
use Illuminate\Http\Request;

class MainCotroller extends Controller
{
    //

    public function index()
    {
        $users = ApplicantTable::all();
        return view('login', ['users' => $users]);
    }
}
