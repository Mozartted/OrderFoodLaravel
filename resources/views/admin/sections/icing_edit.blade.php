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
                        @if(Auth::user()->usergroup->name=='Admin')
                            <li class="active"><a href="#note-tab" data-toggle="tab">Add Icing</a></li>
                        @endif
                    </ul>
                    <div id="generalTabContent" class="tab-content responsive">
                        <div id="note-tab" class="tab-pane fade in active">
                            <div class="row">
                                <div class="panel panel-orange">
                                    <div class="panel-heading">
                                        Edit Icing</div>
                                    <div class="panel-body pan">
                                        {!! Form::model($icing,['url' => '/administrator/icing/'.$icing->id.'/update','method' => 'put']) !!}
                                        <div class="form-body pal">
                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-user"></i>
                                                    {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Icing\'s name'])!!}</div>
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
                </div>
            </div>
        </div>
        <!--END CONTENT-->
        <!--BEGIN FOOTER-->
        @include('admin.sections.partials.footer')
    </div>
@endsection