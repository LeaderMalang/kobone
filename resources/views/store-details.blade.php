@extends('layouts.app')
@section('Stores', 'All Stores')
@section('content')
	<section class="list-store">
        <!-- list-store -->
        <div class="container">
            <div class="row">
                <!-- list-store-left -->
                <div class="col-sm-12 col-md-8 col-xs-12">
                    <!-- our-details-outer -->
                    <div class="row">
                        @if(count($storeCoupons[0]->coupons)>0)
                            @foreach($storeCoupons[0]->coupons as $coupons)
                                <div class="col-md-3">
                                    <!-- featured-coupons-box -->
                                    <div class="featured-coupons-box">
                                        <!-- featured-coupons-images -->
                                        <div class="featured-coupons-images">
                                            <img src="{{asset("public/storage/".$storeCoupons[0]->image)}}" alt="feature-logo">
                                        </div>
                                        <!-- /featured-coupons-images -->
                                        <!-- featured-coupons-text -->
                                        <div class="featured-coupons-text">
{{--                                            <div class="star">--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
                                            <h6>{{$coupons->name}}</h6>
                                            <p>{{str_limit($coupons->description,50)}}</p>
                                            <a href="#"><img src="{{URL::asset('images/cupon-icon.png')}}" alt="cupon-icon"> Show Code</a>
{{--                                            <div class="date">Expire : 15/07/2016</div>--}}
{{--                                            <div class="comment"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</div>--}}
                                        </div>
                                    </div>
                                    <!-- /featured-coupons-text -->
                                    <!-- featured-coupons-box -->
                                </div>

                            @endforeach
                        @else
                            <h1>No Records Found Against this Search</h1>
                        @endif
                    </div>
                    <!-- our-details-outer -->
                </div>
                <!-- list-store-left end -->
                <!-- list-store-right -->
                <div class="col-sm-12 col-md-4 col-xs-12 right-side">
                    <!-- deal weight -->

                    <div class="weight">
                        <img src="{{asset("public/storage/".$storeCoupons[0]->image)}}">
                    </div>
                    <!-- /deal weight -->
                    <!-- in-short weight -->
                    <div class="weight">
                        <div class="in-short">
                            <h4>{{$storeCoupons[0]->name}}</h4>
                            <p>{{$storeCoupons[0]->heading_1}}</p>
{{--                            <a href="#">READ MORE</a>--}}
{{--                            <ul class="socail-icon">--}}
{{--                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                    <!-- / in-short weight -->
{{--                    <div class="weight map">--}}
{{--                        <!--  map  -->--}}
{{--                        <!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->--}}
{{--                        <div id="map"></div>--}}
{{--                        <!-- /map end -->--}}
{{--                    </div>--}}
                    <!-- similar-offer-box weight -->
{{--                    <div class="weight search">--}}
{{--                        <h4>Similar Offers</h4>--}}
{{--                        <div class="similar-offer-box">--}}
{{--                            <img src="assets/images/similar-offer-img.jpg" alt="cupon-icon">--}}
{{--                            <p>Three Supreme Washes and Po...</p>--}}
{{--                            <p class="price">$200.00 <span>$250.00</span></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- /similar-offer-box weight -->
                </div>
                <!-- list-store-right end -->
            </div>
        </div>
        <!-- list-store end -->
    </section>

@endsection
