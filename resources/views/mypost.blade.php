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
                                    <div class="action-forms">
                                          <form action="" method="get">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-white">Update</button>
                                          </form>
                                    <form action="{{route('post.destroy', $p->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" onclick="return confirm('Post will be deleted!')">Delete</button>
                                          </form>
                                    </div>      
                                    <hr>
                                    @endforeach

                              </div>
                        </div>                       
                  </div>
            </div>
      </div>
@endsection