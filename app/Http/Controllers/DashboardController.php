<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        return view('dashboard.index');
        // toastr()->success('Data has been saved successfully!');
        // toastr()->error('An error has occurred please try again later.');

    }
    public function create(Request $request){
        return view('dashboard.create');
    }
}
