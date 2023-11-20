<header>
    <div class="topbar">
        <div class="container row">
            <nav class="menu">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('products') }}">Prodotti</a></li>
                    <li><a href="{{ route('about') }}">Chi Siamo</a></li>
                    <li><a href="{{ route('contacts') }}">Contatti</a></li>
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
