<?php

namespace App\Http\Controllers;


use App\User;

class AccountController extends Controller
{
    public function getAccounts(){
        $accounts = User::orderBy('created_at', 'desc')->paginate(2);
        return view('admin.account', ['accounts' => $accounts]);
    }

    public function getAccountById($id){
        $account = User::find($id);
        return view('account.index', ['account' => $account] );
    }
}
