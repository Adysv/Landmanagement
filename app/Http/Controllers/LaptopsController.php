<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptops;
use App\Models\Stuents;

class LaptopsController extends Controller
{
    //
    public function create()
    {
        return view('create_laptop');
    }

    public function store()
    {

        $laptop = new Laptops();


        $laptop->brand = request('brand');
        $laptop->processor = request('processor');
        $laptop->ram = request('ram');
        $laptop->graphics_card = request('graphics_card');
        $laptop->stuents_id = request('student_id');
        $laptop->serial_number = request('SN');
        // dd($stuent->schools);

        $laptop->save();

        return redirect('/students');
    }

    public function details()
    {
        $laptops = Stuents::with('laptops')->get()->map(function ($stuent) {
            return [
                'student_name' => $stuent->First_Name,
                'last_name' => $stuent->Last_Name,
                'laptop_brand' => $stuent->laptops ? $stuent->laptops->brand : null,
                'serial_number' => $stuent->laptops ? $stuent->laptops->serial_number : null,
            ];
        });

        return view('details', compact('laptops'));
    }
}