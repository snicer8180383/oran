<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function projects()
    {
        $path = public_path() . "/js/projects.json";
        $projects = json_decode(file_get_contents($path), true); 
        return view('projects', compact('projects'));
    }

    public function sendEmail(Request $r)
    {
        
    }
}
