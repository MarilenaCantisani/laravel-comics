<header class="container d-flex j-content-between a-items-center">
    {{-- Logo --}}
    <figure><a href=""><img id="logo" src="{{asset('images/dc-logo.png')}}" alt="Logo-Comics" /></a></figure>
    {{-- Nav bar --}}
    <nav>
      <ul class="uppercase d-flex">
        @foreach ($nav_items as $item)
        <li>
            <a href="{{$item['route']}}">{{$item['text']}}</a>
        </li>           
        @endforeach   
      </ul>
    </nav>
  </header>