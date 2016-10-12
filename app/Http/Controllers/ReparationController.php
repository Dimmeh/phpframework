<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Reparation;

class ReparationController extends Controller
{
    public function index(){
        return view('reparation\reparation');
    }
}
