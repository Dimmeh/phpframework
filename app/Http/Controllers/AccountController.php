<?php

namespace App\Http\Controllers;

use App\Reparation;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
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
            $accounts = User::all();
            return view('accounts\account', compact('accounts'));
        }
        else{
            return view('welcome');
        }

    }

    public function show($id){
        $account = User::find($id);
        $url = '/account/delete/'.$account->id;
        return view('accounts\details.show', compact('account', 'url'));
    }

    public function edit($id){
        $account = User::find($id);

        return view('auth\register', compact('account'));
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id){
        $account = User::find($id);

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required'
        ]);

        $input = $request->all();
        $account->fill($input)->save();

        Session::flash('flash_message', 'Accountnummer '.$account->id.' is bewerkt.');

        return redirect()->route('account');

    }

    public function delete($id){
        $account = Reparation::find($id);
        $account->delete();
        return redirect()->route('account');
    }


}
