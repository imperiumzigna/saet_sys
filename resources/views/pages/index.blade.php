<!DOCTYPE html>
<html lang="en" class="template-color-21DC7F">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SAET</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{url('css/main2.css')}}" rel="stylesheet" />
    <link href="{{url('css/responsive2.css')}}" rel="stylesheet" />
    <link id="colors" href="{{url('css/colors/default.css')}}" rel="stylesheet" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{url('css/vendor.css')}}">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{url('css/simple-line-icons.css')}}" />
    <link rel="stylesheet" href="{{url('css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800|Montserrat:400,700">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ url('js/html5shiv.js') }}"></script>
    <script src="{{ url('js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body>
<!-- header
================================================== -->
<header>
    <div class="row-header">
        <div class="logo">
            <a href="#" class="logo-light"></a>
        </div>
        <nav id="main-nav-wrap">
            <ul class="main-navigation">
                <li class="menu-drop"><a class="smoothscroll" href="#" title="">Home <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                </li>
                <li><a class="smoothscroll" href="#" title="">Sobre</a></li>
                <li class="menu-drop"><a class="smoothscroll" href="" title="">Programação <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                </li>
                <li class="highlight with-sep"><a href="{{ route('login')}}" title="">Login</a></li>
            </ul>
            <!-- Starts Mobile Menu -->
            <ul class="main-navigation-mobile">
                <li class="mobile-title"><a href="#" title="">Home</a>
                </li>
                <li class="mobile-title"><a href="#">Sobre</a>

                </li>
                <li class="mobile-title"><a href="#" title="">Programação</a>
                </li>
                <li class="mobile-title"><a href="{{ route('login')}}" title="">Login</a>
                </li>
            </ul>
            <!-- End Mobile Menu -->
        </nav>
        <a class="menu-toggle" href="#"><span>Menu</span></a>
    </div>
</header>
<!-- /header -->
<section id="hero" class="hero">
    <div id="particles-js">
        <div class="cnt-hero-content">
            <div class="hero-box">
                <div class="container">
                    <div class="hero-text align-center">
                        <h1>Semana de Engenharia e Tecnologia</h1>
                        <p>UEMA</p>
                    </div>
                    <div class="action-main">
                        <a href="{{route('login')}}" class="no-decoration cnt-btn">Inscreva-se</a>
                    </div>
                </div>
                <div class="wheel-wrap">
                    <span class="mousewheel"></span>
                </div>
            </div>
        </div>
    </div>
</section>

@if(!empty($pages))
@foreach($pages as $section)
    <section id="services">
        <div class="cnt-services-bg">
            <div class="container">
                <h1>{{$section->section_title}}</h1>
                <p class="title-txt">{{$section->section_description}}</p>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-centered item-container">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 item-services">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 item-services">
                            <img width="150px" src="{{url('img/' .  $section->section_images )}}">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 item-services">
                        </div>
                    </div>
                </div>
                <!-- //.row -->
            </div>
            <!-- //.container-->
        </div>
        <!-- //.cnt-services-bg -->
    </section>
@endforeach
@endif

<footer>
    SAET
</footer>
<!-- jQuery -->
<script src="{{url('js/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{url('js/bootstrap.min.js')}}"></script>
<!-- Main -->



</body>

</html>
