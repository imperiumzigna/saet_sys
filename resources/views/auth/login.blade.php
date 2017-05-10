<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('PageTitle')</title>
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="{{url('css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">

    <script src="{{ url('js/jquery.min.js') }}"></script>
@yield('stylesheets')
@show
<!--[if lt IE 9]
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body >
<div style="padding-bottom: 120px"></div>
    <!-- /.login-logo -->
    <div class="login-block">
        <div class="logo">
        </div>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <div class="col-md-12">
                    <input id="usr_email" type="email" class="form-control" name="usr_email" value="{{ old('usr_email') }}" placeholder="E-mail" required autofocus>
                    @if ($errors->has('usr_email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('usr_email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-md-12">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-flat col-md-6">
                        Login
                    </button>
                </div>
                <div class="col-md-6 pull-right">
                    <a class="btn btn-link" href="{{ url('/password/reset') }}">

                    </a>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 text-center">
                    <a href="{{url('/register')}}" class="btn btn-success btn-flat col-md-12">
                        Cadastrar
                    </a>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 pull-left">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember">
                        </label>
                    </div>
                </div>
            </div>
        </form>
        <div class="social-auth-links text-center">
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Login
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Login
                Google+</a>
        </div>

    </div>

    <!-- /.login-box-body -->
</div>


<!-- /.login-box -->
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/jquery.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ url('js/icheck.min.js') }}"></script>

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
