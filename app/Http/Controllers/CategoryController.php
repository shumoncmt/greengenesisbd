<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function blog(){
        return View('greengenesisbd.category.blog');
    }
    function allproduct(){
        return view('greengenesisbd.category.allproduct');
    }
    function allblog(){
        return view('greengenesisbd.category.allblog');
    }
    function allproject(){
        return view('greengenesisbd.category.allproject');
    }
    function industrialsolution(){
        return view('greengenesisbd.category.industrialsolution');
    }
}
