<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Status extends Controller
{
    public function get($site)
    {
        return view('status');
    }
}
