<?php

namespace App\Helper;

class Helper
{

    public static $name;
    public static $email;
    public static $hackathon_title;
    public static $subject;
    public static $event_begin;
    public static $event_end;
    public static $short_url;
    public static $code_id;

     public static function SendEmailToUser($name, $email, $hackathon_title, $subject, $event_begin, $event_end, $short_url){
        Self::$email = $email;
        Self::$name = $name;
        Self::$hackathon_title = $hackathon_title;
        Self::$subject = $subject;
        Self::$event_begin = $event_begin;
        Self::$event_end = $event_end;
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.welcome', ['name' => $name, 'email' => $email, 'hackathon_title' => $hackathon_title, 'event_begin' => $event_begin, 'event_end' =>  $event_end ,'short_url' => $short_url], function ($message) {
            $message
                ->from('test@laravelhire.com')
                ->to(Self::$email)
                ->subject(Self::$subject);
        });

        //  Mail::to('ranjanthakur1996@gmail.com')->send(new InvitationEmail($name));
       
    }


    public static function SendEmailToAdmin($name, $email, $hackathon_title, $subject,$short_url){
        Self::$email = $email;
        Self::$name = $name;
        Self::$hackathon_title = $hackathon_title;
        Self::$subject = $subject;
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.admin_welcome', ['name' => $name, 'email' => $email, 'hackathon_title' => $hackathon_title,'short_url' => $short_url], function ($message) {
            $message
                ->from('test@laravelhire.com')
                ->to(env('ADMIN_EMAIL'))
                ->subject(Self::$subject);
        });

        //  Mail::to('ranjanthakur1996@gmail.com')->send(new InvitationEmail($name));
    }


    public static function SendEmailToAdminForChallengeSubmission($name, $email, $hackathon_title, $subject,$short_url, $code_id){
        Self::$email = $email;
        Self::$name = $name;
        Self::$hackathon_title = $hackathon_title;
        Self::$subject = $subject;
        Self::$code_id = $code_id;
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.challenge_user_admin', ['name' => $name, 'email' => $email, 'challenge_name' => $hackathon_title,'short_url' => $short_url ,'code_id' => $code_id], function ($message) {
            $message
                ->from('test@laravelhire.com')
                ->to(env('ADMIN_EMAIL'))
                ->subject(Self::$subject);
        });

        //  Mail::to('ranjanthakur1996@gmail.com')->send(new InvitationEmail($name));
       
    }



    
}

?>

