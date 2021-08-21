<?php

namespace App\Http\Controllers;

use App\Models\Challenges;
use App\Models\ChallengeSolution;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        $page_title = "Main";

        $challenges =  Challenges::all();
        return view('main.list', compact('page_title', 'challenges'));
    }

    function list($slug)
    {
        $page_title = "list";

        $challenge =  ChallengeSolution::all()[0];
        return view('main.index', compact('page_title', 'challenge'));
    }

    function UserList($slug)
    {
        $page_title = 'User List';
        $challenge = Challenges::where("slug", $slug)->first();
        if (!$challenge) {
            return 1;
        }
        // return $challenge->Solutions->first()->user;
        $solutions = $challenge->Solutions;

        return view('main.UserList', compact('page_title','solutions'));
    }

    function ShowCode($solution_id){
        $page_title = 'Show Code';
        $code = ChallengeSolution::where('id', $solution_id)->first();
        return view('main.show_code', compact('code', 'page_title'));
    }
}
