@extends('layouts.layout')
@section('content')

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
      <section id="contact-us" class="padding">
          <div class="container">
            <div class="row">
              <div class="col-md-12 bottom30">
                <div id="map-single"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-7 margin40">
                <div class="our-agent-box bottom30">
                  <h2>إرسال رسالة</h2>
                </div>
                <form class="callus">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="الإسم">
                      </div>
                      <div class="form-group">
                        <input type="tel" class="form-control" placeholder="رقم الهاتف">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="البريد الإلكترونى">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="الرسالة"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12 row">
                      <div class="row">
                        <div class="col-sm-3">
                          <input type="submit" class="btn-blue uppercase border_radius" value="إرسال">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-sm-5 margin40">
                <div class="agent-p-contact">
                  <div class="our-agent-box bottom30">
                    <h2>كن على إتصال</h2>
                  </div>
                  <div class="agetn-contact-2 bottom30">
                    <p><i class="icon-telephone114"></i> <bdi>01234567890</bdi></p>
                    <p><i class=" icon-icons142"></i> <bdi>info@al3hd.com</bdi></p>
                    <p><i class="icon-icons74"></i> <bdi>60</bdi>ش صلاح سالم - مدينة نصر - القاهرة</p>
                  </div>
                  <ul class="social_share bottom20">
                    <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i></a></li>
                    <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i></a></li>
                    <li><a href="javascript:void(0)" class="google"><i class="icon-google4"></i></a></li>
                    <li><a href="javascript:void(0)" class="linkden"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!-- News End -->
      
@endsection