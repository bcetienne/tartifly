<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Travel;

class TravelController extends Controller
{
    public function index() {
        $travels = Travel::all()->where(['user_id' => Auth::user()->id]);
        return view('travels', ['travels' => $travels]);
    }

    public function showTravel($id) {
        $travel = Travel::find($id);
        return view('travels', ['travel' => $travel]);
    }

    public function showCreateForm() {
        return view('travels', ['newTravel' => 'newTravel']);
    }

    public function create(Request $request) {
        $validateData = $request->validate([
            'label' => 'required|min:10|max:255',
            'country' => 'required|min:10|max:255',
            'city' => 'required|min:10|max:255',
            'date_begin' => 'required',
            'date_end' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        // Retrieve the inputs data
        $inputs = $request->input();

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
        $travel->created_at = date('Y-m-d H:i:s');
        $travel->updated_at = date('Y-m-d H:i:s');
        $travel->user_id = Auth::user()->id;

        if ($travel->save()) {
            $id = $travel->id;
            // Return the travel view with the last travel added
            return redirect('travel/' . $id);
        } else {
            return redirect('travels');
        }
    }

    public function showUpdateForm($id) {
        $travel = Travel::find($id);
        return view('travels', ['updateTravel' => $travel]);
    }

    public function update(Request $request) {
        $inputs = $request->input();
        if ($inputs['travelId'] === null || $inputs['label'] === null || $inputs['country'] === null || $inputs['city'] === null || $inputs['date_begin'] === null || $inputs['date_end'] === null || $inputs['price'] === null || $inputs['description'] === null) {
            return redirect('travels');
        }

        $travel = Travel::find($inputs['travelId']);
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
            return redirect('travels');
        }
    }

    public function delete($id) {
        $travel = Travel::find($id);
        if ($travel->delete()) {
            return redirect('travels');
        }
    }
}
