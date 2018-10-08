@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Create new post') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('post.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="description" class="col-sm-4 col-form-label text-md-right">{{ __('Description') }}</label>
    
                                    <div class="col-md-6">
                                        <textarea id="description"  class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="" rows="8" required autofocus></textarea>
    
                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="Submit" class="btn btn-primary">
                                        {{ __('Post') }}
                                    </button>
                                </div> 
                                @if (session('status'))
                                <div class="col-md-2 offset-md-6 justify-content-center alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <br>
            </div>
    </div>
</div>
@endsection
