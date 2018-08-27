@extends('admin.layout')

@section('adminContent')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        لوحة التحكم
        <small>لمحتوى الاحصائيات و اخر النشاطات</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="route('dashboard')"><i class="fa fa-dashboard"></i> العهد</a></li>
        <li class="active">لوحة التحكم</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$allUsers}}</h3>
              <p>عدد الأعضاء</p>
            </div>
            <div class="icon">
              <i class="fa fa-users" aria-hidden="true"></i>
            </div>
            <a href="{{route('allMembers')}}" class="small-box-footer">كل الأعضاء <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$specialUsers}}</h3>
              <p>الأعضاء المميزين</p>
            </div>
            <div class="icon">
              <i class="fa fa-check-square-o" aria-hidden="true"></i>
            </div>
            <a href="{{route('specialMembers')}}" class="small-box-footer">كل الأعضاء المميزين <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$blockedUsers}}</h3>
              <p>الأعضاء المحظورين</p>
            </div>
            <div class="icon">
              <i class="fa fa-ban" aria-hidden="true"></i>
            </div>
            <a href="{{route('blockedMembers')}}" class="small-box-footer">كل الأعضاء المحظورين <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-drk-clr">
            <div class="inner">
              <h3>{{$maleUsers}}</h3>
              <p>الاعضاء الرجال</p>
            </div>
            <div class="icon">
              <i class="fa fa-mars" aria-hidden="true"></i>
            </div>
            {{--  <a href="all-members-men.html" class="small-box-footer">كل الأعضاء الرجال<i class="fa fa-arrow-circle-right"></i></a>  --}}
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-drk-clr">
            <div class="inner">
              <h3>{{$femaleUsers}}</h3>
              <p>الأعضاء السيدات</p>
            </div>
            <div class="icon">
              <i class="fa fa-venus" aria-hidden="true"></i>
            </div>
            {{--  <a href="all-members-women.html" class="small-box-footer">كل الأعضاء السيدات<i class="fa fa-arrow-circle-right"></i></a>  --}}
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-drk-clr">
            <div class="inner">
              <h3>{{$mysiarUsers}}</h3>
              <p>تقبل زواج مسيار</p>
            </div>
            <div class="icon">
              <i class="fa fa-venus-mars" aria-hidden="true"></i>
            </div>
            {{--  <a href="mesiar-members.html" class="small-box-footer">كل العضوات<i class="fa fa-arrow-circle-right"></i></a>  --}}
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-drk-clr">
            <div class="inner">
              <h3>{{$devorcedUsers}}</h3>

              <p>المطلقين</p>
            </div>
            <div class="icon">
              <i class="fa fa-users" aria-hidden="true"></i>
            </div>
            {{--  <a href="all-divorced.html" class="small-box-footer">كل الاعضاء المطلقين <i class="fa fa-arrow-circle-right"></i></a>  --}}
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->


    </section>
  </div>

@endsection