<?php

namespace App\Http\Controllers;

use App\Models\Stuents;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class CoursesController extends Controller
{
    //
    public function index()
    {
        $stuents = Stuents::with('cources')->get();
        return view('index', compact('stuents'));
    }
}
