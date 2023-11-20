@extends('layouts.main')

@section('content')

    <section>
<h1>Prodotti</h1>
<div class="col">
    @forelse ($products as $product)
    <div class="box">
        <!-- Mostra l'immagine principale del prodotto -->
        <img class="image1" src="{{ Vite::asset('resources/img/') . $product['frontImage'] }}" alt="">
        <!-- Mostra l'immagine secondaria del prodotto -->
        <img class="image2" src="{{ Vite::asset('resources/img/') . $product['backImage'] }}" alt="">
        <div class="discount">-50%</div>
        <!-- Mostra "Sostenibilità" se la prop sostenibilita è true -->
        <div class="box-sostenibilità">Sostenibilità</div>
        <div class="hearts">&hearts;</div>
    </div>
    <div class="img-txt">
        <p>{{ $product['name'] }}</p>
        <h4>{{$product['brand']}} - {{$product['name']}}</h4>
        <!-- Mostra il prezzo intero se disponibile -->
        <strong>{{ $product['price'] }} &euro;</strong>
        <!-- Mostra il prezzo scontato -->
        <span>10 &euro;</span>
    </div>

    @empty

    <p>Non ci sono prodotti</p>

    @endforelse
</div>
    </section>

@endsection


@section('title')
    Prodotti
@endsection
