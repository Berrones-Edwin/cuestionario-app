@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $questionnaire->title }}</div>

                    <div class="card-body">
                        <a href="{{ route('questions.create',$questionnaire) }}" class="btn btn-dark">Create new question</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
