@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new question</div>

                <div class="card-body">
                   <form action="{{ route('questions.store',$questionnaire) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input type="text" 
                                    class="form-control" 
                                    autocomplete="off" 
                                    id="question" 
                                    placeholder="Enter question" 
                                    aria-describedby="questionHellp"
                                    name="question[question]"
                                    value="{{ old('question[question]') }}"
                            
                            >
                            <small id="questionHellp" class="form-text text-muted">Ask simple to-the-point questions for best results...</small>
                            @error('question[question]')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                           <fieldset>
                                <legend>Choices</legend>
                                <small> Give choices that give you the most insight into your question. </small>
                           </fieldset>
                           <div>
                                <div class="form-group">
                                    <label for="choice1">Choice 1</label>
                                    <input type="text" 
                                            class="form-control" 
                                            autocomplete="off" 
                                            id="choice1" 
                                            placeholder="Enter choice 1" 
                                            aria-describedby="choice1Hellp"
                                            name="answers[][answer]"
                                            value="{{ old('answer[answer]') }}"
                                    
                                    >
                                    @error('answers.0.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    
                                </div>
                           </div>
                           <div>
                                <div class="form-group">
                                    <label for="choice2">Choice 2</label>
                                    <input type="text" 
                                            class="form-control" 
                                            autocomplete="off" 
                                            id="choice2" 
                                            placeholder="Enter choice 2" 
                                            aria-describedby="choice2Hellp"
                                            name="answers[][answer]"
                                            value="{{ old('answer[answer]') }}"
                                    
                                    >
                                    @error('answers.1.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    
                                </div>
                           </div>
                           <div>
                                <div class="form-group">
                                    <label for="choice3">Choice 3</label>
                                    <input type="text" 
                                            class="form-control" 
                                            autocomplete="off" 
                                            id="choice3" 
                                            placeholder="Enter choice 3" 
                                            aria-describedby="choice3Hellp"
                                            name="answers[][answer]"
                                            value="{{ old('answer[answer]') }}"
                                    
                                    >
                                    @error('answers.2.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    
                                </div>
                           </div>
                           <div>
                                <div class="form-group">
                                    <label for="choice4">Choice 4</label>
                                    <input type="text" 
                                            class="form-control" 
                                            autocomplete="off" 
                                            id="choice4" 
                                            placeholder="Enter choice 3" 
                                            aria-describedby="choice4Hellp"
                                            name="answers[][answer]"
                                            value="{{ old('answer[answer]') }}"
                                    
                                    >
                                    @error('answers.3.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    
                                </div>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
