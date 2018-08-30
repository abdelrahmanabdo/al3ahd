@extends('layouts.layout')

@section('content')

<!-- Page Banner Start-->
<section class="page-banner page-banner-bg padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="p-white text-uppercase">تسجيل الدخول</h1>
        <!-- <p class="p-white">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p> -->
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->
<!-- Login -->
<section id="login" class="padding">
  <div class="container">
    <h3 class="hidden">hidden</h3>
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 text-center">
        <div class="profile-login">
          <div class="agent-p-form">
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
            <form action="{{route('login')}}" method="POST" class="callus clearfix">
            @csrf
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" id="username" name="username" required value="" placeholder="اسم المستخدم" class="form-control">
              </div>
              <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" id="password" required name="password" placeholder="الرمز السري" class="form-control">
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="col-sm-6">
                    <div class="search-form-group white form-group text-left">
                      <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                      <span>تذكرنى</span>
                    </div>
                  </div>
                  <div class="col-sm-6 text-right">
                    <a href="#" class="lost-pass">نسيت كلمة المرور</a>
                  </div>
                </div>
              </div>
              <div class=" col-sm-12">
                <button type="submit" class="btn-slide border_radius margin-bottom-20">دخول</button>
              </div>
              <div class="new-account-link">ليس لدى حساب. <a href="{{route('new-account')}}"> إنشاء حساب</a></div>
            </form>
          </div>
          <!-- Nav tabs -->
          <!-- <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">تسجيل دخول</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">إشتراك جديد</a></li>
          </ul> -->
          <!-- Tab panes -->
          <!-- <div class="tab-content padding_half">
            <div role="tabpanel" class="tab-pane fade in active" id="home">
              <div class="agent-p-form">
                <form action="#" class="callus clearfix">
                  <div class="single-query form-group col-sm-12">
                    <input type="text" class="keyword-input" placeholder="إسم المستخدم">
                  </div>
                  <div class="single-query form-group  col-sm-12">
                    <input type="password" class="keyword-input" placeholder="كلمة المرور">
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="col-sm-6">
                        <div class="search-form-group white form-group text-left">
                          <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                          <span>تذكرنى</span>
                        </div>
                      </div>
                      <div class="col-sm-6 text-right">
                        <a href="#" class="lost-pass">نسيت كلمة المرور</a>
                      </div>
                    </div>
                  </div>
                  <div class=" col-sm-12">
                    <input type="submit" value="تسجيل دخول" class="btn-slide border_radius">
                  </div>
                </form>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="profile">
              <div class="agent-p-form">
                <form class="callus clearfix">
                  <div class="single-query col-sm-12 form-group">
                    <input type="text" class="keyword-input" placeholder="إسم المستخدم" required>
                  </div>
                  <div class="single-query col-sm-12 form-group">
                    <input type="text" class="keyword-input" placeholder="البريد الإلكترونى">
                  </div>
                  <div class="single-query col-sm-12 form-group">
                    <input type="password" class="keyword-input" placeholder="كلمة المرور">
                  </div>
                  <div class="single-query col-sm-12 form-group">
                    <input type="password" class="keyword-input" placeholder="تأكيد كلمة المرور" readonly>
                  </div>
                  <div class="search-form-group white col-sm-12 form-group text-left">
                    <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                    <span>
                      قسم بالله العظيم أني لم أدخل هذا الموقع الا بهدف الزواج الشرعي وفق كتاب الله و سنة رسوله , وليس لأي هدف آخر . وأعاهد الله وأعاهدكم على أن لا أضيع تعب الموقع , وأن لا أخدع الأعضاء , وأن أكون صادقا مع الله ثم مع نفسي , وأن ألتزم بشروط الموقع , و شروط المراسلة فيه , عسى ربي يكتب لي الخير في هذا المكان . والله خير الشاهدين
                    </span>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="query-submit-button">
                      <input type="submit" value="إنشاء حساب جديد" class="btn-slide">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Login end -->

@endsection
