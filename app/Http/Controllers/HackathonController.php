<?php

namespace App\Http\Controllers;

use App\Models\Hackathon;
use App\Models\Invite;
use Illuminate\Support\Str;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Http\Request;


class HackathonController extends Controller
{
    public function hack_redirect($short_url){
        $hackathon = Hackathon::where('short_url', $short_url)->first();
        abort_unless($hackathon, 404, 'Project not found');
        $message = "";
        if(session()->get('message') == 'failed'){
            $message = 'failed';
        }else if(session()->get('message') == 'success'){
            $message = 'success';  
        }
        return redirect()->route('hackathon',$hackathon->slug)->with('message', $message);
        // search in database
        // if record not found then 404
        // if record found then redirect to that route with the slug
        // return redirect()->route('profile',$slug);
    }

    public function hackathon_detail($slug){
        $hackathon = Hackathon::where('slug', $slug)->first();
        abort_unless($hackathon, 404, 'Project not found');
        return view('detail',compact('hackathon'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
			'title'=> 'required',
			'subtitle'=>'required',
			'description' => 'required',
            'type' => 'required',
            'min_participants'=> 'required',
            'max_participants'=> 'required',
            'event_begin'=> 'required',
            'event_end'=> 'required',
            'end_subscription'=> 'required',

		]);

		$hackathon = new Hackathon();
        $hackathon->title = $request->title;
        $hackathon->subtitle = $request->subtitle;
        $hackathon->description = $request->description;
        $hackathon->type = $request->type;
        $hackathon->min_participants = $request->min_participants;
        $hackathon->max_participants = $request->max_participants;
        $hackathon->awards = $request->awards;
        $hackathon->event_begin = $request->event_begin;
        $hackathon->event_end = $request->event_end;
        $hackathon->end_subscription = $request->end_subscription;

        $slug = Str::slug($request->title, '-');
        $hackathon->slug = $slug;

        $temp= Hackathon::max('id') + 1;
        $url= Hashids::encode($temp);
        $hackathon->short_url= $url;
        $hackathon->save();
        // $email= $request->email;

        // for($i = 0; $i < count($email); $i++) {
        //     $invite = new Invite();
        //     $invite->email = $email[$i];
        //     $invite->hackathons_id = $hackathon->id;
        //     $invite->save();
        // }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
