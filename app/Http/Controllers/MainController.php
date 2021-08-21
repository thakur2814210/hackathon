<?php

namespace App\Http\Controllers;

use App\Models\ChallengeSolution;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        $page_title = "Main";
        
        $challenge =  ChallengeSolution::all()[0];
        return view('main.index', compact('page_title', 'challenge'));

    }
}
