<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    //

    protected $fillable = ['title','purpose'];

    
    public function questionnaires(){
        return $this->belongsTo(User::class);
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
}
