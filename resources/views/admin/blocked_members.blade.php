@extends('admin.layout')

@section('adminContent')
  <div class="content-wrapper">
        <section class="content-header">
                <h1>
                  لوحة التحكم
                  <small>لمحتوى الاحصائيات و اخر النشاطات</small>
                </h1>
                <ol class="breadcrumb">
                  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> العهد</a></li>
                  <li class="active">لوحة التحكم</li>
                </ol>
              </section>
          
              <!-- Main content -->
              <section class="content">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">كل الاعضاء</h3>
          
                        <div class="box-tools">
                          <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="بحث">
          
                            <div class="input-group-btn">
                              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                          <tbody>
                            <tr>
                              <th>صورة</th>
                              <th>إسم المستخدم</th>
                              <th>الحالة</th>
                              <th>العضوية</th>
                              <th>تفاصيل</th>
                            </tr>
                            @forelse($users as $user)

                          <tr>
                            <td><img src="{{asset('storage/avatars/'.$user->profile_picture)}}" alt="" title="" width="35" height="35"></td>
                            <td><a href="{{route('userDetails',$user->id)}}">{{$user->username}}</a></td>
                            <td>{{$user->social_status}}</td>
                            <td><span class="label label-danger">محظور</span></td>
                            <td>{{$user->about_me ? $user->about_me : '-'}}</td>
                          </tr>
                          @empty
                          <h4>لا يوجد أعضاء حتي الأن</h4>
                       @endforelse
                        </tbody>
                      </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                </div>
              </section>
  </div>

@endsection