@php
  use App\Http\Controllers\UserController;
@endphp

@section('title')
    registracija
@endsection

@extends('master')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
            <h2>Registruj svoju bodicu</h2>
            </div>
            <div class="col s8 offset-s2">
                <form action="/user/register" method="POST">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                        <input type="text" name="name" placeholder="Naziv za Vašu bodicu/kiosk" id="name" class="{{$errors->has('name') ? 'red':''}}" value="{{old('name')}}">
                            <label for="name">Naziv</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="email" name="email" placeholder="Vaš email" id="email" class="{{$errors->has('email') ? 'red':''}}" value="{{old('email')}}">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="password" name="password" placeholder="lozinka" id="password" class="{{$errors->has('password') ? 'red':''}}">
                            <label for="password">Lozinka</label>
                        </div>
                        <button class="btn pink ">Registruj bodicu</button>
                    </div>
                </form>
                @if ($errors->any())
                <p class="red-text">Došlo je do greške, molimo Vas proverite polja.</p>
                @endif
            </div>
            </div>
        </div>
@endsection