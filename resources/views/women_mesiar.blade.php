@extends('layouts.layout')
@section('content')

<!-- Page Banner Start-->
<section class="page-banner page-banner-bg padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="p-white text-uppercase">عنوان الصفحة</h1>
        <p class="p-white">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
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
          <div class="widget-body">
            <form class="widget-login">
              <div class="form-group">
                <label for="exampleInputEmail1">البريد الإلكترونى</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="البريد الإلكترونى">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">كلمة المرور</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور">
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-5">
                    <div class="checkbox pull-left">
                      <label>
                      <input type="checkbox"> تذكرنى
                      </label>
                    </div>
                  </div>
                  <div class="col-xs-7">
                    <div class="checkbox pull-right">
                      <a href="fotget-password.html">نسيت كلمة المرور</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default btn-block">تسجيل دخول</button>
              </div>
              <div class="new-account-link">ليس لدى حساب. <a href="new-account.html"> إنشاء حساب</a></div>
            </form>
          </div>
        </div>
        <!-- //widget -->
        <!-- widget -->
        @endguest
        @auth
        <div class="widget">
          <div class="widget-profile">
            <div class="widget-profile-img">
              <img src="{{Auth::user()->profile_picture ? asset('storage/avatars/'.Auth::user()->profile_picture) : 'images/img-profile.jpg'}}" alt=""/>
            </div>
            <ul class="widget-profile-linls">
              <li class="widget-profile-user"><a href="{{url('/profile/'.Auth::user()->id)}}">{{Auth::user()->username}}</a></li>
              <li><a href="{{url('/profile-settings/'.Auth::user()->id)}}">إعدادات الحساب</a></li>
              <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="btn-cart">تسجيل خروج</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </li>
            </ul>
          </div>
        </div>
        @endauth
        <!-- //widget -->
        <!-- widget -->
        <div class="widget">
          <div class="widget-header">
            <h3>بحث سريع</h3>
          </div>
          <div class="widget-body">
            <ul class="tags">
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج مصرى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج إماراتى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج سعودى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> يرغب زوجة ثانية</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج مسيار</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج أميريكى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوجة مصرية</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> مطلقة</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> أرمل</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج قطرى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> أرملة</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> أنسة</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوجة مسيارة</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج عمانى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> مطلق</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج سودانى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> أعزب</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج مصرى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج إماراتى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج سعودى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> يرغب زوجة ثانية</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج مسيار</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج أميريكى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوجة مصرية</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> مطلقة</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> أرمل</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج قطرى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> أرملة</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> أنسة</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوجة مسيارة</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج عمانى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> مطلق</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> زوج سودانى</a></li>
              <li><a href="javascript:void(0)"><i class="fa fa-tags" aria-hidden="true"></i> أعزب</a></li>
            </ul>
          </div>
        </div>
        <!-- //widget -->
        <!-- widget -->
        <!-- <div class="widget">
          <div class="widget-header">
            <h3>تسجيل الدخول</h3>
          </div>
          <div class="widget-body">
            عاااااااااااا
          </div>
          </div> -->
        <!-- //widget -->
      </aside>
      <div class="col-md-9 col-sm-8 col-xs-12">
        <div class="members">

            @foreach($mesiarUsers as $user)
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
                      <a href="{{url('/profile/'.$user->id)}}">صفحتى الشخصية</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @endforeach

          <!-- //member -->
          
        </div>
        <div class="row">
          <div class="padding_bottom text-center">
            <ul class="pager">
             {{$mesiarUsers->links()}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- News End -->

@endsection