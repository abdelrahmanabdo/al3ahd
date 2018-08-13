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
            @if (session('alert'))
            <div class="row">
            
                <div class="alert alert-success col-md-8 col-md-offset-2 ">
                    {{ session('alert') }}
                </div>
            </div>
            @endif
            
            
            @if ($errors->any())
            <div class="row">
            
                <div class="alert alert-danger col-md-8 col-md-offset-2 ">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
      <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <form class="reg-page" method="POST" action="{{route('register')}}" novalidate="novalidate" enctype="multipart/form-data">
            @csrf
            <div class="input-group margin-bottom-20">
              <span class="input-group-addon"><i class="fa fa-address-book-o" aria-hidden="true"></i></span>
              <input type="file" name="profile_picture" value="" placeholder="الصورة السخصية" class="form-control">
            </div>
          <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" name="username" value="" placeholder="اسم المستخدم" class="form-control">
          </div>
          <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" id="password" name="password" placeholder="الرمز السري" class="form-control">
          </div>
          <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" name="password_confirmation" placeholder="اعادة الرمز السري" class="form-control">
          </div>
          <div class="select-group input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-venus-mars" aria-hidden="true"></i></span>
            <select name="gender" class="form-control">
              <option selected="" value="">فضلا حدد الجنس</option>
              <option value="ذكر">ذكر</option>
              <option value="انثى">انثى</option>
            </select>
          </div>
          <div class="select-group input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
            <select name="nationality" class="form-control">
              <option value="">فضلا حدد الجنسية</option>
              <option label="    السعودية" value="السعودية"> السعودية</option>
              <option label="    سوريا" value="سوريا"> سوريا</option>
              <option label="    الامارات" value="الامارات"> الامارات</option>
              <option label="    تونس" value="تونس"> تونس</option>
              <option label="    اليمن" value="اليمن"> اليمن</option>
              <option label="    المغرب" value="المغرب"> المغرب</option>
              <option label="    الكويت" value="الكويت"> الكويت</option>
              <option label="    العراق" value="العراق"> العراق</option>
              <option label="    السودان" value="السودان"> السودان</option>
              <option label="    عمان" value="عمان"> عمان</option>
              <option label="    فلسطين" value="فلسطين"> فلسطين</option>
              <option label="    الجزائر" value="الجزائر"> الجزائر</option>
              <option label="    البحرين" value="البحرين"> البحرين</option>
              <option label="    الاردن" value="الاردن"> الاردن</option>
              <option label="    قطر" value="قطر"> قطر</option>
              <option label="    ليبيا" value="ليبيا"> ليبيا</option>
              <option label="    لبنان" value="لبنان"> لبنان</option>
              <option label="    مصر" value="مصر"> مصر</option>
              <option label="    امريكا" value="امريكا"> امريكا</option>
              <option label="    اليابان" value="اليابان"> اليابان</option>
              <option label="    الصين" value="الصين"> الصين</option>
              <option label="    الصومال" value="الصومال"> الصومال</option>
              <option label="    تركيا" value="تركيا"> تركيا</option>
              <option label="    التشيك" value="التشيك"> التشيك</option>
              <option label="    اذربيجان" value="اذربيجان"> اذربيجان</option>
              <option label="    ملاوي" value="ملاوي"> ملاوي</option>
              <option label="    أيران" value="أيران"> أيران</option>
              <option label="    أستراليا" value="أستراليا"> أستراليا</option>
              <option label="    موريتانيا" value="موريتانيا"> موريتانيا</option>
              <option label="    المانيا" value="المانيا"> المانيا</option>
              <option label="    البوسنة" value="البوسنة"> البوسنة</option>
              <option label="    الدنمارك" value="الدنمارك"> الدنمارك</option>
              <option label="    السويد" value="السويد"> السويد</option>
              <option label="    الفلبين" value="الفلبين"> الفلبين</option>
              <option label="    الهند" value="الهند"> الهند</option>
              <option label="    النمسا" value="النمسا"> النمسا</option>
              <option label="    النرويج" value="النرويج"> النرويج</option>
              <option label="    ايطاليا" value="ايطاليا"> ايطاليا</option>
              <option label="    ارتيريا" value="ارتيريا"> ارتيريا</option>
              <option label="    اسبانيا" value="اسبانيا"> اسبانيا</option>
              <option label="    اوركرانيا" value="اوركرانيا"> اوركرانيا</option>
              <option label="    باكستان" value="باكستان"> باكستان</option>
              <option label="    بريطانيا" value="بريطانيا"> بريطانيا</option>
              <option label="    بولند" value="بولند"> بولند</option>
              <option label="    تنزانيا" value="تنزانيا"> تنزانيا</option>
              <option label="    يوغوسلافيا" value="يوغوسلافيا"> يوغوسلافيا</option>
              <option label="    رومانيا" value="رومانيا"> رومانيا</option>
              <option label="    روسيا" value="روسيا"> روسيا</option>
              <option label="    سويسرا" value="سويسرا"> سويسرا</option>
              <option label="    فرنسا" value="فرنسا"> فرنسا</option>
              <option label="    فنزويلا" value="فنزويلا"> فنزويلا</option>
              <option label="    هولندا" value="هولندا"> هولندا</option>
              <option label="    كازاخستان" value="كازاخستان"> كازاخستان</option>
              <option label="    كندا" value="كندا"> كندا</option>
            </select>
          </div>
          <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="text" name="email" value="" placeholder="البريد الالكتروني" class="form-control">
          </div>
          <div class="select-group input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <select name="display_email" class="form-control">
              <option selected="" value="">عرض البريد الالكتروني</option>
              <option value="1">نعم</option>
              <option value="0">لا</option>
            </select>
          </div>
          <div class="select-group input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
            <select name="social_status" class="form-control">
              <option selected="" value="">حدد الحالة الاجتماعية</option>
              <option value="اعزب">اعزب</option>
              <option value="أنسة">أنسة</option>
              <option value="مطلق">مطلق</option>
              <option value="ارمل">ارمل</option>
              <option value="متزوج">متزوج</option>
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
            <select name="education" class="form-control">
              <option selected="" value="">حدد المستوى العلمي</option>
              <option value="ابتدائي">ابتدائي</option>
              <option value="متوسط">متوسط</option>
              <option value="ثانوي">ثانوي</option>
              <option value="بكالوريوس">بكالوريوس</option>
              <option value="ماجيستير">ماجيستير</option>
              <option value="دكتوراه">دكتوراه</option>
            </select>
          </div>
          <div class="select-group input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
            <select name="country" class="form-control">
              <option value="country">دولة الاقامة</option>
              <option label="    السعودية" value="السعودية"> السعودية</option>
              <option label="    سوريا" value="سوريا"> سوريا</option>
              <option label="    الامارات" value="الامارات"> الامارات</option>
              <option label="    تونس" value="تونس"> تونس</option>
              <option label="    اليمن" value="اليمن"> اليمن</option>
              <option label="    المغرب" value="المغرب"> المغرب</option>
              <option label="    الكويت" value="الكويت"> الكويت</option>
              <option label="    العراق" value="العراق"> العراق</option>
              <option label="    السودان" value="السودان"> السودان</option>
              <option label="    عمان" value="عمان"> عمان</option>
              <option label="    فلسطين" value="فلسطين"> فلسطين</option>
              <option label="    الجزائر" value="الجزائر"> الجزائر</option>
              <option label="    البحرين" value="البحرين"> البحرين</option>
              <option label="    الاردن" value="الاردن"> الاردن</option>
              <option label="    قطر" value="قطر"> قطر</option>
              <option label="    ليبيا" value="ليبيا"> ليبيا</option>
              <option label="    لبنان" value="لبنان"> لبنان</option>
              <option label="    مصر" value="مصر"> مصر</option>
              <option label="    امريكا" value="امريكا"> امريكا</option>
              <option label="    اليابان" value="اليابان"> اليابان</option>
              <option label="    الصين" value="الصين"> الصين</option>
              <option label="    الصومال" value="الصومال"> الصومال</option>
              <option label="    تركيا" value="تركيا"> تركيا</option>
              <option label="    التشيك" value="التشيك"> التشيك</option>
              <option label="    اذربيجان" value="اذربيجان"> اذربيجان</option>
              <option label="    ملاوي" value="ملاوي"> ملاوي</option>
              <option label="    أيران" value="أيران"> أيران</option>
              <option label="    أستراليا" value="أستراليا"> أستراليا</option>
              <option label="    موريتانيا" value="موريتانيا"> موريتانيا</option>
              <option label="    المانيا" value="المانيا"> المانيا</option>
              <option label="    البوسنة" value="البوسنة"> البوسنة</option>
              <option label="    الدنمارك" value="الدنمارك"> الدنمارك</option>
              <option label="    السويد" value="السويد"> السويد</option>
              <option label="    الفلبين" value="الفلبين"> الفلبين</option>
              <option label="    الهند" value="الهند"> الهند</option>
              <option label="    النمسا" value="النمسا"> النمسا</option>
              <option label="    النرويج" value="النرويج"> النرويج</option>
              <option label="    ايطاليا" value="ايطاليا"> ايطاليا</option>
              <option label="    ارتيريا" value="ارتيريا"> ارتيريا</option>
              <option label="    اسبانيا" value="اسبانيا"> اسبانيا</option>
              <option label="    اوركرانيا" value="اوركرانيا"> اوركرانيا</option>
              <option label="    باكستان" value="باكستان"> باكستان</option>
              <option label="    بريطانيا" value="بريطانيا"> بريطانيا</option>
              <option label="    بولند" value="بولند"> بولند</option>
              <option label="    تنزانيا" value="تنزانيا"> تنزانيا</option>
              <option label="    يوغوسلافيا" value="يوغوسلافيا"> يوغوسلافيا</option>
              <option label="    رومانيا" value="رومانيا"> رومانيا</option>
              <option label="    روسيا" value="روسيا"> روسيا</option>
              <option label="    سويسرا" value="سويسرا"> سويسرا</option>
              <option label="    فرنسا" value="فرنسا"> فرنسا</option>
              <option label="    فنزويلا" value="فنزويلا"> فنزويلا</option>
              <option label="    هولندا" value="هولندا"> هولندا</option>
              <option label="    كازاخستان" value="كازاخستان"> كازاخستان</option>
              <option label="    كندا" value="كندا"> كندا</option>
            </select>
          </div>
          <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></span>
            <input type="text" name="city" value="" placeholder="مدينة الاقامة" class="form-control">
          </div>
          <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
            <input type="text" name="profession" value="" placeholder="المهنة" class="form-control">
          </div>
          <div class="select-group input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></span>
            <select name="accept_misyar" class="form-control">
              <option selected="" value="">تقبل/تقبلين زواج مسيار</option>
              <option value="1">اقبل بالمسيار</option>
              <option value="2">لا اقبل بالمسيار</option>
            </select>
          </div>
          <div class="select-group input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-hand-peace-o" aria-hidden="true"></i></span>
            <select name="accept_polygamy" class="form-control">
              <option selected="" value="">تقبل/تقبلين بالتعدد</option>
              <option value="1">اقبل بالتعدد</option>
              <option value="2">لا اقبل بالتعدد</option>
            </select>
          </div>
          <div class="select-group input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></span>
            <select name="accept_misyar" class="form-control">
              <option selected="" value="">لديك/لديكي أطفال</option>
              <option value="0">ليس لدي</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="textarea-group margin-bottom-20">
            <textarea rows="6" name="about_me" cols="80" class="form-control" placeholder="معلومات اخرى عني"></textarea>
          </div>
          <div class="textarea-group margin-bottom-20">
            <textarea rows="6" name="about_another" cols="80" class="form-control" placeholder="معلومات عن الطرف الاخر"></textarea>
          </div>
          <div class="col-xs-12">
            <div class="checkbox pull-left">
              <label>
                <input type="checkbox"> 
                قسم بالله العظيم أني لم أدخل هذا الموقع الا بهدف الزواج الشرعي وفق كتاب الله و سنة رسوله , وليس لأي هدف آخر . وأعاهد الله وأعاهدكم على أن لا أضيع تعب الموقع , وأن لا أخدع الأعضاء , وأن أكون صادقا مع الله ثم مع نفسي , وأن ألتزم بشروط الموقع , و شروط المراسلة فيه , عسى ربي يكتب لي الخير في هذا المكان . والله خير الشاهدين
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 checkbox">
            </div>
            <div class="col-md-6">
              <button class="btn btn-u pull-right" name="Submit" type="submit">اشتراك</button>
            </div>
          </div>
          <input type="hidden" value="newAccount" name="action">
          <input type="hidden" value="TRUE" name="save">
        </form>
      </div>
    </div>
  </div>
</section>
<!-- News End -->

@endsection