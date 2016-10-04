@extends('admin.layouts.master')

@section('content')
    <div id="page-wrapper">
        @include('admin.sections.partials.users_header',['header'=>'Prices'])
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
                        <li class="active"><a href="#alert-tab" data-toggle="tab">Price</a></li>
                        @if(Auth::user()->usergroup->name=='Admin')
                            <li><a href="#note-tab" data-toggle="tab">Add Prices</a></li>
                        @endif


                    </ul>
                    <div id="generalTabContent" class="tab-content responsive">
                        <div id="alert-tab" class="tab-pane fade in active">
                            <div class="row">
                                <div class="panel panel-green">
                                    <div class="panel-heading">prices</div>
                                    <div class="panel-body">
                                        <!--Displays the users and their levels Admin or writer-->

                                        <table class="table table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th>#</th>

                                                <th>Amount</th>
                                                @if(Auth::user()->usergroup->name=='Admin')
                                                    <th>Edit/Delete</th>
                                                @endif
                                            </tr>
                                            </thead>
                                            <tbody>


                                            @foreach($prices as $price)

                                                <tr>
                                                    <td>{!! $price->id !!}</td>
                                                    <td><span class="label label-sm label-success">{!! $price->amount !!}</span></td>
                                                    @if(Auth::user()->usergroup->name=='Admin')
                                                        <td><a href="{{url('administrator/price/'.$price->id.'/edit')}}">Edit</a> | {!! Form::open(['method' => 'DELETE', 'route' => ['price.delete', $price->id]]) !!}
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
                                        Create A Flavour</div>
                                    <div class="panel-body pan">
                                        {!! Form::open(['route'=>'new_price']) !!}
                                        <div class="form-body pal">

                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-envelope"></i>
                                                    {!!Form::number('amount', null, ['class' => 'form-control', 'placeholder' => 'Enter the Price'])!!}</div>
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