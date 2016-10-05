@extends('admin.layouts.master')

@section('content')
    <div id="page-wrapper">
        @include('admin.sections.partials.users_header',['header'=>'Blog'])
        <div class="page-content">
            <div id="tab-general">
                <div class="row mbl">
                    <div class="col-lg-12">

                        <div class="col-md-12">
                            <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12">

                        <div class="page-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <div id="grid-layout-table-1" class="box jplist">
                                                <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                                <div class="jplist-panel box panel-top">
                                                    <button type="button" data-control-type="reset" data-control-name="reset" data-control-action="reset" class="jplist-reset-btn btn btn-default">Reset<i class="fa fa-share mls"></i></button>
                                                    <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" class="jplist-drop-down form-control">
                                                        <ul class="dropdown-menu">
                                                            <li><span data-number="3"> 3 per page</span></li>
                                                            <li><span data-number="5"> 5 per page</span></li>
                                                            <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                            <li><span data-number="all"> view all</span></li>
                                                        </ul>
                                                    </div>
                                                    <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                        <ul class="dropdown-menu">
                                                            <li><span data-path="default">Sort by</span></li>
                                                            <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                            <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                            <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                            <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                            <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>
                                                            <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                            <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                            <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text-filter-box">
                                                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".title" type="text" value="" placeholder="Filter by Title" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control"/></div>
                                                    </div>
                                                    <div class="text-filter-box">
                                                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".desc" type="text" value="" placeholder="Filter by Description" data-control-type="textbox" data-control-name="desc-filter" data-control-action="filter" class="form-control"/></div>
                                                    </div>
                                                    <div data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                    <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>
                                                </div>
                                                <div class="box text-shadow">
                                                    <table class="demo-tbl">
                                                        @foreach($posts as $post)

                                                            <tr class="tbl-item"><!--<img/>-->
                                                                <td class="img"><img src="images/thumbs/arch-1.jpg" alt="" title=""/></td>
                                                                <!--<data></data>-->
                                                                <td class="td-block"><p class="date">{{$post->created_at->diffForHumans()}}</p>

                                                                    <p class="title">{{$post->title}}</p>

                                                                    <p class="desc">{{$post->content}}</p>

                                                                    <p class="like">5 Likes</p></td>
                                                            </tr>

                                                            @endforeach
                                                    </table>
                                                </div>
                                                <div class="box jplist-no-results text-shadow align-center"><p>No results found</p></div>
                                                <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                                <div class="jplist-panel box panel-bottom">
                                                    <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-drop-down form-control">
                                                        <ul class="dropdown-menu">
                                                            <li><span data-number="3"> 3 per page</span></li>
                                                            <li><span data-number="5"> 5 per page</span></li>
                                                            <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                            <li><span data-number="all"> view all</span></li>
                                                        </ul>
                                                    </div>
                                                    <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-control-animate-to-top="true" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                        <ul class="dropdown-menu">
                                                            <li><span data-path="default">Sort by</span></li>
                                                            <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                            <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                            <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                            <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                            <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>
                                                            <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                            <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                            <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                        </ul>
                                                    </div>
                                                    <div data-type="{start} - {end} of {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                    <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--END CONTENT-->
        <!--BEGIN FOOTER-->
        @include('admin.sections.partials.footer')
    </div>
@endsection