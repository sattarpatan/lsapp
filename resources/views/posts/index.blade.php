@extends('layouts.app')

@section('content')
    <h2>Posts</h2>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_image/{{$post->cover_image}}" class="img-thumbnail">     
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written On: {{$post->created_at}}, by {{$post->user->name}} </small>                
                    </div>
                </div>
            </div>    
        @endforeach
        {{$posts->links()}}
    @endif
@endsection 


