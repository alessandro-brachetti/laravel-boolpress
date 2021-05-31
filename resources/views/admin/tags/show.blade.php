@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{route('admin.tags.index')}}">GET BACK</a>
    </div>
  </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h2>{{$tag->name}}</h2>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
