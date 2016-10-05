<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rebirth |Admin Dashboard Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('admin.layouts.partials.links_refs')
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
        @if(isset($featMenu))
            @if($featMenu==true)
                @include('admin.layouts.partials.nav_sidebar_features')
                @else
                @include('admin.layouts.partials.nav_sidebar')
            @endif
            @else
            @include('admin.layouts.partials.nav_sidebar')
        @endif

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
@if(isset($blog))
@include('admin.layouts.partials.scripts_jlint')
@else
    @include('admin.layouts.partials.scripts')
@endif
</body>
</html>