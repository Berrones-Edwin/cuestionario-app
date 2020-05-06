<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Questionnaire extends Model
{
    //

    protected $fillable = ['title','purpose'];

    public function path()
    {
        return route('questionnaires.show',$this->id);
    }
    
    public function public_path()
    {
        return route('surveys.show',[$this->id,Str::slug($this->title)]);
    }

    
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
