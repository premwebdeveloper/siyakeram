<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<script src="{{ asset('resources/frontend_assets/js/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('resources/frontend_assets/js/bootstrap.min.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('resources/frontend_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/frontend_assets/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/frontend_assets/css/overrideade.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/frontend_assets/css/custom.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Tangerine:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300|Roboto:300,400,400i,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Squada+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="frontend_assets/css/font-awesome.min.css" media="screen" type="text/css" />
    <script>
        $(document).ready(function(){
            $('#siyadrop').on('click',function(){
                $('.dropdown-menu').css({
                    'display':'block'
                });
            });
        });
    </script>
</head>

<body class="non-loggedin">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="nav-top-bar row top-nav">
            <div class="wrapper">
              <div class="float-left"><span>Build 90% or above Trust Score & Get FLAT 50% off*</span></div>
              <div class="float-right"><span class="pipe">Call +91-124-265 0000 (India)</span>
                <span class="pipe"><a href="mailto:support@demo.com"> support@demo.com</a></span>
             <span> <a href="javascript:;">Live Support </a></span></div>
            </div>
        </div>
        <div class="container-fluid">
          <div class="wrapper">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                    <span class = "sr-only">Toggle navigation</span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('resources/frontend_assets/images/lv.png')}}" alt="lovevivah logo">
                </a>
            </div>
            <div  class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('search') }}">Search</a></li>
                <li><a href="{{ route('membership') }}">MEMBERSHIP</a></li>
                <li><a href="{{ route('horoscope') }}">FREE HOROSCOPE</a></li>
                <li><a href="{{ route('help') }}">HELP</a></li>

                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Free Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" id="siyadrop" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" id="#ramdrop">
                            <li>
                                <a href="javascript:;" title="Profile">
                                    Profile
                                </a>
                                <a href="{{ route('change_password') }}" title="Change Password">
                                    Change Password
                                </a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" title="Logout">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest

                <li class="mobile-link-text"><a href="mailto:support@demo.com">support@lovevivah.com</a></li>
                <li class="mobile-link-text"><a href="javascript:void(0)" >support +91-124-265 0000 (India)</a></li>
              </ul>
            </div>
          </div>
        </div>
    </nav><!--Header End-->