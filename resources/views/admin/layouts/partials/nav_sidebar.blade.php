<nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
     data-position="right" class="navbar-default navbar-static-side">
    <div class="sidebar-collapse menu-scroll">
        <ul id="side-menu" class="nav">

            <div class="clearfix"></div>
            <li class="active">
                <a href="{{url('administrator')}}">
                    <i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i>
                            <span class="menu-title">
                                Dashboard
                            </span>
                </a>
            </li>
            <li><a href="{{url('administrator/users')}}"><i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Users</span></a>

            </li>
            <li><a href="{{url('administrator/product')}}"><i class="fa fa-send-o fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Products</span></a>

            </li>
            <li><a href="{{url('administrator/features')}}"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Features and Contents</span></a>

            </li>
            <li><a href="{{url('administrator/orders')}}"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Orders</span></a>

            </li>
            <li><a href="{{url('administrator/blog')}}"><i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Blog</span></a>

            </li>
            @if(isset($blog))
                <li><a href="{{url('administrator/blog/new')}}"><i class="fa fa-database fa-fw">
                            <div class="icon-bg bg-red"></div>
                        </i><span class="menu-title">New Post</span></a>
                </li>
            @endif

            <li><a href="{{url('administrator/messages')}}"><i class="fa fa-file-o fa-fw">
                        <div class="icon-bg bg-yellow"></div>
                    </i><span class="menu-title">Messages</span></a>

            </li>
            <li><a href="{{url('administrator/forum')}}"><i class="fa fa-gift fa-fw">
                        <div class="icon-bg bg-grey"></div>
                    </i><span class="menu-title">Forum</span></a>

            </li>

        </ul>
    </div>
</nav>