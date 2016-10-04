@extends('admin.layouts.master')

@section('content')
    <div id="page-wrapper">
        @include('admin.sections.partials.users_header',['header'=>'Sizes'])
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
                        <li class="active"><a href="#alert-tab" data-toggle="tab">Size</a></li>
                        @if(Auth::user()->usergroup->name=='Admin')
                            <li><a href="#note-tab" data-toggle="tab">Add Sizes</a></li>
                        @endif


                    </ul>
                    <div id="generalTabContent" class="tab-content responsive">
                        <div id="alert-tab" class="tab-pane fade in active">
                            <div class="row">
                                <div class="panel panel-green">
                                    <div class="panel-heading">Sizes</div>
                                    <div class="panel-body">
                                        <!--Displays the users and their levels Admin or writer-->

                                        <table class="table table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Size</th>

                                                <th>Percent</th>
                                                @if(Auth::user()->usergroup->name=='Admin')
                                                    <th>Edit/Delete</th>
                                                @endif
                                            </tr>
                                            </thead>
                                            <tbody>


                                            @foreach($sizes as $size)

                                                <tr>
                                                    <td>{!! $size->id !!}</td>
                                                    <td>{!! $size->name !!}</td>

                                                    <td><span class="label label-sm label-success">{!! $size->percent !!}</span></td>
                                                    @if(Auth::user()->usergroup->name=='Admin')
                                                        <td><a href="{{url('administrator/size/'.$size->id.'/edit')}}">Edit</a> | {!! Form::open(['method' => 'DELETE', 'route' => ['size.delete', $size->id]]) !!}
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
                                        Create A Size</div>
                                    <div class="panel-body pan">
                                        {!! Form::open(['route'=>'new_size']) !!}
                                        <div class="form-body pal">
                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-user"></i>
                                                    {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name'])!!}</div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-envelope"></i>
                                                    {!!Form::number('percent', null, ['class' => 'form-control', 'placeholder' => 'percent'])!!}</div>
                                            </div>
                                            <div class="form-group">

                                            </div>
                                            <div class="form-actions text-right pal">
                                                {!!Form::submit('Submit', ['class' => 'btn btn-primary form-control'])!!}


                                            </div>
                                            {!! Form::close() !!}
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