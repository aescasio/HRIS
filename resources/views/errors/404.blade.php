{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<section>--}}
  {{--<h1>Page could not be found.</h1>--}}
  {{--<a href="{{ redirect()->getUrlGenerator()->previous()  }}" >Go Back to page</a>--}}

{{--</section>--}}
{{--@endsection--}}

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BCORP - HRIS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
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
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">

        <div class="title m-b-md">
            <p>
                <h1>404</h1>
                <h3><i class="fa fa-warming"></i>Oops! Page not found</h3>
                Could not find the page you were looking for.
                Meanwhile, you may <a href="{{ redirect()->getUrlGenerator()->previous() }}">return to dashboard</a>
            </p>

        </div>

        {{--<div class="links">--}}
            {{--<a href="{{ redirect()->getUrlGenerator()->previous() }}">Go back</a>--}}
        {{--</div>--}}
    </div>
</div>
</body>
</html>
