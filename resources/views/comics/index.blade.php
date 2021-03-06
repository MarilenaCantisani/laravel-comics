@extends('layout.main')

@section('title-page', 'Comics')
    

@section('content-main')
    <section id="content">     
            {{-- Comic Book section container --}}
            <article class="comics-container container">
                <button class="btn-series clickable">CURRENT SERIES</button>
                <ul class="d-flex f-wrap">
                   @foreach ($comics as $comic)
                        <li>
                            <a href="{{route('comics.show', ['id' => $loop->index])}}">
                                <div class="card">
                                    {{-- Image of the comic --}}
                                    <figure class="img-comic-container">
                                        <img class="img-comic" src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                                    </figure>
                                    {{-- Title of the comic --}}
                                    <figcaption class="title-comic uppercase">{{$comic['title']}}</figcaption>
                                </div>
                            </a>
                        </li>
                   @endforeach
                </ul>
                <div class="btn-content d-flex j-content-center w-100">
                    <button class="clickable">LOAD MORE</button>
                </div>
        </article>
    </section>
    {{-- Panel content --}}
    <section id="panel-content">
        <ul class="container d-flex j-content-around a-items-center">
          @foreach ($icons as $icon)
            <li>
                <a href="#">
                <img src="{{$icon['url']}}" alt="{{$icon['text']}}" id="{{$icon['text']}}" />
                {{$icon['text']}}
                </a>
            </li>         
          @endforeach
        </ul>
      </section>
@endsection
