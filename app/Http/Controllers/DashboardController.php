<?php

namespace App\Http\Controllers;

use App\Dashboard;
use App\Reparation;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return string
     */
    public function index()
    {
        if(Auth::user()->role == "Admin"){
            $reparations = Reparation::all();
            return view('dashboard\dashboard', compact('reparations'));
        }
        else{
            return view('welcome');
        }

    }

    public function show($id){
        $rep = Reparation::find($id);
        $url = '/dashboard/delete/'.$rep->id;
        return view('dashboard\details\show', compact('rep', 'url'));
    }

    public function edit($id){
        $rep = Reparation::find($id);

        return view('dashboard\details\detail', compact('rep'));
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id){
        $rep = Reparation::find($id);

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $input = $request->all();
        $rep->fill($input)->save();

        Session::flash('flash_message', 'Uw reparatie is bewerkt.');

        return redirect()->route('dashboard');

    }

    public function delete($id){
        $rep = Reparation::find($id);
        $rep->delete();
        return redirect()->route('dashboard');
    }


}
