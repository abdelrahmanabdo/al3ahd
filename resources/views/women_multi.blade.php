@extends('layouts.layout')
@section('content')

<!-- Page Banner Start-->
<section class="page-banner page-banner-bg padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="p-white text-uppercase">نساء تقبل التعدد</h1>
        <!-- <p class="p-white">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p> -->
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->
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
      <div class="col-md-9 col-sm-8 col-xs-12">
        <div class="members">

            @forelse($multiUsers as $user)
            <!-- member -->
            <div class="member">
              <div class="row">
                <div class="col-md-2 col-sm-3 pdng-l-0">
                  <!-- profile-img-name -->
                  <div class="profile-img-name">
                    <div class="img-profile">
                      <img src="{{$user->profile_picture ? asset('storage/avatars/'.$user->profile_picture) : 'images/img-profile.jpg'}}" alt=""/>
                    </div>
                  </div>
                  <!-- //profile-img-name -->
                </div>
                <div class="col-md-10 col-sm-9">
                  <div class="profile-info">
                    <div class="name-profile">
                      <a href="{{'/profile/'.$user->id}}">{{$user->username}}</a>
                    </div>
                    <ul class="main-points">
                      <li data-toggle="tooltip" data-placement="top" title="الجنسية">
                        <i class="fa fa-address-card-o" aria-hidden="true"></i> {{$user->nationality}}
                      </li>
                      <li data-toggle="tooltip" data-placement="top" title="محل الاقامة">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> {{$user->country}}
                      </li>
                      <li data-toggle="tooltip" data-placement="top" title="العمر">
                        <i class="fa fa-birthday-cake" aria-hidden="true"></i> {{$user->age}}
                      </li>
                      <li data-toggle="tooltip" data-placement="top" title="المهنة">
                        <i class="fa fa-briefcase" aria-hidden="true"></i> {{$user->profession}}
                      </li>
                      <li data-toggle="tooltip" data-placement="top" title="هل لدى الاطفال">
                        <i class="fa fa-child" aria-hidden="true"></i>
                        @if($user->children === 0)
                        ليس لديه الاطفال
                    @elseif($user->children === 1)
                    طفل
                    @elseif($user->children === 2)
                    طفلين
                    @elseif($user->children === 3)
                    3 أطفال
                    @elseif($user->children === 4)
                    4 أطفال
                    @elseif($user->children === 5)
                    5 أطفال
                    @endif
                      </li>
                    </ul>
                    <p>
                            {{$user->about_me}}
                    </p>
                    <div class="more-info">
                      <!-- <div class="pull-right"></div>
                        <div class="pull-left"></div> -->
                      <a href="{{'/profile/'.$user->id}}">صفحتى الشخصية</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @empty
              <h3 class="well">لا يوحد نتائج</h3>
            @endforelse

          <!-- //member -->

        </div>
        <div class="row">
          <div class="padding_bottom text-center">
            <ul class="pager">
             {{$multiUsers->links()}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- News End -->

@endsection
