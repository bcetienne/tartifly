<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index() {
        $travels = DB::table('travels')->get();
        return view('travels', ['travels' => $travels]);
    }

    public function showTravel($id) {
        $travel = DB::table('travels')->where('id', $id)->first();
        return view('travels', ['travel' => $travel]);
    }
}
