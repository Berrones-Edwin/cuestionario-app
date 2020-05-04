<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    //

    protected $fillable = ['title','purpose'];

    
    public function questionnaire(){
        return $this->belongsTo(User::class);
    }
    
    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function surveys(){
        return $this->hasMany(Survey::class);
    }


}
