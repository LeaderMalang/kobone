@extends('layouts.app')
@section('Stores', 'All Stores')
@section('content')
    <section class="coupons">
        <div class="container">
            <!-- search-box-coupons -->

            <div class="search-box-coupons">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        foreach(range(0,9) as $v){

                            ?>
                        <a href="{{route('stores')}}?letter={{$v}}"><span>{{ucfirst($v)}}</span></a>
                        <?php
                        }
                        ?>
                        <?php
                        foreach(range('a','z') as $v){
                            ?>
                        <a href="{{route('stores')}}?letter={{$v}}"><span>{{ucfirst($v)}}</span></a>
                        <?php
                         }
                        ?>
                    </div>
{{--                    <div class="col-md-3">--}}
{{--                        <a href="#">BROWSE CATEGORIES</a>--}}
{{--                    </div>--}}

                </div>

            </div>
            <!-- /search-box-coupons -->
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        @if(app('request')->input('letter'))
                        <h1>{{ ucfirst(app('request')->input('letter')) }} Stores</h1>
                        @else
                            <h1>Stores</h1>
                        @endif
                    </div>
                    <div class="col-md-6">
                        Categories
                        <select onchange="location = this.value;">
                            @foreach($categories as $category)
                                @if(app('request')->input('category')==$category->id)
                                    <option selected value="{{route('stores')}}?letter={{app('request')->input('letter')}}&category={{$category->id}}"><?php echo html_entity_decode($category->name) ?> </option>
                                @else
                                    <option  value="{{route('stores')}}?letter={{app('request')->input('letter')}}&category={{$category->id}}"><?php echo html_entity_decode($category->name) ?>  </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(count($stores)>0)
                @foreach($stores as $store)
                <div class="col-md-2">
                    <!-- popular-box -->
                    <div class="popular-box">
                        <!-- popular-image -->
                        <div class="popular-image">
                            <img src="{{asset("public/storage/".$store->image)}}" alt="welcom-img1" />
                            <!-- popular-hover -->
                            <div class="popular-hover">
                                {{$store->count}}
                                <br/> Coupons Available
                            </div>
                            <!-- /popular-hover -->
                        </div>
                        <!-- /popular-image -->
                        <div class="popular-text">
                            <a href="{{route('storeCoupons',$store->slug)}}">{{$store->name}}</a>
                        </div>
                    </div>
                    <!-- /popular-box -->
                </div>
                @endforeach
                @else
                <h1>No Records Found Against this Search</h1>
                @endif
            </div>

        </div>
        @if($search)
        @else
        <div class="row">
            <div class="col-md-12 text-center">

                {!! $stores->render() !!}
            </div>
        </div>
        @endif
    </section>

@endsection


