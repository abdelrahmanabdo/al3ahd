@extends('layouts.layout') 
@section('content')

<!-- Gallery -->
<section id="property" class="padding bg_gallery">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase">أجدد الاعضاء</h2>
                <p class="heading_space">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ
                    العام 45 قبل الميلاد، مما </p>
            </div>
        </div>
        <div class="clearfix">
            <div id="filters-property" class="cbp-l-filters-button text-center">
                <div data-filter=".latest" class="cbp-filter-item-active cbp-filter-item">أعزب</div>
                <div data-filter=".sale" class="cbp-filter-item">أرمل</div>
                <div data-filter=".rent" class="cbp-filter-item">مسيار</div>
            </div>
        </div>
        <div id="property-gallery" class="cbp listing1">
            @forelse($armlUsers as $arml)
            <div class="cbp-item latest marride">
                <div class="property_item user-box">
                    <div class="image">
                        <a href="#"><img src="images/listing1.jpg" alt="" class="img-responsive user-cover"></a>
                        <a href="#"><img src="{{$arml->profile_picture ? asset('storage/avatars/'.$arml->profile_picture) : 'images/img-profile.jpg'}}" alt="" class="user-img"></a>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="#">{{$arml->username}}</a></h3>
                            <p>{{$arml->about_me}}</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="fa fa-address-card-o" aria-hidden="true"></i>{{$arml->nationality}}</span>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i>{{$arml->country}}</span>
                            <span><i class="fa fa-birthday-cake" aria-hidden="true"></i><bdi> {{$arml->age}}</bdi>سنة</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="fa fa-briefcase" aria-hidden="true"></i>{{$arml->profession}}</span>
                            <span><i class="fa fa-child" aria-hidden="true"></i>
                @if($arml->children === 0)
                ليس لديه الاطفال
            @elseif($arml->children === 1)
            طفل
            @elseif($arml->children === 2)
            طفلين
            @elseif($arml->children === 3)
            3 أطفال
            @elseif($arml->children === 4)
            4 أطفال
            @elseif($arml->children === 5)
            5 أطفال
            @endif
              </span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;<a href="{{url('/profile/'.$arml->id)}}">الصفحة الشخصية</a>                                </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-blocked"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="seventy">
                            <ul>
                                    <li><a href="{{$arml->facebook_link}}" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                    <li><a href="{{$arml->twitter_link}}" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                    <li><a href="{{$arml->gmail_link}}" class="twitter"><i class="icon-google"></i> Gmail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @empty 
   
               <h3 class="well">لا يوحد نتائج</h3>

            @endforelse 
            
            @forelse($a3zbUsers as $a3zb)
            <div class="cbp-item sale marride">
                <div class="property_item user-box">
                    <div class="image">
                        <a href="#"><img src="images/listing1.jpg" alt="" class="img-responsive user-cover"></a>
                        <a href="#"><img src="{{$a3zb->profile_picture ? asset('storage/avatars/'.$a3zb->profile_picture) : 'images/img-profile.jpg'}}" alt="" class="user-img"></a>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="#">{{$a3zb->username}}</a></h3>
                            <p>{{$a3zb->about_me}}</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="fa fa-address-card-o" aria-hidden="true"></i>{{$a3zb->nationality}}</span>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i>{{$a3zb->country}}</span>
                            <span><i class="fa fa-birthday-cake" aria-hidden="true"></i><bdi> {{$a3zb->age}}</bdi>سنة</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="fa fa-briefcase" aria-hidden="true"></i>{{$a3zb->profession}}</span>
                            <span><i class="fa fa-child" aria-hidden="true"></i>
                @if($a3zb->children === 0)
                ليس لديه الاطفال
            @elseif($a3zb->children === 1)
            طفل
            @elseif($a3zb->children === 2)
            طفلين
            @elseif($a3zb->children === 3)
            3 أطفال
            @elseif($a3zb->children === 4)
            4 أطفال
            @elseif($a3zb->children === 5)
            5 أطفال
            @endif
                </span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;<a href="{{url('/profile/'.$a3zb->id)}}">الصفحة الشخصية</a>                                </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-blocked"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="seventy">
                            <ul>
                                <li><a href="{{$a3zb->facebook_link}}" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                <li><a href="{{$a3zb->twitter_link}}" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                <li><a href="{{$a3zb->gmail_link}}" class="twitter"><i class="icon-google"></i> Gmail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @empty 

             <h3 class="well">لا يوحد نتائج</h3>
            
            @endforelse
            
            @forelse($misyarUsers as $misyar)
            <div class="cbp-item rent marride">
                <div class="property_item user-box">
                    <div class="image">
                        <a href="#"><img src="images/listing1.jpg" alt="" class="img-responsive user-cover"></a>
                        <a href="#"><img src="{{$misyar->profile_picture ? asset('storage/avatars/'.$misyar->profile_picture) : 'images/img-profile.jpg'}}" alt="" class="user-img"></a>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="#">{{$misyar->username}}</a></h3>
                            <p>{{$misyar->about_me}}</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="fa fa-address-card-o" aria-hidden="true"></i>{{$misyar->nationality}}</span>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i>{{$misyar->country}}</span>
                            <span><i class="fa fa-birthday-cake" aria-hidden="true"></i><bdi> {{$misyar->age}}</bdi>سنة</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="fa fa-briefcase" aria-hidden="true"></i>{{$misyar->profession}}</span>
                            <span><i class="fa fa-child" aria-hidden="true"></i>
                @if($misyar->children === 0)
                ليس لديه الاطفال
            @elseif($misyar->children === 1)
            طفل
            @elseif($misyar->children === 2)
            طفلين
            @elseif($misyar->children === 3)
            3 أطفال
            @elseif($misyar->children === 4)
            4 أطفال
            @elseif($misyar->children === 5)
            5 أطفال
            @endif
            </span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;<a href="{{url('/profile/'.$misyar->id)}}">الصفحة الشخصية</a>                                </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-blocked"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="seventy">
                            <ul>
                                    <li><a href="{{$misyar->facebook_link}}" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                    <li><a href="{{$misyar->twitter_link}}" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                    <li><a href="{{$misyar->gmail_link}}" class="twitter"><i class="icon-google"></i> Gmail</a></li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @empty

               <h3 class="well">لا يوحد نتائج</h3>
            
             @endforelse
        </div>
        <div class="col-sm-12 text-center top20">
            <a href="{{route('new-members')}}" class="btn-dark border_radius uppercase margin40">المزيد من الأعضاء</a>
        </div>
    </div>
</section>
<!-- Gallery End -->





<!--Parallax-->
<section id="parallax_four" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 bottom30">
                <h2 class="uppercase">أكثر من <strong>700</strong> حالة زواج تمت بفضل الله</h2>
            </div>
            <div class="col-sm-8 col-md-10">
                <div class="row">
                    <div class="col-sm-6 margin40">
                        <i class="icon-presentation"></i>
                        <h4 class="bottom10">عنوان جانبى</h4>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي
                            للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                    </div>
                    <div class="col-sm-6 margin40">
                        <i class="icon-icons215"></i>
                        <h4 class="bottom10">عنوان جانبى</h4>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي
                            للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Owner ends-->


<!--Testinomials-->
<section id="testinomialBg" class="padding bg_light">
    <div id="agent-2" class="padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="uppercase">أخر زيجات تمت بفضل الله</h2>
                    <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر
                        أو الكلمات العشوائية إلى النص.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 margin40">
                    <div class="agent_wrap">
                        <div class="image">
                            <img src="images/agent-one.jpg" alt="Agents">
                            <div class="img-info">
                                <h3>أحمد و فاطمة</h3>
                                <span>عازب - عازبة</span>
                                <p class="top20 bottom30">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                    إدخال بعض النوادر أو الكلمات العشوائية إلى النص.</p>
                                <table class="agent_contact table">
                                    <tbody>
                                        <tr class="bottom10">
                                            <td><strong>أحمد:</strong></td>
                                            <td class="text-right">مصر</td>
                                        </tr>
                                        <tr>
                                            <td><strong>فاطمة:</strong></td>
                                            <td class="text-right"><a href="#.">البحرين</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <a class="btn-more" href="blank.html">
              <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>إقرأ المزيد</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
              </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 margin40">
                    <div class="agent_wrap">
                        <div class="image">
                            <img src="images/agent-five.jpg" alt="Agents">
                            <div class="img-info">
                                <h3>عبد الرحمن و وسام</h3>
                                <span>أرمل - مطلقة</span>
                                <p class="top20 bottom30">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                    إدخال بعض النوادر أو الكلمات العشوائية إلى النص.</p>
                                <table class="agent_contact table">
                                    <tbody>
                                        <tr class="bottom10">
                                            <td><strong>عبد الرحمن:</strong></td>
                                            <td class="text-right">الكويت</td>
                                        </tr>
                                        <tr>
                                            <td><strong>وسام:</strong></td>
                                            <td class="text-right"><a href="#">الكويت</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <a class="btn-more" href="blank.html">
              <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>إقرأ المزيد</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
              </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 margin40">
                    <div class="agent_wrap">
                        <div class="image">
                            <img src="images/agent-six.jpg" alt="Agents">
                            <div class="img-info">
                                <h3>حسام و حنان</h3>
                                <span>أعزب- أرملة</span>
                                <p class="top20 bottom30">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                    إدخال بعض النوادر أو الكلمات العشوائية إلى النص.</p>
                                <table class="agent_contact table">
                                    <tbody>
                                        <tr class="bottom10">
                                            <td><strong>حسام:</strong></td>
                                            <td class="text-right">السعودية</td>
                                        </tr>
                                        <tr>
                                            <td><strong>حنان:</strong></td>
                                            <td class="text-right"><a href="#.">البحرين</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <a class="btn-more" href="blank.html">
              <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>إقرأ المزيد</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
              </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testinomials ends-->
@endsection