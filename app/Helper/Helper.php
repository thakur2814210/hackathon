<?php

namespace App\Helper;

use PHPUnit\TextUI\Help;

class Helper
{

    public static $name;
    public static $email;
    public static $hackathon_title;
    public static $subject;
    public static $event_begin;
    public static $event_end;

     public static function SendEmailToUser($name, $email, $hackathon_title, $subject, $event_begin, $event_end){
        Self::$email = $email;
        Self::$name = $name;
        Self::$hackathon_title = $hackathon_title;
        Self::$subject = $subject;
        Self::$event_begin = $event_begin;
        Self::$event_end = $event_end;
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.welcome', ['name' => $name, 'email' => $email, 'hackathon_title' => $hackathon_title, 'event_begin' => $event_begin, 'event_end' =>  $event_end], function ($message) {
            $message
                ->from('test@laravelhire.com')
                ->to(Self::$email)
                ->subject(Self::$subject);
        });

        //  Mail::to('ranjanthakur1996@gmail.com')->send(new InvitationEmail($name));
        echo ("mail sent successfully");
       
    }


    
}

?>

