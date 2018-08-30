@extends('layouts.layout')
@section('content')

<!-- News Start -->
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
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">البريد الوارد</h3>

                  <div class="box-tools pull-right">
                    <div class="has-feedback">
                      <input type="text" class="form-control input-sm" placeholder="إبحث">
                      <span class="fa fa-search form-control-feedback"></span>
                    </div>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                    </button>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                    </div>
                    <!-- /.btn-group -->
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                    <div class="pull-right">
                      1-50/200
                      <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                      </div>
                      <!-- /.btn-group -->
                    </div>
                    <!-- /.pull-right -->
                  </div>
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-bordered">
                      <tbody>
                            @forelse($messages as $message)
                            <tr>
                              <td><input type="checkbox"></td>
      
                              <td class="mailbox-name"><a href="{{route('viewMessage',$message->id)}}">{{$message->receiverUser->username}}</a></td>
                              <td class="mailbox-subject"> {{$message->title}}
                              </td>
                              <td class="mailbox-attachment"></td>
                              <td class="mailbox-date">منذ 5 دقايق</td>
                            </tr>
                           @empty 
                           <h3>لا يوجد رسايل حتي الان</h3>
                           @endforelse
                      </tbody>
                    </table>
                    <!-- /.table -->
                  </div>
                  <!-- /.mail-box-messages -->
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /. box -->
            </div>
        </div>
    </div>
</section>
    <!-- News End -->

@endsection