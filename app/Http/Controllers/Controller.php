<?php

namespace App\Http\Controllers;

use App\Models\Challenges;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function hackathondetail()
    {
        return view('detail');
    }
    public function challangecreate()
    {
        return view('createchallange');
    }
    public function challangedisplay()
    {
        $page_title = 'deno';
        return view('challanges', compact('page_title'));
    }

    public function test()
    {
        return view('test');
    }

    public function store(Request $request){
        $ch = new Challenges();
        $ch->challenge_name	 = $request->challenge_name;
        $ch->challenge_body	 = $request->challenge_body;
        $ch->save();
        return redirect('/challange-create');
    }
}
