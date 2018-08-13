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
<!-- Agent Profile -->
<section id="agents" class="padding">
<div class="container">
<div class="row">

  <div class="col-sm-3 bottom40">
    <div class="agent_wrap">
      <div class="image">
        <img src="{{$user->profile_picture ? asset('storage/avatars/'.$user->profile_picture) : 'images/user.jpg'}}" alt="Agents">
      </div>
    </div>
  </div>
  <div class="col-sm-6 bottom40">
    <div class="agent_wrap">
    <h3>{{$user->username}}</h3>
      <p class="bottom20">
            {{$user->about_me}}
    </p>
      <div class="row">
        <div class="col-sm-6">
          <table class="agent_contact table">
            <tbody>
              <tr class="bottom10">
                <td><strong>الجنسية:</strong></td>
                <td class="text-right">{{$user->nationality}}</td>
              </tr>
              <tr class="bottom10">
                <td><strong>الاقامة:</strong></td>
                <td class="text-right">{{$user->country}}</td>
              </tr>
              <tr>
                <td><strong>الميل:</strong></td>
                <td class="text-right"><a href="#.">{{$user->email}}</a></td>
              </tr>
              <tr>
                <td><strong>الحالة:</strong></td>
                <td class="text-right"><a href="#.">{{$user->social_status}}</a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-sm-6">
          <table class="agent_contact table">
            <tbody>
              <tr class="bottom10">
                <td><strong>العمر:</strong></td>
                <td class="text-right">{{$user->age}} سنة</td>
              </tr>
              <tr class="bottom10">
                <td><strong>المؤهل:</strong></td>
                <td class="text-right">{{$user->education}}</td>
              </tr>
              <tr>
                <td><strong>المهنة:</strong></td>
                <td class="text-right"><a href="#.">{{$user->profession}}</a></td>
              </tr>
              {{--  <tr>
                <td><strong>التدخين:</strong></td>
                <td class="text-right"><a href="#.">غير مدخن</a></td>
              </tr>  --}}
            </tbody>
          </table>
        </div>
      </div>
      <ul class="social_share bottom20">
        <li><a href="{{$user->facebook_link}}" class="facebook"><i class="icon-facebook-1"></i></a></li>
        <li><a href="{{$user->twitter_link}}" class="twitter"><i class="icon-twitter-1"></i></a></li>
        <li><a href="{{$user->gmail_link}}" class="google"><i class="icon-google4"></i></a></li>
        <li><a href="{{$user->linkedin_link}}" class="linkden"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="{{$user->instagram_link}}" class="instagram"><i class="icon-instagram"></i></a></li>
      </ul>
      <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
      <p><h4>مواصفات شريك الحياة</h4> 
        {{$user->about_another}} 
         </p>
    </div>
  </div>
  <div class="col-sm-3 bottom40">
    <form class="callus bottom40">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="الموضوع">
      </div>
      <div class="form-group">
        <textarea class="form-control" placeholder="الرسالة"></textarea>
      </div>
      <input type="submit" class="btn-blue uppercase border_radius" value="إرسال">
    </form>
    <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
    <p>
      <input type="submit" class="btn btn-warning pull-left" value="تبليغ الادارة بإساءة">
      <input type="submit" class="btn btn-danger pull-right" value="حظر">
    </p>
  </div>
</div>
</div>
</section>
<!-- Agent Profile End -->

@endsection