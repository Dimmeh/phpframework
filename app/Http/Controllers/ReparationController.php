<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Reparation;
use Illuminate\Support\Facades\Input;

class ReparationController extends Controller
{
    public function index(){
        return view('reparation\reparation');
    }

    public function store(){
        Reparation::create(Input::all());
        return redirect()->back();
    }
}
