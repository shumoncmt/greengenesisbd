<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function allproject()
    {
        return view('greengenesisbd.project.allproject');
    }
    function ongoingproject()
    {
        return view('greengenesisbd.project.ongoingproject');
    }
    function completedproject()
    {
        return view('greengenesisbd.project.completedproject'); 
    }
}
