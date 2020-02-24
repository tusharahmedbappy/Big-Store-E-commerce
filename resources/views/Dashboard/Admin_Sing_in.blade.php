<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Big | Store </title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jstarbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
<div class="login">

    <div class="main-agileits">
        <div class="form-w3agile">
            <h3>Login</h3>
            <form action="{{url('/login')}}" method="post">
                @csrf

                <div class="form-group">
                    <div class="">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <div class="">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <i class="fa fa-lock"></i>
                    </div>
                    <span class="text-danger">
                        @error('password')
                        {{$message}}
                        @enderror
                    </span>

                    <span class="text-danger">
                        @if (session('incorrect'))
                            {{session('incorrect')}}
                        @endif
                    </span>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="forg">
            <a href="#" class="forg-left">Forgot Password</a>
            <a href="{{url('/sing-up')}}" class="forg-right">Register</a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/jstarbox.js')}}"></script>
<script type="{{asset('assets/text/javascript')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/easing.js')}}"></script>
</body>
</html>
