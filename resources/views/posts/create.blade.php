@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', array_merge(['class' => 'form-control', 'placeholder'=>'Title'])) }}
        </div> 
        
        <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', '', array_merge(['id'=>'article-ckeditor','class' => 'form-control', 'placeholder'=>'Body Text'])) }}
        </div> 

        <div class="form-group">
            {{ Form::file('cover_image', '', array_merge(['id'=>'article-ckeditor','class' => 'form-control', 'placeholder'=>'Body Text'])) }}
        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection