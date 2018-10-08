@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <h3 class="pb-3 mb-4 font-italic border-bottom">
                        All the recent posts
                    </h3>
                
                    @foreach ($post as $p)
                        <div class="blog-post">
                            <div class="blog-post-title">
                                {{$p->title}}
                            </div>
                        <p class="blog-post-meta">{{$p->created_at}} by<a href="#"> {{$p->user->name}}</a></p>
                            <p>
                                {{$p->description}}
                            </p>
                        </div>
                    @endforeach

            </div>
        </div>
    </div>
@endsection
