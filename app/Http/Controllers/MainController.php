<?php

namespace App\Http\Controllers;

use App\Models\Challenges;
use App\Models\ChallengeSolution;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        $page_title = "Main";
        
        $challenges =  Challenges::all();
        return view('main.list', compact('page_title', 'challenges'));

    }

    function list($slug){
        $page_title = "list";
        
        $challenge =  ChallengeSolution::all()[0];
        return view('main.index', compact('page_title', 'challenge'));
    }
}
