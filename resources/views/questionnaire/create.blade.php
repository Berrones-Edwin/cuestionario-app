@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new questionnaire</div>

                <div class="card-body">
                   <form action="{{ route('questionnaires.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" 
                                    class="form-control" 
                                    autocomplete="off" 
                                    id="title" 
                                    placeholder="Enter title" 
                                    aria-describedby="titleHellp"
                                    name="title"
                            
                            >
                            <small id="titleHellp" class="form-text text-muted">Give your questionnaire a title that attracts attention.</small>
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="purpose">Purpose</label>
                            <input type="text" 
                                    class="form-control" 
                                    autocomplete="off" 
                                    placeholder="Enter purpose"  
                                    id="purpose" 
                                    aria-describedby="purposeHellp"
                                    name="purpose"
                            >
                            <small id="purposeHellp" class="form-text text-muted">Give a purpose will increase responses.</small>

                            @error('purpose')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
