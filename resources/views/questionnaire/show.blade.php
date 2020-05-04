@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $questionnaire->title }}</div>

                    <div class="card-body">
                        <a href="#" class="btn btn-dark">Create new question</a>
                        <a href="{{ route('surveys.show',[$questionnaire,Str::slug($questionnaire->title) ]) }}" class="btn btn-dark">Take Survey</a>
                    </div>
                </div>
                @foreach($questionnaire->questions  as $question)
                    <div class="card mt-4">
                    
                        <div class="card-header">{{ $question->question }}</div>

                        <div class="card-body">
                            @foreach( $question->answers as $answer )
                                <ul class="list-group">
                                    <li class="list-group-item">{{ $answer->answer }}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>
    </div>
@endsection
