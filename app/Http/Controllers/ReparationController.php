<?php

namespace App\Http\Controllers;

use App\Reparation;
use Illuminate\Http\Request;

class ReparationController extends Controller
{
    public function postReparationCreate(Request $request){
        $this->validate($request, [
            'inputSurname' => 'required',
            'inputName' => 'required',
            'inputEmailAddress' => 'required',
            'inputPhone' => 'required',
            'inputAddress' => 'required',
            'inputCity' => 'required',
            'inputZip' => 'required'
        ]);

        $reparation = new Reparation([
            'surname' => $request->input('inputSurname'),
            'name' => $request->input('inputName'),
            'email' => $request->input('inputEmailAddress'),
            'phone' => $request->input('inputPhone'),
            'address' => $request->input('inputAddress'),
            'city' => $request->input('inputCity'),
            'zipcode' => $request->input('inputZip'),
            'description' => $request->input('repDescription')
        ]);

        $reparation->save();
        return redirect()->route('reparation.index')->with('info', 'Reparatie is verstuurd');
    }
}
