<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'home';
        return view('pages.home')->with('title', $title);
    }
    public function about(){
        $title = 'about';
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
        'title' => 'Services',
        "services" => ['web design', 'programming', 'data science']
        );
        return view('pages.services')->with($data);
    }
}
