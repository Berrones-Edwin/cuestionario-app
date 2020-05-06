<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Questionnaire;

class QuestionnaireController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('questionnaire.create');
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'purpose' => 'required'
        ]);

        $questionnaire = auth()
                        ->user()
                        ->questionnaires()
                        ->create($request->all());
            

        return redirect()->route('questionnaires.show',compact('questionnaire'));


    }
    public function show(Questionnaire $questionnaire)
    {
        $questionnaire->load('questions.answers');
        return view('questionnaire.show',compact('questionnaire'));
    }

    

}
