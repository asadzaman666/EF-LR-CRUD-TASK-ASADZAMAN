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

{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,700,900,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                           <div class="blog-post">
                               <div class="blog-post-title">
                                   This is a blog post
                               </div>
                               <p>
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. At ex quae accusantium eum impedit vitae modi eius, molestias maiores tempore. Perferendis officiis temporibus omnis culpa iusto aliquid nobis, debitis pariatur.
                               </p>
                           </div>
                        </div>
                    </div>
                </div>
        </div>

    </body>
</html> --}}
