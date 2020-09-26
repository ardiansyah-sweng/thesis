<?php

namespace App\Http\Controllers;
use App\Http\Requests\SendRequest;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Validate form and submit
     *
     * @return void
     */
    public function send(SendRequest $request)
    {
        dd($request->all());
    }
}
