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
            <form class="" method="post" action="" id="" novalidate="novalidate">
              <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="userName" value="{{$user->username}}" placeholder="اسم المستخدم" class="form-control">
              </div>
              <div class="select-group input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-venus-mars" aria-hidden="true"></i></span>
                <select name="sex" class="form-control">
                  <option selected="" value="">فضلا حدد الجنس</option>
                  <option @if($user->gender == 'ذكر') selected='selected' @endif value="ذكر">ذكر</option>
                  <option  @if($user->gender == 'انثى') selected='selected' @endif value="انثى">انثى</option>
                </select>
              </div>
              <div class="select-group input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                <select name="nationalaty" class="form-control">
                  <option value="">فضلا حدد الجنسية</option>
                  <option label="    السعودية" value="26"> السعودية</option>
                  <option label="    سوريا" value="37"> سوريا</option>
                  <option label="    الامارات" value="36"> الامارات</option>
                  <option label="    تونس" value="35"> تونس</option>
                  <option label="    اليمن" value="34"> اليمن</option>
                  <option label="    المغرب" value="33"> المغرب</option>
                  <option label="    الكويت" value="32"> الكويت</option>
                  <option label="    العراق" value="31"> العراق</option>
                  <option label="    السودان" value="30"> السودان</option>
                  <option label="    عمان" value="38"> عمان</option>
                  <option label="    فلسطين" value="39"> فلسطين</option>
                  <option label="    الجزائر" value="29"> الجزائر</option>
                  <option label="    البحرين" value="28"> البحرين</option>
                  <option label="    الاردن" value="27"> الاردن</option>
                  <option label="    قطر" value="40"> قطر</option>
                  <option label="    ليبيا" value="41"> ليبيا</option>
                  <option label="    لبنان" value="42"> لبنان</option>
                  <option label="    مصر" value="43"> مصر</option>
                  <option label="    امريكا" value="62"> امريكا</option>
                  <option label="    اليابان" value="63"> اليابان</option>
                  <option label="    الصين" value="64"> الصين</option>
                  <option label="    الصومال" value="184"> الصومال</option>
                  <option label="    تركيا" value="185"> تركيا</option>
                  <option label="    التشيك" value="186"> التشيك</option>
                  <option label="    اذربيجان" value="187"> اذربيجان</option>
                  <option label="    ملاوي" value="188"> ملاوي</option>
                  <option label="    أيران" value="189"> أيران</option>
                  <option label="    أستراليا" value="190"> أستراليا</option>
                  <option label="    موريتانيا" value="191"> موريتانيا</option>
                  <option label="    المانيا" value="192"> المانيا</option>
                  <option label="    البوسنة" value="193"> البوسنة</option>
                  <option label="    الدنمارك" value="194"> الدنمارك</option>
                  <option label="    السويد" value="195"> السويد</option>
                  <option label="    الفلبين" value="196"> الفلبين</option>
                  <option label="    الهند" value="197"> الهند</option>
                  <option label="    النمسا" value="198"> النمسا</option>
                  <option label="    النرويج" value="199"> النرويج</option>
                  <option label="    ايطاليا" value="200"> ايطاليا</option>
                  <option label="    ارتيريا" value="201"> ارتيريا</option>
                  <option label="    اسبانيا" value="202"> اسبانيا</option>
                  <option label="    اوركرانيا" value="203"> اوركرانيا</option>
                  <option label="    باكستان" value="204"> باكستان</option>
                  <option label="    بريطانيا" value="205"> بريطانيا</option>
                  <option label="    بولند" value="206"> بولند</option>
                  <option label="    تنزانيا" value="207"> تنزانيا</option>
                  <option label="    يوغوسلافيا" value="208"> يوغوسلافيا</option>
                  <option label="    رومانيا" value="209"> رومانيا</option>
                  <option label="    روسيا" value="210"> روسيا</option>
                  <option label="    سويسرا" value="211"> سويسرا</option>
                  <option label="    فرنسا" value="212"> فرنسا</option>
                  <option label="    فنزويلا" value="213"> فنزويلا</option>
                  <option label="    هولندا" value="214"> هولندا</option>
                  <option label="    كازاخستان" value="215"> كازاخستان</option>
                  <option label="    كندا" value="216"> كندا</option>
                </select>
              </div>
              <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" name="email" value="{{$user->email}}" placeholder="البريد الالكتروني" class="form-control">
              </div>
              <div class="select-group input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <select name="showEmail" class="form-control">
                  <option selected="" value="">عرض البريد الالكتروني</option>
                  <option  value="1"  @if($user->display_email== 1) selected='selected' @endif>نعم</option>
                  <option value="0" @if($user->display_email== 0) selected='selected' @endif>لا</option>
                </select>
              </div>
              <div class="select-group input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
                <select name="socule" class="form-control">
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
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>
                  <option value="53">53</option>
                  <option value="54">54</option>
                  <option value="55">55</option>
                  <option value="56">56</option>
                  <option value="57">57</option>
                  <option value="58">58</option>
                  <option value="59">59</option>
                </select>
              </div>
              <div class="select-group input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                <select name="degree" class="form-control">
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
                <select name="countryLive" class="form-control">
                  <option value="">دولة الاقامة</option>
                  <option label="    السعودية" value="26"> السعودية</option>
                  <option label="    سوريا" value="37"> سوريا</option>
                  <option label="    الامارات" value="36"> الامارات</option>
                  <option label="    تونس" value="35"> تونس</option>
                  <option label="    اليمن" value="34"> اليمن</option>
                  <option label="    المغرب" value="33"> المغرب</option>
                  <option label="    الكويت" value="32"> الكويت</option>
                  <option label="    العراق" value="31"> العراق</option>
                  <option label="    السودان" value="30"> السودان</option>
                  <option label="    عمان" value="38"> عمان</option>
                  <option label="    فلسطين" value="39"> فلسطين</option>
                  <option label="    الجزائر" value="29"> الجزائر</option>
                  <option label="    البحرين" value="28"> البحرين</option>
                  <option label="    الاردن" value="27"> الاردن</option>
                  <option label="    قطر" value="40"> قطر</option>
                  <option label="    ليبيا" value="41"> ليبيا</option>
                  <option label="    لبنان" value="42"> لبنان</option>
                  <option label="    مصر" value="43"> مصر</option>
                  <option label="    امريكا" value="62"> امريكا</option>
                  <option label="    اليابان" value="63"> اليابان</option>
                  <option label="    الصين" value="64"> الصين</option>
                  <option label="    الصومال" value="184"> الصومال</option>
                  <option label="    تركيا" value="185"> تركيا</option>
                  <option label="    التشيك" value="186"> التشيك</option>
                  <option label="    اذربيجان" value="187"> اذربيجان</option>
                  <option label="    ملاوي" value="188"> ملاوي</option>
                  <option label="    أيران" value="189"> أيران</option>
                  <option label="    أستراليا" value="190"> أستراليا</option>
                  <option label="    موريتانيا" value="191"> موريتانيا</option>
                  <option label="    المانيا" value="192"> المانيا</option>
                  <option label="    البوسنة" value="193"> البوسنة</option>
                  <option label="    الدنمارك" value="194"> الدنمارك</option>
                  <option label="    السويد" value="195"> السويد</option>
                  <option label="    الفلبين" value="196"> الفلبين</option>
                  <option label="    الهند" value="197"> الهند</option>
                  <option label="    النمسا" value="198"> النمسا</option>
                  <option label="    النرويج" value="199"> النرويج</option>
                  <option label="    ايطاليا" value="200"> ايطاليا</option>
                  <option label="    ارتيريا" value="201"> ارتيريا</option>
                  <option label="    اسبانيا" value="202"> اسبانيا</option>
                  <option label="    اوركرانيا" value="203"> اوركرانيا</option>
                  <option label="    باكستان" value="204"> باكستان</option>
                  <option label="    بريطانيا" value="205"> بريطانيا</option>
                  <option label="    بولند" value="206"> بولند</option>
                  <option label="    تنزانيا" value="207"> تنزانيا</option>
                  <option label="    يوغوسلافيا" value="208"> يوغوسلافيا</option>
                  <option label="    رومانيا" value="209"> رومانيا</option>
                  <option label="    روسيا" value="210"> روسيا</option>
                  <option label="    سويسرا" value="211"> سويسرا</option>
                  <option label="    فرنسا" value="212"> فرنسا</option>
                  <option label="    فنزويلا" value="213"> فنزويلا</option>
                  <option label="    هولندا" value="214"> هولندا</option>
                  <option label="    كازاخستان" value="215"> كازاخستان</option>
                  <option label="    كندا" value="216"> كندا</option>
                </select>
              </div>
              <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></span>
                <input type="text" name="city" value="{{$user->city}}" placeholder="مدينة الاقامة" class="form-control">
              </div>
              <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                <input type="text" name="job" value="{{$user->profession}}" placeholder="المهنة" class="form-control">
              </div>
              <div class="select-group input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></span>
                <select name="msiar" class="form-control">
                  <option  value="">تقبل/تقبلين زواج مسيار</option>
                  <option  @if($user->accept_misyar == 1) selected='selected' @endif value="1">اقبل بالمسيار</option>
                  <option @if($user->accept_misyar == 0) selected='selected' @endif  value="0">لا اقبل بالمسيار</option>
                </select>
              </div>
              <div class="select-group input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-hand-peace-o" aria-hidden="true"></i></span>
                <select name="t3dd" class="form-control">
                  <option selected="" value="">تقبل/تقبلين بالتعدد</option>
                  <option @if($user->accept_polygram == 1) selected='selected' @endif  value="1">اقبل بالتعدد</option>
                  <option @if($user->accept_polygram == 0) selected='selected' @endif  value="0">لا اقبل بالتعدد</option>
                </select>
              </div>
              <div class="select-group input-group margin-bottom-20">
                  <span class="input-group-addon"><i class="fa fa-child" aria-hidden="true"></i></span>
                  <select name="accept_misyar" class="form-control">
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
                <textarea rows="6" name="moreAboutMe"  cols="80" class="form-control" placeholder="معلومات اخرى عني">{{$user->about_me}}</textarea>
              </div>
              <div class="textarea-group margin-bottom-20">
                <textarea rows="6" name="moreAboutHim" cols="80" class="form-control" placeholder="معلومات عن الطرف الاخر">{{$user->about_another}}</textarea>
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
        <h3 class="bottom30 margin40">شبكة التواصل الإجتماعى</h3>
        <div class="row">
          <form class="callus">
            <div class="col-sm-4">
              <div class="single-query">
                <label>فيس بوك:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" placeholder="{{$user->facebook_link}}" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>إنستجرام:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" placeholder="{{$user->instagram_link}}" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>تويتر:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" placeholder="{{$user->twitter_link}}" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>جوجل بلس:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" placeholder="{{$user->gmail_link}}" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>لينكد إن:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" placeholder="{{$user->linkedin_link}}" class="keyword-input">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
              <a class="btn-blue border_radius" href="#">حفظ التغييرات</a>
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