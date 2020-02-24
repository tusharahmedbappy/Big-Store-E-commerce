<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Big | Store </title>
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/argon-dashboard.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">
{{--    <link rel="stylesheet" href="{{asset('assets/css/jstarbox.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
<div class="login">
    <div class="main-agileits">
        <div class="form-w3agile form1">
            <h2 class="text-success text-center">Register</h2>
            <div class="text-center singup_with my-4">
                <button class="btn btn-danger px-5">Google</button>
                <button class="btn btn-dark px-5">Github</button>
            </div>
            <br>
            <form action="{{url('/register')}}" method="post">
                @csrf

                <div class="form-group" >
                    <div class="">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                        <i class="fa fa-user"></i>
                    </div>
                    <span class="text-danger">
                        @error('username')
                        {{$message}}
                        @enderror
                    </span>
                </div>

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
                </div>

                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="forg">
            <a href="{{url('/sing-in')}}" class="forg-right">Back to login</a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/jstarbox.js')}}"></script>
</body>
</html>

