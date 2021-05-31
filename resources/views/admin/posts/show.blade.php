@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{route('admin.posts.index')}}">GET BACK</a>
    </div>
  </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h2>{{ $post->title }}</h2>
                  <h4>Category:
                    @if ($post->category)
                    {{$post->category->name}}
                    @endif
                  </h4>

                  <img src="{{asset($post->cover)}}" alt="{{$post->title}}">
                </div>
                <div class="card-body">
                    {{ $post->content }}
                </div>
                <div>
                  @foreach ($post->tags as $tag)
                    <a href="#"># {{$tag->name}}</a>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
