
<!--Footer-->
<footer class="padding_top">
    @php 
    use App\GeneralSettings;
    $settings = GeneralSettings::first();
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-6">
                <div class="footer_panel bottom30">
                    <a href="javascript:void(0)" class="logo bottom30"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
                    <p class="bottom15">
                            {{@$settings->description}}
                    </p>
                </div>
            </div>
            <div class="col-md-5 col-sm-5">
                 
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel bottom30">
                    <h4 class="bottom30">تواصل معنا</h4>
                    <ul class="getin_touch">
                        <li><i class="icon-telephone114"></i>{{@$settings->mobile_number}}</li>
                        <li><a href="javascript:void(0)"><i class="icon-mail-envelope-open"></i>{{@$settings->email}}</a></li>
                        <li><i class="icon-icons74"></i>{{@$settings->address}}</li>
                    </ul>

                    <ul class="social_share">
                        <li><a href="{{@$settings->facebook_link}}" class="facebook"><i class="icon-facebook-1"></i></a></li>
                        <li><a href="{{@$settings->twitter_link}}" class="twitter"><i class="icon-twitter-1"></i></a></li>
                        <li><a href="{{@$settings->instagram_link}}" class="linkden"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{@$settings->vim_link}}" class="vimo"><i class="icon-vimeo3"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="footer_panel bottom30">
                    <h4 class="bottom30">روابط مهمة</h4>
                    <ul class="footer-links">
                        <li><a href="{{route('terms')}}">الشروط والأخكام</a></li>
                        <li><a href="{{route('qasam')}}">القسم</a></li>
                        <li><a href="{{route('policy')}}">سياسة الموقع</a></li>
                        <li><a href="{{route('faq')}}">الاسئلة الأكثر إنتشاراً</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--CopyRight-->
<div class="copyright">
    <div class="copyright_inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <p>حقوق الملكية &copy; 2018 <span>العهد</span>. جميع الحقوق محفوظة.</p>
                        <p>تصميم و برمجة <a href="http://www.webideas.online">ويب أيدياز</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{asset('js/jquery-2.1.4.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/jquery-countTo.js')}}"></script>
<script src="{{asset('js/bootsnav.js')}}"></script>
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{asset('js/range-Slider.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/selectbox-0.2.min.js')}}"></script>
<script src="{{asset('js/zelect.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>

</body>
</html>
