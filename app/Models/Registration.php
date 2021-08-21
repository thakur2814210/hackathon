<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    public function hackathons(){
        return $this->belongsToMany(Hackathon::class, 'hackathon_users');
    }

    public function profile_links(){
        return $this->hasMany(Profilelink::class);
    }

    public function challengeSolution(){
        return $this->hasMany(ChallengeSolution::class);
    }

  

}
