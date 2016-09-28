<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rebirth |Admin Dashboard Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('admin/images/icons/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('admin/images/icons/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('admin/images/icons/favicon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/icons/favicon-114x114.png')}}">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="{{asset('admin/styles/jquery-ui-1.10.4.custom.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('admin/styles/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('admin/styles/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('admin/styles/animate.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('admin/styles/all.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('admin/styles/main.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('admin/styles/style-responsive.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('admin/styles/zabuto_calendar.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('admin/styles/pace.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('admin/styles/jquery.news-ticker.css')}}">
</head>
<body>
<div>
    <!--BEGIN THEME SETTING-->
    <div id="theme-setting">
        <a href="#" data-toggle="dropdown" data-step="1" data-intro="&lt;b&gt;Many styles&lt;/b&gt; and &lt;b&gt;colors&lt;/b&gt; be created for you. Let choose one and enjoy it!"
           data-position="left" class="btn-theme-setting"><i class="fa fa-cog"></i></a>
        <div class="content-theme-setting">
            <select id="list-style" class="form-control">
                <option value="style1">Flat Squared style</option>
                <option value="style2">Flat Rounded style</option>
                <option value="style3" selected="selected">Flat Border style</option>
            </select>
        </div>
    </div>
    <!--END THEME SETTING-->
    <!--BEGIN BACK TO TOP-->
    <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
    <!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        @include('admin.layouts.partials.nav_topbar')
    </div>

    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
        @include('admin.layouts.partials.nav_sidebar')

        @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-warning">
                {{ Session::get('error') }}
            </div>
        @endif
        @yield('content')
    </div>
</div>
@include('admin.layouts.partials.scripts')
</body>
</html>