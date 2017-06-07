<!DOCTYPE html>
<html>
<head>
    @include('templates.includes.header')
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <!-- Auth Links -->


            <!-- Mensagens -->
            <div class="navbar-custom-menu ">
                <ul class="nav navbar-nav">

                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            
                            <span class="label label-warning alert-counter"></span>
                        </a>
                        <ul class="dropdown-menu alerts-dropdown">

                        </ul>
                    </li>
                    <li class="dropdown">
                    @if (Auth::guest())
                    @else
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->usr_nome }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="user-body">
                                    <a href="{{ url('/home') }}">
                                        <i class="fa fa-dashboard"></i> Painel de notícias
                                    </a>
                                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> Logout
                                        {{ csrf_field() }}
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                        </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the sidebar -->
@include('templates.includes.sidebar')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                @yield('Title')
                <small>@yield('Subtitle')</small>


                <div class="form-inline pull-right" style="margin-left: 5px;">
                    @yield('Button')
                </div>

            </h1>
        </section>
        <section class="content">
            @yield('Content')
            <div class="text-center">
                @yield('Paginate')
            </div>
        </section>

    </div>

    @include('templates.includes.footer')
</div>
<!-- /.content-wrapper -->
<div class="control-sidebar-bg"></div>
<!-- ./wrapper -->
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/tooltip.js') }}"></script>
<script src="{{ url('js/fastclick.min.js')}}"></script>
<script src="{{ url('js/admin-lte.min.js') }}"></script>
<script src="{{ url('js/jquery.sparkline.min.js') }}"></script>
<script src="{{ url('js/base.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
@yield('Scripts')
</body>
</html>
