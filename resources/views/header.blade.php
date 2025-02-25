<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>پنل مدیریت رادیولوژی فرخ</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="{{asset('dist/css/bootstrap-rtl.min.css')}}">
  <!-- template rtl version -->
  <link rel="stylesheet" href="{{asset('dist/css/custom-style.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/me.css')}}">

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-success">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('income')}}" class="nav-link">خانه</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('hellp')}}" class="nav-link v">کمک به توسعه</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('admin')}}" class="nav-link">  مدیریت</a>
      </li>
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('cost')}}" class="nav-link"> هزینه ها </a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
     
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
</div>