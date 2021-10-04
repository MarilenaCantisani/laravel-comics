@extends('layout.main')

@section('title-page', $comic['title'] )
    

@section('content-main')
    <section class="details-comic">
        <div class="container">
            <img class="img-thumb" src="{{ $comic['thumb'] }}" alt="">
            <h1>{{ $comic['title']}}</h1>
        </div>
        <div class="info-box container">
            <div class="details ">
                <div class="info-price">
                    <div>
                        <span class= "light-green">U.S. Price:</span>  
                        {{$comic['price']}}
                    </div>
                    <span  class="light-green">AVAILABLE</span>
                    <span>Check Availability</span>
                </div>
                <p class="description">
                    {{$comic['description']}}
                </p>
            </div>
            <div class="adv">
                <h5>ADVERTISEMENT</h5>
                <img src="{{asset('images/adv.jpg')}}" alt="">
            </div>

        </div>
        

    </section>
    <section class="bg-grey b-1">
        <div class="info-comic container">
            <div class="talent">
                <h6>Talent</h6>
                <div class="artists">
                    <span class="title-row">Art by:</span> 
                    <span>
                        @foreach ($comic['artists'] as $artist)
                        <a href="#">{{$artist}}</a>,  
                        @endforeach
                    </span>            
                </div>
                <div class="writers">
                    <span class="title-row">Written by:</span>
                    <span>
                        @foreach ($comic['writers'] as $writer)
                        <a href="#">{{$writer}}</a>,  
                        @endforeach
                    </span>
    
                </div>
    
            </div>
            <div class="specs">
                <h6>Specs</h6>
                <div class="series">
                    Series: <a href="#"> {{$comic['series']}}</a>
                </div>
                <div class="price">
                    U.S. Price: {{$comic['price']}}
                </div>
                <div class="date">
                    <time>On sale date: {{$comic['sale_date']}}</time>
                </div>
    
            </div>

        </div>
        
    </section>
    
@endsection
