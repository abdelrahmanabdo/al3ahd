@extends('layouts.layout')
@section('content')

<section id="news-section-1" class="property-details padding_top">
        <div class="container">
            <div class="row">
   

                <div class="col-md-10  col-md-offset-1 col-sm-8 mx-auto">
                  <section id="login" class="padding">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                      <div class="profile-login">
                        <div class="agent-p-form">
                          <form action="{{route('removeAccount')}}"  method="POST" class="callus clearfix">
                              @csrf
                            <div class="input-group margin-bottom-20">
                              <p>للعلم عند حذف عضوبتك سيتم محو كل ما محتوى صفحتك الشخصية و ستصبح خارج الموقع تماماً</p>
                            </div>
                              <input type="submit" value="حذف عضويتى من الموقع" class="btn-slide border_radius margin-bottom-20">
                          </form>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
            </div>
        </div>
    </section>

@endsection