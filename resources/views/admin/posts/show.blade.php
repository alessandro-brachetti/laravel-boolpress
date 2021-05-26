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
                  {{ $post->title }}
                </div>

                <div class="card-body">
                    {{ $post->content }}
                  <div class="">
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
    </div>
  </div>
@endsection
