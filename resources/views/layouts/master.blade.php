<!DOCTYPE html>
<!--
* CoreUI Pro - Bootstrap Admin Template
* @version v2.1.14
* @link https://coreui.io/pro/
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* License (https://coreui.io/pro/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Form</title>
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="{{asset('img/favicon.ico')}}" sizes="any" />
    <link href="{{asset('node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    @yield('css')
    <!-- ckeditor -->
    <!-- <script src="{{asset('ckeditor/ckeditor.js')}}"></script> -->
        <!-- <script src="//cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script> -->
        
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="./home">
        <img class="navbar-brand-full" src="img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i> Settings</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-title">รายการ</li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('from.index') }}">
                <i class="nav-icon icon-pencil"></i>สร้างเอกสาร</a>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-list"></i>กล่องเอกสาร</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="buttons/buttons.html">
                    <i class="nav-icon icon-note"></i>เอกสารรอดำเนินการ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('send.index') }}">
                    <i class="nav-icon icon-note"></i>เอกสารที่เซ็นแล้ว </a>
                </li>
              </ul>
            </li>
            
            <li class="nav-divider"></li>
            <li class="nav-title">Labels</li>
            <li class="nav-item d-compact-none d-minimized-none">
              <a class="nav-label" href="#">
                <i class="fa fa-circle text-danger"></i> Label danger</a>
            </li>
            <li class="nav-item d-compact-none d-minimized-none">
              <a class="nav-label" href="#">
                <i class="fa fa-circle text-info"></i> Label info</a>
            </li>
            <li class="nav-item d-compact-none d-minimized-none">
              <a class="nav-label" href="#">
                <i class="fa fa-circle text-warning"></i> Label warning</a>
            </li>
          </ul>
        </nav>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item" href="{{ url('/home') }}">Home</li>
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="page-header">
              <div class="page-header-title">
                  <h2>สวัสดีครับ / ค่ะ</h2>
              </div>
            </div>
          
            @yield('content')

          </div>
        </div>
      </main>
    </div>
    <!-- <footer class="app-footer">
      <div>
        <a href="https://coreui.io/pro/">CoreUI Pro</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io/pro/">CoreUI Pro</a>
      </div>
    </footer> -->
    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('node_modules/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('node_modules/@coreui/coreui-pro/dist/js/coreui.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    <!-- <script src="{{asset('node_modules/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script> -->
    @yield('js')
  </body>
</html>
