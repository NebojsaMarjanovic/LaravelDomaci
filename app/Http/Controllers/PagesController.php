<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $title='Travellino!';
        return view('pages.index')->with('title',$title);
    }

    public function rezervacije(){
        return view('pages.rezervacije');
    }
}
