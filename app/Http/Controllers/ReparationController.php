<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Reparation;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ReparationController extends Controller
{
    public function index(){
        return view('reparation\reparation');
    }

    public function store(){
        Reparation::create(Input::all());

        Session::flash('flash_message', 'Uw reparatie is verzonden.');

        return redirect()->back();
    }
}
