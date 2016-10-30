@extends('layouts.master')
@section('content')
<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Cake Portfolio</h2>
                <h3 class="section-subheading text-muted"> herea are some of the coolest cakes we have.</h3>
            </div>
        </div>
        <div class="row">
            @if (isset($gallery))
                @foreach ($gallery as $galleria)
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal{{$galleria->id}}" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="{{asset($galleria->pic_location)}}" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>{{ $galleria->title }}</h4>
                            <p class="text-muted">{!! $galleria->note !!}</p>
                        </div>
                    </div>

                @endforeach

            @endif
        </div>
    </div>
</section>
@endsection

@section('modals')
    @if (isset($gallery))
        @foreach ($gallery as $galleria)
            <div class="portfolio-modal modal fade" id="portfolioModal{{ $galleria->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>{{$galleria->title}}</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-responsive img-centered" src="{{ asset($galleria->pic_location) }}" alt="">
                                    <p> {!! $galleria->note !!}<p>
                                        <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                    <ul class="list-inline">
                                        <li>Date: July 2014</li>
                                        <li>Client: Round Icons</li>
                                        <li>Category: Graphic Design</li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    @endif

@endsection
