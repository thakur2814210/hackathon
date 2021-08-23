<?php

namespace App\Http\Controllers;

use App\Models\Challenges;
use App\Models\ChallengeSolution;
use App\Models\Registration;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvitationEmail;

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
    public function challengedisplay($slug)
    {
        $challenge = Challenges::where('slug', $slug)->first();
        if ($challenge) {
            $page_title = $challenge->challenge_name;
            return view('challanges', compact('page_title', 'challenge'));
        }
    }

    public function ChallengeRedirect($short_url)
    {
        $ch = Challenges::where('short_url', $short_url)->first();
        if ($ch) {
            $page_title = $ch->challenge_name;
            return redirect('challenge/' . $ch->slug);
        }
    }

    public function test()
    {
        return view('test');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'challenge_name' => 'required',
            'challenge_body' => 'required',
        ]);
        // $slug = Str::slug($request->challenge_name, '-');

        $temp = Challenges::max('id') + 1;
        $url = Hashids::encode($temp);
        $ch = new Challenges();
        $ch->challenge_name     = $request->challenge_name;
        $ch->challenge_body     = $request->challenge_body;
        // $ch->slug = $slug;
        $ch->short_url = $url;

        $ch->save();
        return redirect('/challenge-create');
    }

    public function SaveSolution(Request $request, $slug)
    {

        $request->validate([
			'code'=> 'required',
			'lang'=>'required',
		]);


        $ch = Challenges::where('slug',$slug)->first();
        if(!$ch){
            return response()->json(['message' => 'Challenge Not Exist'], 404);
        }

        $reg = Registration::where('email' , $request->email)->first();
        if(!$reg){
            return response()->json(['message' => 'User Not Exist'], 404);
        }

        $check_exist = ChallengeSolution::where('challenge_id', $ch->id)->where('registration_id', $reg->id)->first();
        if($check_exist){
            return response()->json(['message' => 'Already Done.'], 422);  
        }
        $sol = new ChallengeSolution();
        $sol->challenge_id = $ch->id;
        $sol->registration_id = $reg->id;
        $sol->code = $request->code;
        $sol->lang = $request->lang;
        $sol->save();
        return response()->json(['message' => 'Solution Submitted'], 200);  

    }
    public function sendEmail()
    {
       $name = "Himanshu";

       $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
	$beautymail->send('emails.welcome', [], function($message)
	{
		$message
			->from('test@laravelhire.com')
			->to('ranjanthakur1996@gmail.com')
			->subject('Welcome!');
	});

        //  Mail::to('ranjanthakur1996@gmail.com')->send(new InvitationEmail($name));
      echo("mail sent successfully");
 
    }
}
