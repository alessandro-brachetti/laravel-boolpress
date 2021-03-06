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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
