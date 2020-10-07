<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopikController extends Controller
{
    public function index(){
        return view('topik');
    }
}
