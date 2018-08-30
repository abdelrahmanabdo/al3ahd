<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>العهد | لوحة التحكم</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin_main.css')}}">


  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{route('dashboard')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">العهد</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>مشرف </b>العهد</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">لديك 4 رسائل</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="{{asset('images/admin.jpg')}}" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        فريق الدعم
                        <small><i class="fa fa-clock-o"></i> 5 دقائق</small>
                      </h4>
                      <!-- The message -->
                      <p>محتوى نصى بالرسالة المرسلة</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="all-msgs.html">كل الرسائل</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">لديك 10 إشعارات</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> محتوى تصى بمحتوى الإشعار
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="all-notifications.html">كل الإشعارات</a></li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{asset('images/admin.jpg')}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">مشرف الموقع</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{asset('images/admin.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  إسم مشرف الموقع
                  <small>مشرف منذ 12 يوليو 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="my-profile.html">صفحتى</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="settings.html">الإعدادات</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">خروج</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="my-profile.html" class="btn btn-default btn-flat">صفحتى</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">خروج</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/admin.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>مشرف الموقع</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> نشط</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">صفحات لوحة التحكم</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{route('dashboard')}}"><i class="fa fa-link"></i> <span>لوحة التحكم</span></a></li>
        {{--  <li><a href="all-msgs.html"><i class="fa fa-link"></i> <span>كل الرسائل</span> <span class="label bg-green pull-right">6</span></a></li>
        <li><a href="all-ntfys.html"><i class="fa fa-link"></i> <span>كل الإشعارات</span> <span class="label label-primary pull-right">8</span></a></li>  --}}
      <!--  <li><a href="member-upgrade.html"><i class="fa fa-link"></i> <span>ترقية العضوية</span></a></li> -->
        <li><a href="{{route('allMembers')}}"><i class="fa fa-link"></i> <span>كل الأعضاء</span></a></li>
        <li><a href="{{route('specialMembers')}}"><i class="fa fa-link"></i> <span>الأعضاء المميزين</span></a></li>
        <li><a href="{{route('blockedMembers')}}"><i class="fa fa-link"></i> <span>الأعضاء المحظوريين</span></a></li>
        <li><a href="{{route('generalSettings')}}"><i class="fa fa-link"></i> <span>الاعدادات العامة </span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  @yield('adminContent')


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right">
      تصميم و برمجة <a href="http://www.webideas.online">ويب أيدياز</a>
    </div>
    <!-- Default to the left -->
    حقوق الملكية © 2018 <span>العهد</span>. جميع الحقوق محفوظة.
  </footer>


</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('jsFiles')

</body>
</html>

