<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //     var_dump($this->middleware('admin'));die;
    //     $this->middleware('admin');
    // }

    public function index() {
        return view('admin');
        // var_dump(View('admin.index'));

        // if (View::exists('admin.index')) {
        //     var_dump('yes');die;
        // } else {
        //     var_dump('no');die;
        // }
    }
}
