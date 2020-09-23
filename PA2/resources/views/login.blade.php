<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-4.3.1/css/bootstrap.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('/css/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/css/active.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

</head>
<body>
<div id="parent">
    <form class="form_login" method="post" action="{{route('login2')}}">
    @csrf
        <div class="row">
            <div class="col-md-12 img">
                <img src="{{asset('/image/logo_del_transparent.png')}}" alt="">
            </div>
            <div class="col-md-12 img"><p>Institut Teknologi Del</p></div>
            <div class="container-fluid">     
                <div class="col-md-12"><p>Username</p></div>
                <div class="col-md-12"><input name="username" class="inputLogin" type="text" placeholder="Username"></div>
                <div class="col-md-12"><p class="p">Password</p></div>
                <div class="col-md-12"><input name="password" class="inputLogin" type="password" placeholder="Password"></div>
                <div class="col-md-12">
                    @if (Session::has('error'))
                        <div class="alert-info"><p>{{ Session::get('error') }}</p></div>
                    @endif
                </div>
                <div class="col-md-12 btn-login"><input type="submit" value="Login" class="btn-tema2 " ></div>
            </div>       
        </div>
    </form>
</div>
 
</body>
</html>