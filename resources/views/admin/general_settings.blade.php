@extends('admin.layout')

@section('adminContent')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      الإعدادات العامة للموقع
      <!-- <small>لمحتوى الاحصائيات و اخر النشاطات</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> العهد</a></li>
      <li class="active">لوحة التحكم</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- right column -->
      <div class="col-md-10 col-md-offset-1">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">الاعدادات</h3>
          </div>
          @if(session('success'))
          <div class="row">
                
                <div class="alert alert-success col-md-10 col-md-offset-1">
                    {{ session('success') }}
                </div>
            </div>
          @endif
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" action="{{route('updateSettings')}}" method="POST" enctype="multipart/form-data"    >
              @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">إسم الموقع</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="website_name" value="{{@$settings->website_name}}" id="" placeholder="إسم الموقع">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">الشرح</label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control" name="description" rows="5" value="{{@$settings->description}}" id="" placeholder="الشرح" >{{@$settings->description}}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">البريد الإلكترونى</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" name="email" value="{{@$settings->email}}" placeholder="البريد الإلكترونى">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">رقم الهاتف</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="mobile_number" value="{{@$settings->mobile_number}}" placeholder="رقم الهاتف">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">العنوان</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="address" value="{{@$settings->address}}" id="" placeholder="العنوان">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">فيس بوك</label>
                <div class="col-sm-10">
                  <input type="url" class="form-control" name="facebook_link" value="{{@$settings->facebook_link}}" placeholder="فيس بوك">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">تويتر</label>
                <div class="col-sm-10">
                  <input type="url" class="form-control" name="twitter_link" value="{{@$settings->twitter_link}}" id="" placeholder="تويتر">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">إنيستجرام</label>
                <div class="col-sm-10">
                  <input type="url" class="form-control" name="instagram_link" value="{{@$settings->instagram_link}}" id="" placeholder="إنيستجرام">
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">حفظ</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
        <!-- /.box -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection