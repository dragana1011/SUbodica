@section('title')
   Bodice
@endsection
@extends('master')
@section('main')

<div class="container">
    <div class="row">
        @foreach ($var_allUsers as $user)
            <div class="col s3">
                <div class="card">
                <a href="/user/{{$user->id}}">
                    <div class="card-image">
                        <img src="{{$user->img}}">
                    </div>
                </a>
                <div class="card-content">
                    <span class="card-title mb-3">{{$user->name}}</span>
                </div>
                <div class="card-action">
                <p>bodica: <a href="#">{{$user->name}}</a></p>
                   <p>BPG: <span>{{$user->bpg}}</span></p> 
                   <p>Kontakt telefon: <span>{{$user->phone}}</span></p> 
                </div>
            
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection