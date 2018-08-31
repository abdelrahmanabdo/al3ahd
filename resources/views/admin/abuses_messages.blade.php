@extends('admin.layout')

@section('adminContent')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      لوحة التحكم
      <small>لمحتوى الاحصائيات و اخر النشاطات</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> العهد</a></li>
      <li class="active">لوحة التحكم</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      {{--  <div class="col-md-12">
        <a href="compose.html" class="btn btn-lg btn-primary margin-bottom">رسالة جديدة <i class="fa fa-plus" aria-hidden="true"></i></a>
      </div>  --}}
      <!-- /.col -->
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">الرسائل</h3>

            {{--  <div class="box-tools pull-right">
              <div class="has-feedback">
                <input type="text" class="form-control input-sm" placeholder="إبحث">
                <span class="fa fa-search form-control-feedback"></span>
              </div>
            </div>  --}}
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
              </button>
              {{--  <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
              </div>  --}}
              <!-- /.btn-group -->
              {{--  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>  --}}
              <div class="pull-right">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.pull-right -->
            </div>
            <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tbody>
                @forelse($abuses as $abuse)
                <tr>
                  <td><input type="checkbox"></td>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="read-mail.html">اسم المرسل</a></td>
                  <td class="mailbox-subject"><b>{{$abuse->abuseContent}}
                  </td>
                  <td class="mailbox-attachment"></td>
                </tr>
                @empty
                
                <h3>لا يوجد رسائل اساءه حتي الان</h3>
                @endforelse
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.box-body -->

        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection