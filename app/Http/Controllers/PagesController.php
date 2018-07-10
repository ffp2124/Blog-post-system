<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //index
    public function index(){

        $title = "Hello! ";
        return view('pages.index')->with('title', $title);
    }

    //about
    public function about(){

        $title = "About Us";
        return view('pages.about')->with('title', $title);
    }

    //blog
    public function service(){

        $services = array('Web Design', 'SEO', 'CMS');
        return view('pages.service')->with('services', $services);
    }
}
