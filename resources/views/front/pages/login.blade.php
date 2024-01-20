@extends('layouts.template')

@section('title')
Prijava
@endsection('title')


@section('page')
Prijava
@endsection('page')

@section('ogImage')
{{asset('images/ogImg.webp')}}
@endsection('ogImage')

@section('centar')

@include('front.partials.secondHeader')

<div class="wrapper">
    <div id="loginContainer">
        <div id="loginContent">
            <form method="POST" action="{{ url("/login") }}">
            <ul>
                <li id="loginHeader">Login</li>
                @csrf
                <li><label for="email">Email </label><input type="email" id="email" name="loginEmail"></li></li>
                <li><label for="password">Password </label><input type="password" id="password" name="loginPassword"/></li>
                <li><button type="submit" id="loginButton" disabled class="buttonDisable"  name="loginButton">Login</button></li>
            </ul>
            </form>
            @isset($errors)
            @foreach($errors->all() as $error)
                <div class="message">
                    {{ $error }}
                </div>
            @endforeach
            @endisset

            @if(session()->has('message'))
                <div class="message">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>

    <div id="loginFooter">
        <a target="_self" rel="follow" href="{{url('/registracija')}}">Registracija</a>
        <a target="_self" rel="follow" href="{{url('/zaboravljenaLozinka')}}">Zaboravili ste lozinku?</a>
    </div>
</div>



@endsection('centar')

@section('javascript')
@parent
    <script type="text/javascript" src="{{asset('js/login.js')}}"></script>
@endsection('javascript')
