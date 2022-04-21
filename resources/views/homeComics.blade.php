@extends('layouts.homeLayout')

@section('pageTitle', 'DC | Welcome to DC')

@section('mainContent')
    
    <div class="banner">
        <div class="container-banner">
            <div class="title-section">Current series</div>
        </div>
    </div>

    <div class="main-series">
        <div class="container series">
            
            @foreach ($series as $key => $value)
                <div class="wrapper-series">
                    <a href="/{{$key}}">
                        <div class="series-thumb">
                            <img src="{{$value['thumb']}}" alt="">
                        </div>
                        <div class="series-title">
                            <h2>{{$value['title']}}</h2>
                        </div>
                    </a>
                </div>
            @endforeach 

            <div class="button-more">Load More</div>
        </div>
    </div>

    <div class="shop-dc">
        <div class="container shop">
            <ul>
                @foreach ($shopDc as $item)
                    <li>
                        <div class="img-shop">
                            <img src="{{$item['image']}}" alt="">
                        </div>
                        <div class="text-shop">{{$item['shop']}}</div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection