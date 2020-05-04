<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{
    //

    protected $fillable = ['survey_id','question_id','answer_id'];
    public function survey(){
        return $this->belongsTo(Survey::class);
    }
}
