@section('title')
   web prodavnica
@endsection
@extends('master')
@section('main')

<div class="container">
    <div class="row">
        <div class="col s8 offset-s2">
        <h2>Profil bodice</h2>
        <p>*Upišite dodatne informacije</p>
        </div>
        <div class="col s8 offset-s2">
            <form action="{{route('user.info',['id'=> $var_user->id])}}" method="POST">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                    <input type="text" name="name" placeholder="Naziv za Vašu bodicu/kiosk" id="name" value="{{$var_user->name}}">
                        <label for="name">Naziv</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="email" name="email" placeholder="Kontakt email za kupce" id="email"  value="{{$var_user->email}}">
                        <label for="email">Kontakt email</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="phone" placeholder="Kontakt telefon za kupce" id="phone" class="{{$errors->has('phone') ? 'red':''}}" value="{{old('phone')}}">
                        <label for="phone">Kontakt telefon</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="bpg" placeholder="Broj poljoprivredno gazdinstva (opciono)" id="bpg" value="{{old('bpg')}}">
                        <label for="bpg">BPG</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="img" id="img">
                        <label for="img">Fotografija</label>
                    </div>
                    <button class="btn pink">Potvrdi</button>
                </div>
            </form>
            @if ($errors->any())
            <p class="red-text">Došlo je do greške, molimo Vas proverite unete informacije.</p>
            @endif
        </div>
        </div>
    </div>
@endsection