@extends('layouts.layout') 
@section('content')
<!-- Page Banner Start-->
<section class="page-banner page-banner-bg padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="p-white text-uppercase">عنوان الصفحة</h1>
        <p class="p-white">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل
          توضع الفقرات في الصفحة التي يقرأها.</p>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->
<!-- Profile Start -->
<section id="agent-2-peperty" class="profile padding">
  <div class="container-3">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
          @if(session('alert'))
          <div class="alert alert-success col-md-10 col-md-offset-1">
              {{ session('alert') }}
          </div>
          @endif
        <h2 class="text-uppercase bottom30">حسابى</h2>
        <div class="agent-p-img">
          <img src="{{$user->profile_picture ? asset('storage/avatars/'.$user->profile_picture) : 'images/img-profile.jpg'}}" class="img-responsive" alt="image" />
          <a href="#" class="top10 bottom20">تحديث الصورة الشخصية</a>
          <p class="">بحد ادنى 215بيكسيل X 215بيكسيل<span>*</span></p>
        </div>
      </div>
      <div class="col-md-8">
        <div class="profile-form">
          <div class="row">
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
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-6 col-xs-12 profile-form margin40">
          @if(session('alert'))
          <div class="alert alert-success col-md-10 col-md-offset-1">
              {{ session('alert') }}
          </div>
          @endif
        <h3 class="bottom30 margin40">شبكة التواصل الإجتماعى</h3>
        <div class="row">
          <form class="callus" method="POST" action="{{route('updateProfileSocial',$user->id)}}">
            @csrf
            <div class="col-sm-4">
              <div class="single-query">
                <label>فيس بوك:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" name="facebook" value="{{$user->facebook_link}}" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>إنستجرام:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" name="instagram" value="{{$user->instagram_link}}" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>تويتر:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" name="twitter" value="{{$user->twitter_link}}" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>جوجل بلس:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" name="gmail" value="{{$user->gmail_link}}" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>لينكد إن:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" name="linkedin" value="{{$user->linkedin_link}}" class="keyword-input">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
              <button type="submit "<a class="btn-blue border_radius" href="#">حفظ التغييرات</a> </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-2 hidden-xs"></div>
      <div class="col-md-5 col-sm-6 col-xs-12 profile-form margin40">
        <h3 class=" bottom30 margin40">تغيير كلمة المرور</h3>
        <div class="row">
          <form class="callus">
            <div class="col-sm-4">
              <div class="single-query">
                <label>كلمة المرور الحالية:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="password" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>كلمة المرور الجديدة:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="password" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>تأكيد كلمة المرور الجديدة:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="password" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-12 text-right">
              <a class="btn-blue border_radius" href="#">خفظ التغييرات</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Profile end -->
@endsection