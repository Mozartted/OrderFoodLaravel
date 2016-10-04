@extends('admin.layouts.master')

@section('content')
    <div id="page-wrapper">
        @include('admin.sections.partials.users_header',['header'=>'Icing'])
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
                        <li class="active"><a href="#alert-tab" data-toggle="tab">Icing</a></li>
                        @if(Auth::user()->usergroup->name=='Admin')
                            <li><a href="#note-tab" data-toggle="tab">Add Icings</a></li>
                        @endif


                    </ul>
                    <div id="generalTabContent" class="tab-content responsive">
                        <div id="alert-tab" class="tab-pane fade in active">
                            <div class="row">
                                <div class="panel panel-green">
                                    <div class="panel-heading">Icings</div>
                                    <div class="panel-body">
                                        <!--Displays the users and their levels Admin or writer-->

                                        <table class="table table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Icing</th>
                                                @if(Auth::user()->usergroup->name=='Admin')
                                                    <th>Edit/Delete</th>
                                                @endif
                                            </tr>
                                            </thead>
                                            <tbody>


                                            @foreach($icings as $icing)

                                                <tr>
                                                    <td>{!! $icing->id !!}</td>
                                                    <td>{!! $icing->name !!}</td>

                                                    @if(Auth::user()->usergroup->name=='Admin')
                                                        <td><a href="{{url('administrator/icing/'.$icing->id.'/edit')}}">Edit</a> | {!! Form::open(['method' => 'DELETE', 'route' => ['icing.delete', $icing->id]]) !!}
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
                        @if(Auth::user()->usergroup->name=="Admin")
                            <div id="note-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="panel panel-orange">
                                        <div class="panel-heading">
                                            Create A Shape</div>
                                        <div class="panel-body pan">
                                            {!! Form::open(['route'=>'new_icing']) !!}
                                            <div class="form-body pal">
                                                <div class="form-group">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-user"></i>
                                                        {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name'])!!}</div>
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

                    </div>
                    @endif



                </div>
            </div>
        </div>
        <!--END CONTENT-->
        <!--BEGIN FOOTER-->
        @include('admin.sections.partials.footer')
    </div>
@endsection