@extends('admin.layouts.master')

@section('content')
    <div id="page-wrapper">
        @include('admin.sections.partials.users_header',['header'=>'Edit '])
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
                                    <div class="panel panel-blue" style="background:#fff;">
                                        <div class="panel-heading">
                                            Write Your Post</div>
                                        <div class="panel-body pan">
                                            {!! Form::model($gallery,['url' => '/administrator/gallery/'.$gallery->id.'/update','method' => 'put','files' => 'true']) !!}
                                            <div class="form-body pal">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            {!! Form::label('title','Title',['class'=>'control-label']) !!}
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                {!!Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter the gallery title'])!!}
                                                            </div>
                                                        </div>
                                                        <div><img src="{{asset($gallery->pic_location)}}" alt="" title="" style="height: 200px; width: 250px; background-size: contain"/></div>
                                                        <div class="form-group">
                                                            {!!Form::label('pic_location', 'Select A Gallery Image, something nice!!!')!!}
                                                            {!!Form::file('pic_location')!!}
                                                            <p class="help-block">Please select an image.</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('note','Enter The Post Content',['class'=>'control-label']) !!}
                                                    {!! Form::textarea('note',null,['class'=>'gallery form-control','rows'=>5]) !!}

                                                </div>
                                            </div>
                                            <div class="form-actions text-right pal">
                                                {!!Form::submit('Save', ['class' => 'btn btn-primary form-control'])!!}
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
        </div>
    @include('admin.sections.partials.footer')

@endsection