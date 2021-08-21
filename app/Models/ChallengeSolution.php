<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChallengeSolution extends Model
{
    protected $table = 'challenges_solutions';
    use HasFactory;


    public function user(){
        return $this->belongsTo(Registration::class, 'registration_id');
    }
}
