<?php

namespace App\Http\Controllers;

use App\Reparation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ReparationController extends Controller
{
    public function getReparations(){

        $reparations = Reparation::where(function($query){

            $status = Input::has('filterReparationStatus') ? Input::get('filterReparationStatus') : null;
            if(isset($status)){
                $query->where('status', '=', $status);
            }
        })->get();

        return view('admin.reparations', ['reparations' => $reparations]);
    }

    public function getReparationById($id){
        $reparation = Reparation::find($id);
        $reparation->phone = substr($reparation->phone, 2);
        return view('admin.reparation.edit', ['reparation' => $reparation]);
    }

    public function postReparationCreate(Request $request, $role){
        if($request['user_id']){

            $this->validate($request, [
                'repDescription' => 'required'
            ]);

            $customer = User::find($request['user_id']);

            $reparation = new Reparation([
                'surname' => $customer->surname,
                'name' => $customer->name,
                'email' => $customer->email,
                'phone' => $customer->phone,
                'address' => $customer->address,
                'city' => $customer->city,
                'zipcode' => $customer->zipcode,
                'description' => $request->input('repDescription')
            ]);

            $reparation->save();


        }
        else{

            $this->validate($request, [
                'inputSurname' => 'required',
                'inputName' => 'required',
                'inputEmailAddress' => 'required',
                'inputPhone' => 'required',
                'inputAddress' => 'required',
                'inputCity' => 'required',
                'inputZip' => 'required',
                'repDescription' => 'required'
            ]);

            $phone = '06'.$request->input('inputPhone');

            $reparation = new Reparation([
                'surname' => $request->input('inputSurname'),
                'name' => $request->input('inputName'),
                'email' => $request->input('inputEmailAddress'),
                'phone' => $phone,
                'address' => $request->input('inputAddress'),
                'city' => $request->input('inputCity'),
                'zipcode' => $request->input('inputZip'),
                'description' => $request->input('repDescription')
            ]);

            $reparation->save();
        }

        if($role == 'admin'){
            return redirect()->route('admin.reparations')->with('info', 'Reparatie is verstuurd');
        }
        else{
            return redirect()->route('reparation.index')->with('info', 'Reparatie is verstuurd');
        }
      }

    public function putReparationUpdate(Request $request){
        $this->validate($request, [
            'inputSurname' => 'required',
            'inputName' => 'required',
            'inputEmailAddress' => 'required',
            'inputPhone' => 'required',
            'inputAddress' => 'required',
            'inputCity' => 'required',
            'inputZip' => 'required',
            'repDescription' => 'required'
        ]);

        $reparation = Reparation::find($request->input('id'));
        $reparation->surname = $request->input('inputSurname');
        $reparation->name = $request->input('inputName');
        $reparation->email = $request->input('inputEmailAddress');
        $reparation->phone = $request->input('inputPhone');
        $reparation->address = $request->input('inputAddress');
        $reparation->city = $request->input('inputCity');
        $reparation->zipcode = $request->input('inputZip');
        $reparation->description = $request->input('repDescription');
        $reparation->status = $request->input('status');
        $reparation->save();
        return redirect()->route('admin.reparations')->with('info', 'Reparation edited');
    }

    public function getReparationDelete($id){

        $reparation = Reparation::find($id);
        $reparation->delete();
        return redirect()->route('admin.reparations')->with('info', 'Post delete');
    }
}
