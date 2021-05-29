<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .form {
                text-align: center;
                width: 100%;
            }
            .form-horizontal input, textarea {
                margin: 10px auto;
                width: 50%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('admin.index') }}">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    Boolpress
                </div>

                <div class="links">
                  <a href="{{route('posts.index')}}">Posts</a>
                </div>
            </div>
            
        </div>
        <div class="form">     
            <h3>CONTATTACI</h3>
            <form class="form-horizontal" action="{{route('contact')}}" method="post">
            @csrf
            @method('POST')

            <div class="form-group">
              <label for="name">Nome</label>
              <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}">
              @error('name')
                <small class="text-danger"> {{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control @error('email') is-invalid @enderror" id="email" type="text" name="email" value="{{ old('email') }}">
              @error('email')
                <small class="text-danger"> {{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="subject">Subject</label>
              <input class="form-control @error('subject') is-invalid @enderror" id="subject" type="text" name="subject" value="{{ old('subject') }}">
              @error('subject')
                <small class="text-danger"> {{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="content">Message</label>
              <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" value="">{{ old('content') }}</textarea>
              @error('content')
                <small class="text-danger"> {{ $message }}</small>
              @enderror
            </div>
            <button class="btn btn-primary" type="submit name="button">Invia</button>
            </form>

        </div>
        
    </body>
</html>
