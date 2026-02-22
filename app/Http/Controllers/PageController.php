<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pest\Support\View;

class PageController extends Controller 
{
    public function home(){
        return View('greengenesisbd.page.home');
    }
    public function contact(){
        return View('greengenesisbd.page.contact');
    }
    public function project(){
        return View('greengenesisbd.page.project');
    }
    public function blog(){
        return View('greengenesisbd.page.blog');
    }
    public function faq(){
        return View('greengenesisbd.page.faq');
    }
    public function feature(){
        return View('greengenesisbd.page.feature');
    }
    public function testimonial(){
        return View('greengenesisbd.page.testimonial');
    }
    public function team(){
        return View('greengenesisbd.page.team');
    }
    public function service(){
        return View('greengenesisbd.page.service');
    }
    public function about(){
        return View('greengenesisbd.page.about');
    }
    public function error(){
        return View('greengenesisbd.page.error');
    }
}
