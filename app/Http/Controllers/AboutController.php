<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about', [
            "title" => "About",
            "active" => "about",
            "name" => "Calviano Nathanel",
            "email" => "calvianoid@gmail.com",
            "image" => "logo.png"
        ]);
    }
}
