<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function projects()
    {
        return view('projects');
    }

    public function sendEmail(Request $r)
    {
        
    }
}
