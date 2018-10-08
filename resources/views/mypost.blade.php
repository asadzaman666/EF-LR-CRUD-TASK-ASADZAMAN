@extends('layouts.app')

@section('content')
      <div class="container">
            <div class="row justify-content-center">
                  <div class="col-md-10">
                        <div class="card">
                              <div class="card-header">My posts</div>
                  
                              <div class="card-body">
                  
                                    @foreach ($post as $p)
                                    <div class="blog-post">
                                          <div class="blog-post-title">
                                                {{$p->title}}
                                          </div>
                                          <p class="blog-post-meta">{{$p->created_at}}</p>
                                          <p>
                                                {{$p->description}}
                                          </p>
                                          </div>
                                    @endforeach
                                    
                              </div>
                        </div>                       
                  </div>
            </div>
      </div>
@endsection