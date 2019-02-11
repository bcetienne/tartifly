<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index() {
        return view('messages');
    }

    public function showMessage($id) {
        return view('messages', ['id' => $id]);
    }
}
