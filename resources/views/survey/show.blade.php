@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h2 class="text-center">{{ $questionnaire->title }}</h2>
            <form action="{{ route('surveys.store',[$questionnaire,Str::slug($questionnaire->title) ]) }}" method="post">
                @csrf
                @foreach($questionnaire->questions as $key => $question)
                    <div class="card mt-4">
                    
                        <div class="card-header"><b>{{ $key+1 }}.- {{ $question->question }}</b></div>

                        @error('responses.'. $key . '.answer_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="card-body">
                            @foreach( $question->answers as $answer )
                                <ul class="list-group">
                                    <label for="answer{{ $answer->id }}">
                                        <li class="list-group-item">
                                            <input type="radio" 
                                                    class="mr-2" 
                                                    name="responses[{{$key}}][answer_id]" 
                                                    id="answer{{ $answer->id  }}"
                                                    value="{{ $answer->id  }}"
                                                    {{ (old('responses.'. $key . '.answer_id') == $answer->id)  ? 'checked' : '' }}>

                                            {{ $answer->answer }}
                                            <input type="hidden" 
                                                    name="responses[{{$key}}][question_id]"
                                                    value=" {{ $question->id }}">
                                        </li>
                                    </label>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                @endforeach 
                <div class="card mt-3">
                    <div class="card-header"><b>Your information</b></div>
                    <div class="card-body">
                       
                        <div class="form-group">
                            <label for="name">Your name</label>
                            <input type="text" 
                                    class="form-control" 
                                    autocomplete="off" 
                                    id="name" 
                                    placeholder="Enter name" 
                                    aria-describedby="nameHellp"
                                    name="survey[name]"
                            
                            >
                            <small id="nameHellp" class="form-text text-muted">Hello! What's your name</small>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" 
                                    class="form-control" 
                                    autocomplete="off" 
                                    placeholder="Enter email"  
                                    id="email" 
                                    aria-describedby="emailHellp"
                                    name="survey[email]"
                            >
                            <small id="emailHellp" class="form-text text-muted">Your email please!.</small>
    
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-dark">Complete your survey</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection
