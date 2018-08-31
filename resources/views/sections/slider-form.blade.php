
<button type="button" class="form_opener"><i class="fa fa-bars"></i></button>
<div class="tp_overlay">
  <div class="topbar clearfix">
    <ul class="breadcrumb_top">
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

  <form class="callus top30 clearfix centered" method="POST" action="{{route('search')}}">
    @csrf
  <h2 class="text-uppercase t_white bottom20 text-center">إبحث عن شريكك</h2>
    <div class="row">
      <div class="col-sm-6 pdng-3">
        <div class="single-query bottom10">
          <div class="intro">
            <select name="education" class="form-control">
                <option selected="" value=" ">المستوى العلمي</option>
                <option value="ابتدائي">ابتدائي</option>
                <option value="متوسط">متوسط</option>
                <option value="ثانوي">ثانوي</option>
                <option value="بكالوريوس">بكالوريوس</option>
                <option value="ماجيستير">ماجيستير</option>
                <option value="دكتوراه">دكتوراه</option>
              </select>        
            </div>
          </div>
      </div>
      <div class="col-sm-6 pdng-3">
        <div class="single-query bottom10">
          <div class="intro">
            <select name="social_status">
                <option selected="" value=" ">الحالة الاجتماعية</option>
                <option value="اعزب">اعزب</option>
                <option value="أنسة">أنسة</option>
                <option value="مطلق">مطلق</option>
                <option value="ارمل">ارمل</option>
                <option value="متزوج">متزوج</option>
            </select>
          </div>
        </div>
      </div>
     
      <div class="col-sm-6 pdng-3">
        <div class="single-query bottom10">
          <input type="text" name="country" value="" class="keyword-input" placeholder="البلد">
        </div>
      </div>
      <div class="col-sm-6 pdng-3">
        <div class="single-query bottom10">
          <div class="intro">
            <select name="gender" class="form-control">
                <option selected="" value=" "> الجنس</option>
                <option value="ذكر">ذكر</option>
                <option value="انثى">انثى</option>
              </select>        
            </div>
          </div>
      </div>
      
    </div>
      <div class="col-md-4 col-sm-4 col-xs-4 text-right form-group pdng-3">
        <button type="submit" class="border_radius btn-yellow text-uppercase">إبحث</button>
      </div>
    </div>
  </div>

  </form>
</div>
