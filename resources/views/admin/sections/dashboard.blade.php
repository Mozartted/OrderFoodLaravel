@extends('admin.layouts.master')

@section('content')
<div id="page-wrapper">
    <!--BEGIN TITLE & BREADCRUMB PAGE-->
    @include('admin.sections.partials.dashboard_header')
    <!--END TITLE & BREADCRUMB PAGE-->
    <!--BEGIN CONTENT-->
    <div class="page-content">
        <div id="tab-general">
            <div id="sum_box" class="row mbl">
                <div class="col-sm-6 col-md-3">
                    <div class="panel profit db mbm">
                        <div class="panel-body">
                            <p class="icon">
                                <i class="icon fa fa-shopping-cart"></i>
                            </p>
                            <h4 class="value">
                                            <span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0">
                                            </span><span>$</span></h4>
                            <p class="description">
                                Orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="panel income db mbm">
                        <div class="panel-body">
                            <p class="icon">
                                <i class="icon fa fa-money"></i>
                            </p>
                            <h4 class="value">
                                <span>215</span><span>$</span></h4>
                            <p class="description">
                                Total Order Worth</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel visit db mbm">
                        <div class="panel-body">
                            <p class="icon">
                                <i class="icon fa fa-group"></i>
                            </p>
                            <h4 class="value">
                                <span>128</span></h4>
                            <p class="description">
                                Visitor description</p>
                            <div class="progress progress-sm mbn">
                                <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 70%;" class="progress-bar progress-bar-warning">
                                    <span class="sr-only">70% Complete (success)</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mbl">
                <div class="col-lg-8">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
            <div class="row mbl">
                <div class="col-lg-4">
                    <div class="panel">

                    </div>
                </div>
                <div class="col-lg-8">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">

                </div>
                <!--<div class="col-lg-4">
                <div id="my-calendar"></div>
            </div>-->

            </div>
        </div>
    </div>
    <!--END CONTENT-->
    <!--BEGIN FOOTER-->
    @include('admin.sections.partials.footer')
    <!--END FOOTER-->
</div>
@endsection