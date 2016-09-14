<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" @if(isset($service_sec))style="background:rgb(27, 25, 25)" @endif>
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Rebirth</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ url('service')}}">Services</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ url('gallery')}}">Gallery</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ url('about')}}">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ url('team')}}">Team</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ url('contact')}}">Contact</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>