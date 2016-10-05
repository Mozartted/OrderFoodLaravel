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
@if(isset($blog))
    <link type="text/css" rel="stylesheet" href="{{asset('admin/styles/jplist-custom.css')}}">

@endif

@if(isset($new))
    <script src="{{asset('admin/script/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '.blog',  // change this value according to your HTML
            menubar: 'file edit tools',
            height:500,
            skin: "mozart"
        });

    </script>
@endif