<!DOCTYPE html>
<html lang="en">
@php 

use App\GeneralSettings;
$settings = GeneralSettings::select('email','mobile_number')->first();
@endphp
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>العهد</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-arabic.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/reality-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootsnav.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.transitions.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cubeportfolio.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/range-Slider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/search.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="icon" href="{{asset('images/icon.png')}}">
    @if (in_array(Route::currentRouteName(), ['/contact']))
    <style type="text/css">
        #map-search {
               height:450px;
           width:100%;
             }
             .controls {
               margin-top: 10px;
               border: 1px solid transparent;
               border-radius: 2px 0 0 2px;
               box-sizing: border-box;
               -moz-box-sizing: border-box;
               height: 32px;
               outline: none;
               box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
             }

             #pac-input {
               background-color: #fff;
               font-family: Roboto;
               font-size: 15px;
               font-weight: 300;
               margin-left: 12px;
               padding: 0 11px 0 13px;
               text-overflow: ellipsis;
               width: 300px;
             }

             #type-selector {
               color: #fff;
               background-color: #4d90fe;
               padding: 5px 11px 0px 11px;
             }

             #type-selector label {
               font-family: Roboto;
               font-size: 13px;
               font-weight: 300;
             }
             #target {
               width: 345px;
             }


       button[id="search-button"] {
           margin-left: -50px;
           margin-top: 10px;
           height: 32px;
           width: 50px;
           background: blue;
           color: white;
           border: 0;
           -webkit-appearance: none;
       }


       </style>
    @endif
</head>

<body>
    <!--Loader-->
    <div class="loader">
        <div class="span">
            <div class="location_indicator"></div>
        </div>
    </div>
    <!--Loader-->
  @if (in_array(Route::currentRouteName(), ['/', 'home']))
    @include('sections.slider') @endif
    <!--Header-->
    <div id="mainMenuBarAnchor"></div>
    @if (in_array(Route::currentRouteName(), ['/', 'home']))
    <header class="white_header">
    @endif
    @if (!in_array(Route::currentRouteName(), ['/', 'home']))
    <header class="layout_default">
    <div class="topbar grey">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p>السلام عليكم و رحمة الله و بركاته</p>
                </div>
                <div class="col-md-7 text-right">
                    <ul class="breadcrumb_top text-right">
                        <li><a href="{{route('about')}}"><i class="icon-icons43"></i>من نحن</a></li>
                        <li><a href="{{route('contact')}}"><i class="icon-telephone114"></i>إتصل بنا</a></li>
                        <!-- <li><a href="my_properties.html"><i class="icon-icons215"></i>My Property</a></li> -->
                        @auth
                  <li><a href="{{url('/profile/'.Auth::user()->id)}}"><i class="icon-icons230"></i>الصفحة الشخصية</a></li>
                  @endauth
                  @guest
                        <li><a href="{{route('login')}}"><i class="icon-icons179"></i>تسجيل دخول / إشتراك</a></li>
                  @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @if (!in_array(Route::currentRouteName(), ['/', 'home' ,'profile' , 'profile-settings']))

    <div class="header-upper">
            <div class="container">
              <div class="row">
                <div class="col-md-3 col-sm-12">
                  <div class="logo"><a href="index.html"><img alt="" src="images/logo.png"></a></div>
                </div>
                <!--Info Box-->
                <div class="col-md-9 col-sm-12 left">
                  <div class="info-box first">
                    <div class="icons"><i class="icon-telephone114"></i></div>
                    <ul>
                      <li><strong>رقم الهاتف</strong></li>
                      <li><a href="{{@$settings->mobile_number}}">{{@$settings->mobile_number}}</a></li>
                    </ul>
                  </div>
                  <div class="info-box">
                    <div class="icons"><i class="icon-icons142"></i></div>
                    <ul>
                      <li><strong>البريد الإلكترونى</strong></li>
                      <li><a href="{{@$settings->email}}">{{@$settings->email}}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
    @endif
    
    @endif
        <nav class="navbar navbar-default navbar-sticky bootsnav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="attr-nav">
                            <ul class="clearfix">
                                @guest
                                  <a class="btn-touch" href="{{ route('login') }}">{{ __('تسجيل دخول') }}</a>
                                  <a class="btn-touch" href="{{ route('new-account') }}">{{ __('انشاء حساب') }}</a>
                                @else
                                <li class="dropdown">
                                    <a href="{{url('/profile/'.Auth::user()->id)}}" class="dropdown-toggle user-profile" data-toggle="dropdown">
                <img src="{{Auth::user()->profile_picture ? asset('storage/avatars/'.Auth::user()->profile_picture) : 'images/img-profile.jpg'}}" alt=""/>
                <span class="badge"></span>
                <span class="">{{ Auth::user()->username }}</span>
                </a>
                                    <ul class="dropdown-menu cart-list animated fadeOutUp" style="display: none; opacity: 1;">
                                        @guest
                                        <li>
                                            <a href="{{route('login')}}" class=""><i class="fa fa-user-o" aria-hidden="true"></i> تسجيل دخول</a>
                                        </li>
                                        <li>
                                            <a href="{{route('register')}}" class="">عضوية جديدة</a>
                                        </li>
                                        @endguest
                                        @auth
                                        <li>
                                            <a href="{{asset('/profile-settings/'.Auth::user()->id)}}" class="">إعدادات الحساب</a>
                                        </li>
                                        <li class="total">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="btn-cart">تسجيل خروج</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                        @endauth
                                    </ul>
                                </li>
                                @endguest
                            </ul>
                        </div>
                        
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
            </button>
                            <a class="navbar-brand" href="{{route('home')}}" ><img src="images/logo.png" class="logo" alt=""></a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                                   
                                <li  @if(in_array(Route::currentRouteName(), ['home']))
                                class="active" 
                               @endif><a href="{{route('home')}}" >الرئيسية </a></li>
                                <li  @if(in_array(Route::currentRouteName(), ['special-members']))
                                class="active" 
                               @endif><a href="{{route('special-members')}}">أعضاء متميزين</a></li>
                                <li  @if(in_array(Route::currentRouteName(), ['new-members']))
                                class="active" 
                               @endif><a href="{{route('new-members')}}">مشتركين جدد</a></li>
                                <li  @if(in_array(Route::currentRouteName(), ['women-mesiar']))
                                class="active" 
                               @endif><a href="{{route('women-mesiar')}}">نساء تقبلن زواج مسيار</a></li>
                                <li  @if(in_array(Route::currentRouteName(), ['women-multi']))
                                class="active" 
                               @endif><a href="{{route('women-multi')}}">نساء تقلبن التعدد</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--Header Ends-->

    @if (in_array(Route::currentRouteName(), ['/', 'home']))
    @include('sections.slider-form') @endif
