<?php

namespace App\Http\Controllers;

use App\Models\Guest\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("home");
    }

    public function contacts(){
        return view("contacts");
    }

    public function comicsList(){
        $comics= Comic::all();
        return view("comicsList", compact("comics"));
    }
}
