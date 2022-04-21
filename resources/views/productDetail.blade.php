@extends('layouts.homeLayout')

@section('pageTitle', $serie['title'])

@section('mainContent')    
    
    <section>
        <div class="container-small">
            <div class="wrapper-description">
                <h1>
                    {{$serie['title']}}
                </h1>

                <div class="container-check">
                    <div class="wrapper-check">
                        <div>U.S Price: <span>{!!$serie['price']!!}</span></div>
                        <div>Avaiable</div>
                    </div>
                    <button class="check-button">Check Availability</button>
                </div>

                <p class="description">{{$serie['description']}}</p>
            </div>

            <div class="container-advertisament">
                <div class="advertisament">advertisament</div>
            </div>
        </div>
    </section>

    <section class="bg-section">
        <div class="container-small info">
            <div class="box-wrapper">
                <div class="box-info"><h2>Talent</h2></div>
                <div class="box-info">
                    <div class="sub-title">Art by:</div>
                    <div class="box">
                        @foreach ($serie['artists'] as $item)
                           <span>{{$item}}</span>, 
                        @endforeach
                    </div>
                </div>
                <div class="box-info">
                    <div class="sub-title">Written by:</div>
                    <div class="box">
                        @foreach ($serie['writers'] as $item)
                           <span>{{$item}}</span>, 
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="box-wrapper">
                <div class="box-info"><h2>Specs</h2></div>
                <div class="box-info">
                    <div class="sub-title">Series: </div>
                    <div class="box"><span>{{$serie['series']}}</span></div>
                </div>
                <div class="box-info">
                    <div class="sub-title">U.S. Price: </div>
                    <div class="box">{{$serie['price']}}</div>
                </div>
                <div class="box-info">
                    <div class="sub-title">On Sale Date:</div>
                    <div class="box">{{$serie['sale_date']}}</div>
                </div>
            </div>
        </div>
    </section>

@endsection