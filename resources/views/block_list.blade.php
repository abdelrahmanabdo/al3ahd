@extends('layouts.layout')
@section('content')

<section id="news-section-1" class="property-details padding_top">
        <div class="container">
            <div class="row">
                <aside class="col-md-3 col-sm-4 hidden-xs">
                        <!-- widget -->
                        @guest
                        <div class="widget">
                            <div class="widget-header">
                                <h3>تسجيل الدخول</h3>
                            </div>
                            @if (session('alert'))
                            <div class="row">
                            
                                <div class="alert alert-success col-md-12 ">
                                    {{ session('alert') }}
                                </div>
                            </div>
                            @endif
                            
                            
                            @if ($errors->any())
                            <div class="row">
                            
                                <div class="alert alert-danger col-md-12 ">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                            <div class="widget-body">
                                <form class="widget-login " action="{{route('login')}}" method="POST" >
                                        @csrf
                                        <div class="form-group">
                                                <label for="exampleInputEmail1">البريد الإلكترونى</label>
                                                <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="البريد الإلكترونى">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">كلمة المرور</label>
                                                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="كلمة المرور">
                                            </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                {{--  <div class="checkbox pull-left">
                                                    <label>
                                                        <input type="checkbox"> تذكرنى
                                                    </label>
                                                </div>  --}}
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="checkbox pull-right">
                                                    <a href="fotget-password.html">نسيت كلمة المرور</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default btn-block">تسجيل دخول</button>
                                    </div>
                                    <div class="new-account-link">ليس لدى حساب. <a href="{{route('new-account')}}"> إنشاء حساب</a></div>
                                </form>
                            </div>
                        </div>
                        @endguest
                        <!-- //widget -->
                        <!-- widget -->
                        @auth
                        <div class="widget">
                            <div class="widget-profile">
                                <ul class="account-control">
                                    <li class="with-notify">
                                        <a href="{{route('receivedInbox',auth()->user()->id)}}">
                                            <i class="fa fa-inbox"  aria-hidden="true"></i> البريد الوارد
                                        </a>
                                    </li>
                                    <li><a href="{{route('sentInbox',auth()->user()->id)}}">
                                            <i class="fa fa-paper-plane" aria-hidden="true"></i> البريد الصادر
                                        </a></li>
                                    <li><a href="{{route('blockList')}}">
                                            <i class="fa fa-ban" aria-hidden="true"></i> قائمة الحظر
                                        </a></li>
                                    <li><a href="{{url('/profile-settings/'.auth()->user()->id)}}">
                                            <i class="fa fa-sliders" aria-hidden="true"></i>إعدادات الحساب
                                        </a></li>
                                    <li><a href="{{route('change_password')}}">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>تغيير كلمة المرور
                                        </a></li>
                                    <li><a href="{{route('removeAccount')}}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>حذف عضويتى من الموقع
                                        </a></li>
                                    <li><a href="sent-manager.html">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>مراسلة إدارة الموقع
                                        </a></li>
                                    <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="btn-cart">تسجيل خروج</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form></li>
                                </ul>
                            </div>
                        </div>
                        @endauth
                </aside>
                <div class="col-md-9 col-sm-8">
                  <div class="list-t-border">
                    <div class="bg-hover">
                      <div class="my-pro-list">
                        <div class="col-md-2 col-sm-2 col-xs-3">
                          <img src="images/user-img.jpg" alt="image" class="img-responsive">
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-6">
                          <div class="feature-p-text">
                            <h4>عبد الرحمن عبده شعبان</h4>
                            <p>بنى سويفيا - متزوج و يعول - لديه 12 طفل </p>
                            <span><b>تاريخ الحظر:</b>  7-7-2017</span>
                          </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-3">
                          <div class="select-pro-list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="إلغاء الحظر"><i class="icon-pen2"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="حذف"><i class="icon-cross"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="bg-hover bg-color-gray">
                      <div class="my-pro-list">
                        <div class="col-md-2 col-sm-2 col-xs-3">
                          <img src="images/user-img.jpg" alt="image" class="img-responsive">
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-6">
                          <div class="feature-p-text">
                            <h4>عبد الرحمن عبده شعبان</h4>
                            <p>بنى سويفيا - متزوج و يعول - لديه 12 طفل </p>
                            <span><b>تاريخ الحظر:</b>  7-7-2017</span>
                          </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-3">
                          <div class="select-pro-list">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="إلغاء الحظر"><i class="icon-pen2"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="حذف"><i class="icon-cross"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

            </div>
        </div>
    </section>

@endsection