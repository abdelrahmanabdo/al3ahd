@extends('layouts.layout')
@section('content')
<section class="page-banner page-banner-bg padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="p-white text-uppercase">الاسئلة الأكثر شيوعاً</h1>
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
              <div class="widget">
              <div class="widget-profile">
                  <ul class="account-control">
                  <li class="with-notify">
                      <a href="inbox-page.html">
                      <span>3</span>
                      <i class="fa fa-inbox" aria-hidden="true"></i> البريد الوارد
                      </a>
                  </li>
                  <li><a href="sent-page.html">
                      <i class="fa fa-paper-plane" aria-hidden="true"></i> البريد الصادر
                  </a></li>
                  <li><a href="block-page.html">
                      <i class="fa fa-ban" aria-hidden="true"></i> قائمة الحظر
                  </a></li>
                  <li><a href="profile-settings.html">
                      <i class="fa fa-sliders" aria-hidden="true"></i>إعدادات الحساب
                  </a></li>
                  <li><a href="change-password.html">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>تغيير كلمة المرور
                  </a></li>
                  <li><a href="remove-my-account.html">
                      <i class="fa fa-trash" aria-hidden="true"></i>حذف عضويتى من الموقع
                  </a></li>
                  <li><a href="sent-manager.html">
                      <i class="fa fa-envelope" aria-hidden="true"></i>مراسلة إدارة الموقع
                  </a></li>
                  <li><a href="">
                      <i class="fa fa-sign-out" aria-hidden="true"></i>تسجيل الخروج
                  </a></li>
                  </ul>
              </div>
              </div>
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
          <div class="col-md-9 col-sm-8">
              <div class="row">

                  <div class="col-sm-12">
                   <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading active">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1">
                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما
                    </a>
                </h4>
            </div>
            <div id="panel1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p class="nomargin">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>

                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel2">
                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما<i class="fa fa-plus-circle"></i></a>
                </h4>
            </div>
            <div id="panel2" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="nomargin">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel3">
                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما<i class="fa fa-plus-circle"></i></a>
                </h4>
            </div>
            <div id="panel3" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="nomargin">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>

                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel4">
                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما<i class="fa fa-plus-circle"></i></a>
                </h4>
            </div>
            <div id="panel4" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="nomargin">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel5">
                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما<i class="fa fa-plus-circle"></i></a>
                </h4>
            </div>
            <div id="panel5" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="nomargin">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel6">
                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما.<i class="fa fa-plus-circle"></i></a>
                </h4>
            </div>
            <div id="panel6" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="nomargin">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel7">
                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما<i class="fa fa-plus-circle"></i></a>
                </h4>
            </div>
            <div id="panel7" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="nomargin">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel8">
                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما<i class="fa fa-plus-circle"></i></a>
                </h4>
            </div>
            <div id="panel8" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="nomargin">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
                </div>
            </div>
        </div>




    </div>




          </div>
                  </div>
          </div>
        </div>
    </div>
</section>
    <!-- News End -->

@endsection
