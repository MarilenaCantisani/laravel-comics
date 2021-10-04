@extends('layout.main')

@section('title-page', 'Comics | nome')
    

@section('content-main')
    <section class="details-comic ">      
        <div class="details container">
            <img class="img-thumb" src="{{ $comic['thumb'] }}" alt="">
            <h1>{{ $comic['title']}}</h1>
            <div>
                <span>
                    price
                </span>
                <span>
                    disponibility
                </span>
                <button>check disponibility</button>
            </div>
            <p>
                description
            </p>
    

        </div>
        <div class="adv container">
            <h6>ADV</h6>
            <img src="{{asset('images/adv.jpg')}}" alt="">
        </div>
    </section>
    <section class="info-comic container">
        <div class="talent">
            <div>
                Art by: <a href="">artists</a> 
            </div>
            <div>
                Written by: <a href="">writers</a>

            </div>

        </div>
        <div class="specs">
            <div>
                Series: <a href="">series</a>
            </div>
            <div>
                U.S. Price: price
            </div>
            <div>
                <time>sale_date</time>
            </div>

        </div>
    </section>
    
@endsection
