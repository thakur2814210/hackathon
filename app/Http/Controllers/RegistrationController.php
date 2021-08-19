<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("register");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'nick_name' => 'required',
            'email' => 'required|unique:registrations,email',
            'password' => 'required',
            'bio' => 'required',
            'links' => 'required'
        ]);

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

        return redirect("/registrations");
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
