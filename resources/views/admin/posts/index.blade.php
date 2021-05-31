@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row mt-3">
    <ul>
      <li><a href="{{ route('admin.index')}}">DASHBOARD</a></li>
      <li><a href="{{ route('admin.posts.index')}}">POSTS</a></li>
      <li><a href="#">USERS</a></li>
      <li><a href="{{route('admin.categories.index')}}">CATEGORIES</a></li>
      <li><a href="{{route('admin.tags.index')}}">TAGS</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <a href="{{route('admin.posts.create')}}">Crea Post</a>
    </div>
  </div>
    <div class="row justify-content-center">
      @foreach ($posts as $post)
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              {{ $post->title }}
            </div>
            <div class="card-body">
                {{ $post->content }}
              <div class="">
                <a href="{{ route('admin.posts.show', ['post'=> $post->slug]) }}">Show</a>
                <a href="{{ route('admin.posts.edit', ['post'=> $post->id]) }}">Edit</a>
              </div>
              <form class="" action="{{ route('admin.posts.destroy', ['post'=> $post->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="my-btn-tr" type="submit" name="delete" value="Delete">
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
