<?php

namespace App\Http\Controllers;

use App\Models\Guest\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $comics= Comic::all();
        return view("home", compact("comics"));
    }

    public function contacts(){
        return view("contacts");
    }
}
