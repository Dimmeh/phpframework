<?php

namespace App\Http\Controllers;


use App\Reparation;
use App\User;

class UsersController extends Controller
{
    public function getContributors(){
        $contributors = User::where('role', '>', 1)->orderBy('created_at', 'desc')->paginate(10);

        if($contributors){
            return view('admin.users.contributors', ['contributors' => $contributors]);
        }
        else{
            return view('admin.users.contributors')->with('info', 'Er zijn geen resultaten gevonden');
        }
    }

    public function getContributorById($id){
        $contributor = User::find($id);
        return view('admin.users.index', ['users' => $contributor] );
    }


    public function getCustomers(){
        $customers = User::where('role','=', 1)->orderBy('id', 'asc')->paginate(10);

        if($customers){
            return view('admin.users.customers', ['customers' => $customers]);
        }
        else{
            return view('admin.users.customers')->with('info', 'Er zijn geen resultaten gevonden');
        }
    }

    public function getUserById($id){
        $user = User::find($id);

        $myReparations = $this->getMyReparations($id);

        return view('users.index', ['user' => $user, 'myReparations' => $myReparations]);
    }

    public function getMyReparations($id){
        $user = User::find($id);
        $email = $user->email;

        $myReparations = Reparation::where('email', '=', $email)->get();

        return $myReparations;

    }
}
