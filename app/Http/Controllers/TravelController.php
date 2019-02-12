<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelController extends Controller
{
    public function index() {
        $travels = Travel::all();
        return view('travels', ['travels' => $travels]);
    }

    public function showTravel($id) {
        $travel = Travel::find($id);
        return view('travels', ['travel' => $travel]);
    }

    public function create(Request $request) {
        // Retrieve the inputs data
        $inputs = $request->input();

        if ($inputs['label'] === null || $inputs['country'] === null || $inputs['city'] === null || $inputs['date_begin'] === null || $inputs['date_end'] === null || $inputs['price'] === null || $inputs['description'] === null) {
            return redirect('administration');
        }

        // Insert the new travel
        $travel = new Travel;
        $travel->label = $inputs['label'];
        $travel->country = $inputs['country'];
        $travel->city = $inputs['city'];
        $travel->date_begin = $inputs['date_begin'];
        $travel->date_end = $inputs['date_end'];
        $travel->cost = $inputs['price'];
        $travel->photo = 'test';
        $travel->description = $inputs['description'];
        $travel->dispo = 1;

        if ($travel->save()) {
            $id = $travel->id;
            // Return the travel view with the last travel added
            return redirect('travel/' . $id);
        } else {
            return redirect('administration');
        }
    }

    public function update() {
        
    }
}
