@php
    $main_menu = config('menues.main_menu');
@endphp

<header>
    <div class="topbar">
        <div class="container row">
            <nav class="menu">
                <ul>
                    @foreach ($main_menu as $item)
                        <li><a href="{{ route($item['name'] ) }}">{{ $item['text'] }}</a></li>
                    @endforeach
                    {{-- <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('product') }}">Prodotti</a></li>
                    <li><a href="{{ route('about') }}">Chi Siamo</a></li>
                    <li><a href="{{ route('contacts') }}">Contatti</a></li> --}}
                </ul>
            </nav>
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="Logo Boolean">
            </div>
            <nav class="menu2">
                <ul>
                    <a href="#"><i class="fa-regular fa-user"></i></a>
                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                    <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                </ul>
            </nav>
        </div>
    </div>
</header>
