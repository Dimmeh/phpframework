<?php

namespace App\Http\Controllers;

use App\Reparation;
use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        if(Auth::user()->role === 1){
            return view('dashboard\dashboard');
        }
        else{
            return view('welcome');
        }
    }

    /**
     * @return string
     */
    public function index()
    {
        $reparations = Reparation::all();
                return view('dashboard\dashboard', compact('reparations'));
    }
}
