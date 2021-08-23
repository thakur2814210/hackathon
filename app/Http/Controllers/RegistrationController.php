<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\Hackathon;
use App\Models\HackathonUsers;
use App\Models\Profilelink;
use App\Models\Registration;
use Illuminate\Http\Request;
class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reg = Registration::all()->first();
        return $reg;
    }


    // public function sendEmail($name, $email, $message)
    // {
    //     $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);

    //     $name = "Himanshu";


    //     $beautymail->send('emails.welcome', ['name' => $name, 'email', $email], function ($message) {
    //         $message
    //             ->from('test@laravelhire.com')
    //             ->to('himanshurahidev@gmail.com')
    //             ->subject('Welcome!');
    //     });

    //     //  Mail::to('ranjanthakur1996@gmail.com')->send(new InvitationEmail($name));
    //     echo ("mail sent successfully");
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($short_url = null)
    {
        if(!$short_url){
            return redirect('/');
        }
        return view("register", compact('short_url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request, $short_url)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'nick_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'bio' => 'required',
            'links' => 'required'
        ]);

       
        $hackathon = Hackathon::where('short_url', $short_url)->first();
        if (!$hackathon) {
            return redirect("/");
        }
        $email_exist = Registration::where("email", $request->email)->first();
        if ($email_exist) {
            $check_hackathon_user_exist = HackathonUsers::where('hackathon_id', $hackathon->id)->where('registration_id', $email_exist->id)->first();

            if ($check_hackathon_user_exist) {
                return redirect("hack/".$short_url)->with('message', 'failed');
            }

            $hackathonuser = new HackathonUsers();
            $hackathonuser->hackathon_id = $hackathon->id;
            $hackathonuser->registration_id = $email_exist->id;
            $hackathonuser->save();
            Helper::SendEmailToUser($request->name, 'himanshurahidev@gmail.com', $hackathon->title, 'Registered successfully' , $hackathon->event_begin, $hackathon->event_end );
            return redirect("/hack" . "/" . $short_url)->with('message', 'success');
        } else {
            $registration = new Registration();
            $registration->name = $request->name;
            $registration->nick_name = $request->nick_name;
            $registration->email = $request->email;
            $registration->password = $request->password;
            $registration->bio = $request->bio;
            $registration->save();

            $links = json_decode($request->links);
            if (count($links) != 0) {
                for ($i = 0; $i < count($links); $i++) {
                    $profile_link = new Profilelink();
                    $profile_link->useful_links = $links[$i];
                    $profile_link->registrations_id = $registration->id;
                    $profile_link->save();
                }
            }
            $hackathonuser = new HackathonUsers();
            $hackathonuser->hackathon_id = $hackathon->id;
            $hackathonuser->registration_id = $registration->id;
            $hackathonuser->save();
            Helper::SendEmailToUser($request->name, 'himanshurahidev@gmail.com', $hackathon->title, 'Registered successfully' , $hackathon->event_begin, $hackathon->event_end );
            return redirect("/hack" . "/" . $short_url)->with('message', 'success');
            // return "Created New record";
        }



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
