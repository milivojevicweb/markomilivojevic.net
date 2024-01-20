@extends('layouts.template')

@section('title')
Obnovi lozinku
@endsection('title')


@section('page')
Obnovi lozinku
@endsection('page')

@section('ogImage')
{{asset('images/ogImg.webp')}}
@endsection('ogImage')

@section('centar')

@include('front.partials.secondHeader')

<div class="wrapper">

    <div class="formContainer">

        <form method="POST" class="form" action="{{url('/zaboravljenaLozinka')}}">
            <ul>
            @csrf
                <li><label for="forgotEmail">Email</label><input class="forgot" id="forgotEmail" type="email" name="email"/></li>
                <li><button type="submit" disabled  class="buttonDisable button" id="forogtButton">Reset</button></li>
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



@endsection('centar')


@section('javascript')
@parent
    <script type="text/javascript" src="{{asset('js/resetPassword.js')}}"></script>
@endsection('javascript')
