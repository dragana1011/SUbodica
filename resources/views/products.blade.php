@section('title')
   web prodavnica
@endsection
@extends('master')
@section('main')

<div class="container">
    <div class="row">
        @foreach ($var_allProducts as $product)
            <div class="col s3">
                <div class="card">
                <a href="/product/{{$product->id}}">
                    <div class="card-image">
                        <img src="{{$product->img}}">
                    </div>
                </a>
                <div class="card-content">
                    <span class="card-title mb-3">{{$product->title}}</span>
                    <p>{{$product->description}}</p><br>
                    <p>cena: {{$product->price}}</p>
                </div>
                <div class="card-action">
                    <p>bodica: <a href="#">{{$product->user}}</a></p>
                   <p>BPG: <span>{{$product->bpg}}</span></p> 
                </div>
                <div class="card-action">
                    <p>kategorija: <a href="#">{{$product->category}}</a></p> 
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection