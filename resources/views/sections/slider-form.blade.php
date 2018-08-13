
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

  <form class="callus top30 clearfix centered">
  <h2 class="text-uppercase t_white bottom20 text-center">إبحث عن شريكك</h2>
    <div class="row">
      <div class="col-sm-6 pdng-3">
        <div class="single-query bottom10">
          <input type="text" class="keyword-input" placeholder="كلمة مفتاحية">
        </div>
      </div>
      <div class="col-sm-6 pdng-3">
        <div class="single-query bottom10">
          <div class="intro">
            <select>
              <option selected="" value="any">أبحث عن</option>
              <option>زوج</option>
              <option>زوجه </option>
              <option>زواج مسيار</option>
              <option>ارمل</option>
              <option>مطلق</option>
              <option>زوجة ثانية</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-6 pdng-3">
        <div class="single-query bottom10">
          <div class="intro">
            <select>
              <option class="active">مقيم فى</option>
              <option>كل البلاد</option>
              <option>مصر </option>
              <option>السعودية</option>
              <option>البحرين</option>
              <option>قطر</option>
              <option>الكويت</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-6 pdng-3">
        <div class="single-query bottom10">
          <div class="intro">
            <select>
              <option class="active">الجنسية</option>
              <option>كل البلاد</option>
              <option>مصر </option>
              <option>السعودية</option>
              <option>البحرين</option>
              <option>قطر</option>
              <option>الكويت</option>
            </select>
          </div>
        </div>
      </div>
      <div class="search-2">
        <div class="col-sm-6 pdng-3">
          <div class="single-query bottom10">
            <div class="intro">
              <select>
                <option class="active">اختيار</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm-6 pdng-3">
          <div class="single-query bottom10">
            <div class="intro">
              <select>
                <option class="active">اختيار</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 pdng-3">
        <div class="single-query bottom10">
          <input type="text" class="keyword-input" placeholder="كلمة مفتاحية">
        </div>
      </div>
      <div class="col-sm-6 pdng-3">
        <div class="single-query bottom10">
          <input type="text" class="keyword-input" placeholder="كبمة مفتاحية">
        </div>
      </div>
    </div>
      <div class="col-md-4 col-sm-4 col-xs-4 text-right form-group pdng-3">
        <button type="submit" class="border_radius btn-yellow text-uppercase">إبحث</button>
      </div>
    </div>

  </form>
</div>
