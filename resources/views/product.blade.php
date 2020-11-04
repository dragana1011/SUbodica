@section('title')
   web prodavnica
@endsection
@extends('master')
@section('main')
<div class="container">
<div class="row">
    <div class="col s6 offset-s3">
        <div class="card">
                <div class="card-image">
                    <img src="{{ URL::to('/') }}/{{$product->img}}">
                </div>
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
</div>
</div>
@endsection