@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="{{ route('questionnaires.create') }}" class="btn btn-dark">Create Questionnaire</a>

                    
                </div>

                
            </div>
            <div class="card">
                <div class="card-header">My questionnaires</div>
                <div class="card-body">
                <h6>My Questionnaires</h6>
                    <ul class="list-group">
                        @foreach($questionnaires as $questionnaire)
                            <li class="list-group-item">
                                <a href="{{ $questionnaire->path() }}">{{ $questionnaire->title }}</a>
                                <div class="mt-2">
                                    <small>Share URL</small>
                                    <p>
                                        <a href="{{ $questionnaire->public_path() }}">
                                            {{ $questionnaire->public_path() }}
                                        </a>
                                    </p>

                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
