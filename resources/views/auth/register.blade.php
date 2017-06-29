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

    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="#"><b>Saet</b> {{env('ANO')}}</a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Cadastrar novo usuário</p>

                <form action="{{url('/register')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group has-feedback">
                        <input name="usr_name" type="text" class="form-control" placeholder="Nome completo">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input name="usr_email" type="email" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input name="cpf" type="text" class="form-control" placeholder="CPF">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <select name="usr_papel" class="form-control">
                            <option value="visitante">Visitante</option>
                        </select>
                    </div>
                    <div class="form-group has-feedback">
                        <input name="password" type="password" class="form-control" placeholder="Senha">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div>

        <script src="{{ url('js/bootstrap.min.js') }}"></script>
        <script src="{{ url('js/jquery.min.js') }}"></script>
        <!-- iCheck -->
        <script src="{{ url('js/icheck.min.js') }}"></script>

    </body>
