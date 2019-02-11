<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index() {
        return view('travels');
    }

    public function showTravel($id) {
        return view('travels', ['id' => $id]);
    }
}
