<?php

namespace App\Http\Controllers;

use App\Models\Challenges;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Vinkla\Hashids\Facades\Hashids;

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
        $page_title = 'Challenges';
        return view('challanges', compact('page_title'));
    }

    public function test()
    {
        return view('test');
    }

    public function store(Request $request){

        $this->validate($request, [
            'challenge_name' => 'required',
            'challenge_body' => 'required',
        ]);
        $slug = Str::slug($request->challenge_name, '-');
        $temp= Challenges::max('id') + 1;
        $url= Hashids::encode($temp);
        $ch = new Challenges();
        $ch->challenge_name	 = $request->challenge_name;
        $ch->challenge_body	 = $request->challenge_body;
        $ch->slug = $slug;
        $ch->short_url = $url;
        
        $ch->save();
        return redirect('/challange-create');
    }
}
