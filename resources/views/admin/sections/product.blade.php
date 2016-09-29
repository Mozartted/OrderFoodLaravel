@extends('admin.layouts.master')

@section('content')
    <div id="page-wrapper">
        @include('admin.sections.partials.users_header')
        <div class="page-content">
            <div id="tab-general">
                <div class="row mbl">
                    <div class="col-lg-12">

                        <div class="col-md-12">
                            <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                            </div>
                        </div>

                    </div>
                    <ul id="generalTab" class="nav nav-tabs responsive">
                        <li class="active"><a href="#alert-tab" data-toggle="tab">Products</a></li>
                        @if(Auth::user()->usergroup->name=='Admin')
                            <li><a href="#note-tab" data-toggle="tab">Add Product</a></li>
                        @endif


                    </ul>
                    <div id="generalTabContent" class="tab-content responsive">
                        <div id="alert-tab" class="tab-pane fade in active">
                            <div class="row">
                                <div class="panel panel-green">
                                    <div class="panel-heading">Users</div>
                                    <div class="panel-body">
                                        <!--Displays the users and their levels Admin or writer-->

                                        <table class="table table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Products</th>

                                                <th>Name</th>
                                                <th>Price</th>
                                                @if(Auth::user()->usergroup->name=='Admin')
                                                    <th>Edit/Delete</th>
                                                @endif
                                            </tr>
                                            </thead>
                                            <tbody>


                                            @foreach($products as $product)

                                                <tr>
                                                    <td>{!! $product->id !!}</td>
                                                    <td>{!! $product->name !!}</td>

                                                    <td><span class="label label-sm label-success">{!! $user->usergroup->name !!}</span></td>
                                                    @if(Auth::user()->usergroup->name=='Admin')
                                                        <td><a href="{{url('administrator/user/'.$user->id.'/edit')}}">Edit</a> | {!! Form::open(['method' => 'DELETE', 'route' => ['user.delete', $user->id]]) !!}
                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                            {!! Form::close()  !!}</td>
                                                    @endif
                                                </tr>


                                            @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="note-tab" class="tab-pane fade">
                            <div class="row">
                                <div class="panel panel-orange">
                                    <div class="panel-heading">
                                        Create A User</div>
                                    <div class="panel-body pan">
                                        {!! Form::open(['route'=>'new_user']) !!}
                                        <div class="form-body pal">
                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-user"></i>
                                                    {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name'])!!}</div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-envelope"></i>
                                                    {!!Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter email'])!!}</div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-lock"></i>
                                                    {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter password'])!!}</div>
                                            </div>
                                            {!! Form::label('user_group', 'UserGroup') !!}
                                            <div class="form-controls">
                                                {!! Form::select('user_group', $user_group, null, ['class' =>
                                                'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-actions text-right pal">
                                            {!!Form::submit('Submit', ['class' => 'btn btn-primary form-control'])!!}


                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="label-badge-tab" class="tab-pane fade">
                            <div class="panel panel-orange">
                                <div class="panel-heading">
                                    Registration form</div>
                                <div class="panel-body pan">
                                    <form action="#">
                                        <div class="form-body pal">
                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-user"></i>
                                                    <input id="inputName" type="text" placeholder="Username" class="form-control" /></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-envelope"></i>
                                                    <input id="inputEmail" type="text" placeholder="Email address" class="form-control" /></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-lock"></i>
                                                    <input id="inputPassword" type="password" placeholder="Password" class="form-control" /></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-lock"></i>
                                                    <input id="inputConfirmPassword" type="password" placeholder="Confirm Password" class="form-control" /></div>
                                            </div>
                                            <hr />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="inputFirstName" type="text" placeholder="First Name" class="form-control" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="inputLastName" type="text" placeholder="Last Name" class="form-control" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>Gender</option>
                                                    <option value="0">Male</option>
                                                    <option value="1">Female</option>
                                                    <option value="2">Other</option>
                                                </select></div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input tabindex="5" type="checkbox" />&nbsp; I want to receive news and special
                                                        offers</label></div>
                                            </div>
                                            <div class="form-group mbn">
                                                <div class="checkbox">
                                                    <label>
                                                        <input tabindex="5" type="checkbox" />&nbsp; I agree with the Terms and Conditions</label></div>
                                            </div>
                                        </div>
                                        <div class="form-actions text-right pal">
                                            <button type="submit" class="btn btn-primary">
                                                Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="pagination-tab" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-4"><h3>Pagination</h3>
                                    <ul class="pagination mtm mbm">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                    <div class="mbxl"></div>
                                    <h3>Disabled and active states</h3>
                                    <ul class="pagination mtm mbm">
                                        <li class="disabled"><a href="#">&laquo;</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4"><h3>Size</h3>
                                    <ul class="pagination pagination-lg mtm mbm">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                    <ul class="pagination mtm mbm">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                    <ul class="pagination pagination-sm mtm mbm">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4"><h3>Pagination Align</h3>
                                    <ul data-hover="" class="pagination mtm mbm">
                                        <li class="disabled"><a href="#">&laquo;</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                    <div class="text-center">
                                        <ul class="pagination mtm mbm">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li class="active"><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                    <div class="text-right">
                                        <ul class="pagination mtm mbm">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li class="active"><a href="#">5</a></li>
                                            <li class="disabled"><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-lg-4"><h3>Pager</h3>
                                    <ul class="pager">
                                        <li><a href="#">Previous</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4"><h3>Pager Aligned Links</h3>
                                    <ul class="pager">
                                        <li class="previous"><a href="#">&larr; Older</a></li>
                                        <li class="next"><a href="#">Newer &rarr;</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4"><h3>Pager Optional Disabled State</h3>
                                    <ul class="pager">
                                        <li class="previous disabled"><a href="#">&larr; Older</a></li>
                                        <li class="next"><a href="#">Newer &rarr;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!--END CONTENT-->
        <!--BEGIN FOOTER-->
        <div id="footer">
            <div class="copyright">
                <a href="http://themifycloud.com">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
        </div>
    </div>
@endsection