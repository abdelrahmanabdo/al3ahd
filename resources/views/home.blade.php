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
                <div data-filter=".single" class="cbp-filter-item-active cbp-filter-item">أعزب</div>
                <div data-filter=".devorced" class="cbp-filter-item">أرمل</div>
                <div data-filter=".mesyar" class="cbp-filter-item">مسيار</div>
            </div>
        </div>
        <div id="property-gallery" class="cbp listing1">
                <div class="cbp-item single marride">

                @forelse($a3zbUsers as $a3zb)
                    <div class="property_item user-box">
                        <div class="image">
                            <a href="{{url('/profile/'.$a3zb->id)}}"><img src="images/listing1.jpg" alt="" class="img-responsive user-cover"></a>
                            <a href="{{url('/profile/'.$a3zb->id)}}"><img src="{{$a3zb->profile_picture ? asset('storage/avatars/'.$a3zb->profile_picture) : 'images/img-profile.jpg'}}" alt="" class="user-img"></a>
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
    
                @empty 
    
                 <h3 class="well col-md-12">لا يوحد نتائج</h3>
                
                @endforelse
            </div>
            <div class="cbp-item devorced marride">

            @forelse($armlUsers as $arml)
                <div class="property_item user-box">
                    <div class="image">
                        <a href="{{url('/profile/'.$arml->id)}}"><img src="images/listing1.jpg" alt="" class="img-responsive user-cover"></a>
                        <a href="{{url('/profile/'.$arml->id)}}"><img src="{{$arml->profile_picture ? asset('storage/avatars/'.$arml->profile_picture) : 'images/img-profile.jpg'}}" alt="" class="user-img"></a>
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

            @empty 
   
               <h3 class="well col-md-12">لا يوحد نتائج</h3>

            @endforelse 
        </div>
        <div class="cbp-item mesyar marride">

            @forelse($misyarUsers as $misyar)
            
                <div class="property_item user-box">
                    <div class="image">
                        <a href="{{url('/profile/'.$misyar->id)}}"><img src="images/listing1.jpg" alt="" class="img-responsive user-cover"></a>
                        <a href="{{url('/profile/'.$misyar->id)}}"><img src="{{$misyar->profile_picture ? asset('storage/avatars/'.$misyar->profile_picture) : 'images/img-profile.jpg'}}" alt="" class="user-img"></a>
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
            @empty

               <h3 class="well col-md-12">لا يوحد نتائج</h3>
            
             @endforelse
            </div>
        </div>
    </div>
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

@endsection