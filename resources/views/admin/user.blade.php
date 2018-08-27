@extends('admin.layout')

@section('adminContent')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            لوحة التحكم
            <small>لمحتوى الاحصائيات و اخر النشاطات</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> العهد</a></li>
            <li class="active">لوحة التحكم</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
    
                @if (session('alert'))
                <div class="row">
                
                    <div class="alert alert-success col-md-10 col-md-offset-1">
                        {{ session('alert') }}
                    </div>
                </div>
                @endif
          <div class="row">
            <div class="col-md-3" style="float:right">
    
              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="{{asset('/storage/avatars/'.$user->profile_picture)}}" alt="User profile picture">
    
                  <h3 class="profile-username text-center"> {{$user->username}}</h3>
    
                  <p class="text-muted text-center">{{$user->social_status}}</p>
    
                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>المهنة</b> <a class="pull-right"> {{$user->profession}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>المستوى التعليمى</b> <a class="pull-right"> {{$user->education}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>البريد الإلكترونى</b> <a class="pull-right">{{$user->email}}</a>
                    </li>
                  </ul>
                  @if($user->membership_type === "normal") 
                  <a href="{{route('subscribeUser',$user->id)}}" class="btn btn-primary btn-block"><b>ترقية عضوية</b></a>
                  @endif

                  @if($user->membership_type === "special") 
                  <a href="{{route('unsubscribeUser',$user->id)}}" class="btn btn-primary btn-block"><b> الغاء ترقية العضو</b></a>
                  @endif
                  <a href="compose.html" class="btn btn-success btn-block"><b>إرسال رسالة</b></a>
                  @if($user->isBlocked === 0) 
                  <a href="{{route('blockUser',$user->id)}}" class="btn btn-danger btn-block"><b>حظر</b></a>
                  @endif
                  @if($user->isBlocked === 1)
                  <a href="{{route('unblockUser',$user->id)}}" class="btn btn-danger btn-block"><b> الغاء الحظر</b></a>
                  @endif
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
    
              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">نبذة عن {{$user->username}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i> معلومات</strong>
    
                  <p class="text-muted">
                    {{$user->about_me}}
                  </p>
                  <hr>
                  <strong><i class="fa fa-map-marker margin-r-5"></i> محل الاقامة</strong>
                  <p class="text-muted"> {{$user->city . " , "}}{{$user->country}} </p>

                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#settings" data-toggle="tab">الاعدادات</a></li>
                  <!-- <li><a href="#activity" data-toggle="tab">Activity</a></li>
                  <li><a href="#timeline" data-toggle="tab">Timeline</a></li> -->
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="settings">
                        <form class="" method="POST" action="{{route('updateProfileData',$user->id)}}" id="" novalidate="novalidate">
                                @csrf
                                  <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="username" value="{{$user->username}}" placeholder="اسم المستخدم" class="form-control">
                                  </div>
                                  <div class="select-group input-group margin-bottom-20">
                                        <span class="input-group-addon"><i class="fa fa-venus-mars" aria-hidden="true"></i></span>
                                    <select name="gender" class="form-control">
                                      <option selected="">فضلا حدد الجنس</option>
                                      <option @if($user->gender == 'ذكر') selected='selected' @endif value="ذكر">ذكر</option>
                                      <option  @if($user->gender == 'انثى') selected='selected' @endif value="انثى">انثى</option>
                                    </select>
                                  </div>
                                  <div class="select-group input-group margin-bottom-20">
                                    <span class="input-group-addon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                    <select name="nationality" value="" class="form-control">
                                      <option value="">فضلا حدد الجنسية</option>
                                      <option @if($user->nationality == 'السعودية') selected='selected' @endif   value="السعودية">السعودية</option>
                                      <option @if($user->nationality == 'سوريا') selected='selected' @endif  value="سوريا">سوريا</option>
                                      <option @if($user->nationality == 'الامارات') selected='selected' @endif  value="الامارات">الامارات</option>
                                      <option @if($user->nationality == 'تونس') selected='selected' @endif value="تونس">تونس</option>
                                      <option @if($user->nationality == 'اليمن') selected='selected' @endif  value="اليمن">اليمن</option>
                                      <option @if($user->nationality == 'المغرب') selected='selected' @endif  value="المغرب">المغرب</option>
                                      <option @if($user->nationality == 'الكويت') selected='selected' @endif  value="الكويت">الكويت</option>
                                      <option @if($user->nationality == 'العراق') selected='selected' @endif  value="العراق">العراق</option>
                                      <option @if($user->nationality == 'السودان') selected='selected' @endif  value="السودان">السودان</option>
                                      <option @if($user->nationality == 'عمان') selected='selected' @endif  value="عمان">عمان</option>
                                      <option @if($user->nationality == 'فلسطين') selected='selected' @endif  value="فلسطين">فلسطين</option>
                                      <option @if($user->nationality == 'الجزائر') selected='selected' @endif  value="الجزائر">الجزائر</option>
                                      <option @if($user->nationality == 'البحرين') selected='selected' @endif  value="البحرين">البحرين</option>
                                      <option @if($user->nationality == 'الاردن') selected='selected' @endif  value="الاردن"> الاردن</option>
                                      <option @if($user->nationality == 'قطر') selected='selected' @endif  value="قطر">قطر</option>
                                      <option @if($user->nationality == 'ليبيا') selected='selected' @endif  value="ليبيا">ليبيا</option>
                                      <option @if($user->nationality == 'لبنان') selected='selected' @endif  value="لبنان">لبنان</option>
                                      <option @if($user->nationality == 'مصر') selected='selected' @endif  value="مصر">مصر</option>
                                      <option @if($user->nationality == 'امريكا') selected='selected' @endif  value="امريكا">امريكا</option>
                                      <option @if($user->nationality == 'اليابان') selected='selected' @endif  value="اليابان">اليابان</option>
                                      <option @if($user->nationality == 'الصين') selected='selected' @endif  value="الصين">الصين</option>
                                      <option @if($user->nationality == 'الصومال') selected='selected' @endif  value="الصومال">الصومال</option>
                                      <option @if($user->nationality == 'تركيا') selected='selected' @endif  value="تركيا">تركيا</option>
                                      <option @if($user->nationality == 'التشيك') selected='selected' @endif  value="التشيك">التشيك</option>
                                      <option @if($user->nationality == 'اذربيجان') selected='selected' @endif  value="اذربيجان">اذربيجان</option>
                                      <option @if($user->nationality == 'ملاوي') selected='selected' @endif  value="ملاوي">ملاوي</option>
                                      <option @if($user->nationality == 'أيران') selected='selected' @endif value="أيران">أيران</option>
                                      <option @if($user->nationality == 'أستراليا') selected='selected' @endif  value="أستراليا">أستراليا</option>
                                      <option @if($user->nationality == 'موريتانيا') selected='selected' @endif  value="موريتانيا">موريتانيا</option>
                                      <option @if($user->nationality == 'المانيا') selected='selected' @endif  value="المانيا">المانيا</option>
                                      <option @if($user->nationality == 'البوسنة') selected='selected' @endif  value="البوسنة">البوسنة</option>
                                      <option @if($user->nationality == 'الدنمارك') selected='selected' @endif  value="الدنمارك"> الدنمارك</option>
                                      <option @if($user->nationality == 'السويد') selected='selected' @endif  value="السويد"> السويد</option>
                                      <option @if($user->nationality == 'الفلبين') selected='selected' @endif  value="الفلبين"> الفلبين</option>
                                      <option @if($user->nationality == 'الهند') selected='selected' @endif  value="الهند">الهند</option>
                                      <option @if($user->nationality == 'النمسا') selected='selected' @endif  value="النمسا"> النمس</option>
                                      <option @if($user->nationality == 'النرويج') selected='selected' @endif  value="النرويج">النرويج</option>
                                      <option @if($user->nationality == 'ايطاليا') selected='selected' @endif  value="ايطاليا">ايطاليا</option>
                                      <option @if($user->nationality == 'ارتيريا') selected='selected' @endif  value="ارتيريا">ارتيريا</option>
                                      <option @if($user->nationality == 'اسبانيا') selected='selected' @endif value="اسبانيا">اسبانيا</option>
                                      <option @if($user->nationality == 'اوركرانيا') selected='selected' @endif  value="اوركرانيا">اوركرانيا</option>
                                      <option @if($user->nationality == 'باكستان') selected='selected' @endif value="باكستان">باكستان</option>
                                      <option @if($user->nationality == 'بريطانيا') selected='selected' @endif  value="بريطانيا"> بريطانيا</option>
                                      <option @if($user->nationality == 'بولند') selected='selected' @endif  value="بولند"> بولند</option>
                                      <option @if($user->nationality == 'تنزانيا') selected='selected' @endif  value="تنزانيا">تنزانيا</option>
                                      <option @if($user->nationality == 'يوغوسلافيا') selected='selected' @endif  value="يوغوسلافيا">يوغوسلافيا</option>
                                      <option @if($user->nationality == 'رومانيا') selected='selected' @endif  value="رومانيا">رومانيا</option>
                                      <option @if($user->nationality == 'روسيا') selected='selected' @endif  value="روسيا">روسيا</option>
                                      <option @if($user->nationality == 'سويسرا') selected='selected' @endif value="سويسرا">سويسرا</option>
                                      <option @if($user->nationality == 'فرنسا') selected='selected' @endif value="فرنسا">فرنسا</option>
                                      <option @if($user->nationality == 'فنزويلا') selected='selected' @endif  value="فنزويلا">فنزويلا</option>
                                      <option @if($user->nationality == 'هولندا') selected='selected' @endif  value="هولندا">هولندا</option>
                                      <option @if($user->nationality == 'كازاخستان') selected='selected' @endif  value="كازاخستان">كازاخستان</option>
                                      <option @if($user->nationality == 'كندا') selected='selected' @endif  value="كندا">كندا</option>
                                    </select>
                                  </div>
                                  <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="text" name="email" value="{{$user->email}}" placeholder="البريد الالكتروني" class="form-control">
                                  </div>
                                  <div class="select-group input-group margin-bottom-20">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <select name="display_email" class="form-control">
                                      <option selected="" value="">عرض البريد الالكتروني</option>
                                      <option  value="1"  @if($user->display_email== 1) selected='selected' @endif>نعم</option>
                                      <option value="0" @if($user->display_email== 0) selected='selected' @endif>لا</option>
                                    </select>
                                  </div>
                                  <div class="select-group input-group margin-bottom-20">
                                    <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
                                    <select name="social_status" class="form-control">
                                      <option selected="" value="">حدد الحالة الاجتماعية</option>
                                      <option value="اعزب"  @if($user->social_status== 'اعزب') selected='selected' @endif>اعزب</option>
                                      <option value="أنسة"  @if($user->social_status== 'أنسة') selected='selected' @endif>أنسة</option>
                                      <option value="مطلق"  @if($user->social_status== 'مطلق') selected='selected' @endif>مطلق</option>
                                      <option value="ارمل"  @if($user->social_status== 'ارمل') selected='selected' @endif>ارمل</option>
                                      <option value="متزوج" @if($user->social_status== 'متزوج') selected='selected' @endif>متزوج</option>
                                    </select>
                                  </div>
                                  <div class="select-group input-group margin-bottom-20">
                                    <span class="input-group-addon"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
                                    <select name="age" class="form-control">
                                      <option value="">العمر</option>
                                      <option @if($user->age == 18) selected='selected' @endif  value="18">18</option>
                                      <option @if($user->age == 19) selected='selected' @endif value="19">19</option>
                                      <option @if($user->age == 20) selected='selected' @endif value="20">20</option>
                                      <option @if($user->age == 21) selected='selected' @endif value="21">21</option>
                                      <option @if($user->age == 22) selected='selected' @endif value="22">22</option>
                                      <option @if($user->age == 23) selected='selected' @endif value="23">23</option>
                                      <option @if($user->age == 24) selected='selected' @endif value="24">24</option>
                                      <option @if($user->age == 25) selected='selected' @endif value="25">25</option>
                                      <option @if($user->age == 26) selected='selected' @endif value="26">26</option>
                                      <option @if($user->age == 27) selected='selected' @endif value="27">27</option>
                                      <option @if($user->age == 28) selected='selected' @endif value="28">28</option>
                                      <option @if($user->age == 29) selected='selected' @endif value="29">29</option>
                                      <option @if($user->age == 30) selected='selected' @endif value="30">30</option>
                                      <option @if($user->age == 31) selected='selected' @endif value="31">31</option>
                                      <option @if($user->age == 32) selected='selected' @endif value="32">32</option>
                                      <option @if($user->age == 33) selected='selected' @endif alue="33">33</option>
                                      <option @if($user->age == 34) selected='selected' @endif value="34">34</option>
                                      <option @if($user->age == 35) selected='selected' @endif value="35">35</option>
                                      <option @if($user->age == 36) selected='selected' @endif value="36">36</option>
                                      <option @if($user->age == 37) selected='selected' @endif value="37">37</option>
                                      <option @if($user->age == 38) selected='selected' @endif value="38">38</option>
                                      <option @if($user->age == 39) selected='selected' @endif value="39">39</option>
                                      <option @if($user->age == 40) selected='selected' @endif value="40">40</option>
                                      <option @if($user->age == 41) selected='selected' @endif value="41">41</option>
                                      <option @if($user->age == 42) selected='selected' @endif value="42">42</option>
                                      <option @if($user->age == 43) selected='selected' @endif value="43">43</option>
                                      <option @if($user->age == 44) selected='selected' @endif value="44">44</option>
                                      <option @if($user->age == 45) selected='selected' @endif alue="45">45</option>
                                      <option @if($user->age == 46) selected='selected' @endif value="46">46</option>
                                      <option @if($user->age == 47) selected='selected' @endif value="47">47</option>
                                      <option @if($user->age == 48) selected='selected' @endif value="48">48</option>
                                      <option @if($user->age == 49) selected='selected' @endif value="49">49</option>
                                      <option @if($user->age == 50) selected='selected' @endif value="50">50</option>
                                      <option @if($user->age == 51) selected='selected' @endif value="51">51</option>
                                      <option @if($user->age == 52) selected='selected' @endif value="52">52</option>
                                      <option @if($user->age == 53) selected='selected' @endif value="53">53</option>
                                      <option @if($user->age == 54) selected='selected' @endif value="54">54</option>
                                      <option @if($user->age == 55) selected='selected' @endif value="55">55</option>
                                      <option @if($user->age == 56) selected='selected' @endif value="56">56</option>
                                      <option @if($user->age == 57) selected='selected' @endif value="57">57</option>
                                      <option @if($user->age == 58) selected='selected' @endif value="58">58</option>
                                      <option @if($user->age == 59) selected='selected' @endif value="59">59</option>
                                    </select>
                                  </div>
                                  <div class="select-group input-group margin-bottom-20">
                                        <span class="input-group-addon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                                    <select name="education" class="form-control">
                                      <option selected="" value="">حدد المستوى العلمي</option>
                                      <option value="ابتدائي" @if($user->education == 'ابتدائي') selected='selected' @endif>ابتدائي</option>
                                      <option value="متوسط" @if($user->education == 'متوسط') selected='selected' @endif>متوسط</option>
                                      <option value="ثانوي" @if($user->education == 'متوسط') selected='selected' @endif>ثانوي</option>
                                      <option value="بكالوريوس" @if($user->education == 'متوسط') selected='selected' @endif>بكالوريوس</option>
                                      <option value="ماجيستير" @if($user->education == 'متوسط') selected='selected' @endif>ماجيستير</option>
                                      <option value="دكتوراه" @if($user->education == 'متوسط') selected='selected' @endif>دكتوراه</option>
                                    </select>
                                  </div>
                                  <div class="select-group input-group margin-bottom-20">
                                        <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <select name="country"  class="form-control">
                                      <option value="">دولة الاقامة</option>
                                      <option @if($user->country == 'السعودية') selected='selected' @endif   value="السعودية">السعودية</option>
                                      <option @if($user->country == 'سوريا') selected='selected' @endif  value="سوريا">سوريا</option>
                                      <option @if($user->country == 'الامارات') selected='selected' @endif  value="الامارات">الامارات</option>
                                      <option @if($user->country == 'تونس') selected='selected' @endif value="تونس">تونس</option>
                                      <option @if($user->country == 'اليمن') selected='selected' @endif  value="اليمن">اليمن</option>
                                      <option @if($user->country == 'المغرب') selected='selected' @endif  value="المغرب">المغرب</option>
                                      <option @if($user->country == 'الكويت') selected='selected' @endif  value="الكويت">الكويت</option>
                                      <option @if($user->country == 'العراق') selected='selected' @endif  value="العراق">العراق</option>
                                      <option @if($user->country == 'السودان') selected='selected' @endif  value="السودان">السودان</option>
                                      <option @if($user->country == 'عمان') selected='selected' @endif  value="عمان">عمان</option>
                                      <option @if($user->country == 'فلسطين') selected='selected' @endif  value="فلسطين">فلسطين</option>
                                      <option @if($user->country == 'الجزائر') selected='selected' @endif  value="الجزائر">الجزائر</option>
                                      <option @if($user->country == 'البحرين') selected='selected' @endif  value="البحرين">البحرين</option>
                                      <option @if($user->country == 'الاردن') selected='selected' @endif  value="الاردن"> الاردن</option>
                                      <option @if($user->country == 'قطر') selected='selected' @endif  value="قطر">قطر</option>
                                      <option @if($user->country == 'ليبيا') selected='selected' @endif  value="ليبيا">ليبيا</option>
                                      <option @if($user->country == 'لبنان') selected='selected' @endif  value="لبنان">لبنان</option>
                                      <option @if($user->country == 'مصر') selected='selected' @endif  value="مصر">مصر</option>
                                      <option @if($user->country == 'امريكا') selected='selected' @endif  value="امريكا">امريكا</option>
                                      <option @if($user->country == 'اليابان') selected='selected' @endif  value="اليابان">اليابان</option>
                                      <option @if($user->country == 'الصين') selected='selected' @endif  value="الصين">الصين</option>
                                      <option @if($user->country == 'الصومال') selected='selected' @endif  value="الصومال">الصومال</option>
                                      <option @if($user->country == 'تركيا') selected='selected' @endif  value="تركيا">تركيا</option>
                                      <option @if($user->country == 'التشيك') selected='selected' @endif  value="التشيك">التشيك</option>
                                      <option @if($user->country == 'اذربيجان') selected='selected' @endif  value="اذربيجان">اذربيجان</option>
                                      <option @if($user->country == 'ملاوي') selected='selected' @endif  value="ملاوي">ملاوي</option>
                                      <option @if($user->country == 'أيران') selected='selected' @endif value="أيران">أيران</option>
                                      <option @if($user->country == 'أستراليا') selected='selected' @endif  value="أستراليا">أستراليا</option>
                                      <option @if($user->country == 'موريتانيا') selected='selected' @endif  value="موريتانيا">موريتانيا</option>
                                      <option @if($user->country == 'المانيا') selected='selected' @endif  value="المانيا">المانيا</option>
                                      <option @if($user->country == 'البوسنة') selected='selected' @endif  value="البوسنة">البوسنة</option>
                                      <option @if($user->country == 'الدنمارك') selected='selected' @endif  value="الدنمارك"> الدنمارك</option>
                                      <option @if($user->country == 'السويد') selected='selected' @endif  value="السويد"> السويد</option>
                                      <option @if($user->country == 'الفلبين') selected='selected' @endif  value="الفلبين"> الفلبين</option>
                                      <option @if($user->country == 'الهند') selected='selected' @endif  value="الهند">الهند</option>
                                      <option @if($user->country == 'النمسا') selected='selected' @endif  value="النمسا"> النمس</option>
                                      <option @if($user->country == 'النرويج') selected='selected' @endif  value="النرويج">النرويج</option>
                                      <option @if($user->country == 'ايطاليا') selected='selected' @endif  value="ايطاليا">ايطاليا</option>
                                      <option @if($user->country == 'ارتيريا') selected='selected' @endif  value="ارتيريا">ارتيريا</option>
                                      <option @if($user->country == 'اسبانيا') selected='selected' @endif value="اسبانيا">اسبانيا</option>
                                      <option @if($user->country == 'اوركرانيا') selected='selected' @endif  value="اوركرانيا">اوركرانيا</option>
                                      <option @if($user->country == 'باكستان') selected='selected' @endif value="باكستان">باكستان</option>
                                      <option @if($user->country == 'بريطانيا') selected='selected' @endif  value="بريطانيا"> بريطانيا</option>
                                      <option @if($user->country == 'بولند') selected='selected' @endif  value="بولند"> بولند</option>
                                      <option @if($user->country == 'تنزانيا') selected='selected' @endif  value="تنزانيا">تنزانيا</option>
                                      <option @if($user->country == 'يوغوسلافيا') selected='selected' @endif  value="يوغوسلافيا">يوغوسلافيا</option>
                                      <option @if($user->country == 'رومانيا') selected='selected' @endif  value="رومانيا">رومانيا</option>
                                      <option @if($user->country == 'روسيا') selected='selected' @endif  value="روسيا">روسيا</option>
                                      <option @if($user->country == 'سويسرا') selected='selected' @endif value="سويسرا">سويسرا</option>
                                      <option @if($user->country == 'فرنسا') selected='selected' @endif value="فرنسا">فرنسا</option>
                                      <option @if($user->country == 'فنزويلا') selected='selected' @endif  value="فنزويلا">فنزويلا</option>
                                      <option @if($user->country == 'هولندا') selected='selected' @endif  value="هولندا">هولندا</option>
                                      <option @if($user->country == 'كازاخستان') selected='selected' @endif  value="كازاخستان">كازاخستان</option>
                                      <option @if($user->country == 'كندا') selected='selected' @endif  value="كندا">كندا</option>
                                    </select>
                                  </div>
                                  <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></span>
                                    <input type="text" name="city" value="{{$user->city}}" placeholder="مدينة الاقامة" class="form-control">
                                  </div>
                                  <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                                    <input type="text" name="profession" value="{{$user->profession}}" placeholder="المهنة" class="form-control">
                                  </div>
                                  <div class="select-group input-group margin-bottom-20">
                                        <span class="input-group-addon"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></span>
                                    <select name="accept_misyar" class="form-control">
                                      <option selected="" value="">تقبل/تقبلين زواج مسيار</option>
                                      <option  @if($user->accept_misyar == 1) selected='selected' @endif value="1">اقبل بالمسيار</option>
                                      <option @if($user->accept_misyar == 0) selected='selected' @endif  value="0">لا اقبل بالمسيار</option>
                                    </select>
                                  </div>
                                  <div class="select-group input-group margin-bottom-20">
                                        <span class="input-group-addon"><i class="fa fa-hand-peace-o" aria-hidden="true"></i></span>
                                    <select name="accept_polygamy" class="form-control">
                                      <option selected="" value="">تقبل/تقبلين بالتعدد</option>
                                      <option @if($user->accept_polygram == 1) selected='selected' @endif  value="1">اقبل بالتعدد</option>
                                      <option @if($user->accept_polygram == 0) selected='selected' @endif  value="0">لا اقبل بالتعدد</option>
                                    </select>
                                  </div>
                                  <div class="select-group input-group margin-bottom-20">
                                        <span class="input-group-addon"><i class="fa fa-child" aria-hidden="true"></i></span>
                                        <select name="children" class="form-control">
                                        <option selected value="0">لديك/لديكي أطفال</option>
                                        <option @if($user->children == 0) selected='selected' @endif  value="0">ليس لدي</option>
                                        <option @if($user->children == 1) selected='selected' @endif  value="1">1</option>
                                        <option @if($user->children == 2) selected='selected' @endif value="2">2</option>
                                        <option @if($user->children == 3) selected='selected' @endif value="3">3</option>
                                        <option @if($user->children == 4) selected='selected' @endif value="4">4</option>
                                        <option @if($user->children == 5) selected='selected' @endif value="5">5</option>
                                      </select>
                                      </div>
                                  <div class="textarea-group margin-bottom-20">
                                    <textarea rows="6"  cols="80" name="about_me" class="form-control" placeholder="معلومات اخرى عني">{{$user->about_me}}</textarea>
                                  </div>
                                  <div class="textarea-group margin-bottom-20">
                                    <textarea rows="6"  cols="80" name="about_another" class="form-control" placeholder="معلومات عن الطرف الاخر">{{$user->about_another}}</textarea>
                                  </div>
                
                                  <div class="row">
                                    <div class="col-md-6 checkbox">
                                    </div>
                                    <div class="col-md-6">
                                      <button class="btn btn-u pull-right btn-blue border_radius" name="Submit" type="submit">تحديث</button>
                                    </div>
                                  </div>
                            </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane hidden" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="images/admin.jpg" alt="user image">
                            <span class="username">
                              <a href="#">Jonathan Burke Jr.</a>
                              <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                            </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>
                      <ul class="list-inline">
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                        </li>
                        <li class="pull-right">
                          <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                            (5)</a></li>
                      </ul>
    
                      <input class="form-control input-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
    
                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="images/admin.jpg" alt="User Image">
                            <span class="username">
                              <a href="#">Sarah Ross</a>
                              <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                            </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>
    
                      <form class="form-horizontal">
                        <div class="form-group margin-bottom-none">
                          <div class="col-sm-9">
                            <input class="form-control input-sm" placeholder="Response">
                          </div>
                          <div class="col-sm-3">
                            <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->
    
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="images/admin.jpg" alt="User Image">
                            <span class="username">
                              <a href="#">Adam Jones</a>
                              <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                            </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row margin-bottom">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="images/admin.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-responsive" src="images/admin.jpg" alt="Photo">
                              <br>
                              <img class="img-responsive" src="images/admin.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-responsive" src="images/admin.jpg" alt="Photo">
                              <br>
                              <img class="img-responsive" src="images/admin.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
    
                      <ul class="list-inline">
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                        <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                        </li>
                        <li class="pull-right">
                          <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                            (5)</a></li>
                      </ul>
    
                      <input class="form-control input-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane hidden" id="timeline">
                    <!-- The timeline -->
                    <ul class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <li class="time-label">
                            <span class="bg-red">
                              10 Feb. 2014
                            </span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-envelope bg-blue"></i>
    
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
    
                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
    
                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a class="btn btn-primary btn-xs">Read more</a>
                            <a class="btn btn-danger btn-xs">Delete</a>
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-user bg-aqua"></i>
    
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
    
                          <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-comments bg-yellow"></i>
    
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
    
                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
    
                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <li class="time-label">
                            <span class="bg-green">
                              3 Jan. 2014
                            </span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-camera bg-purple"></i>
    
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
    
                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
    
                          <div class="timeline-body">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                      </li>
                    </ul>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
    
        </section>
        <!-- /.content -->
    
      </div> 
@endsection