@extends('layouts.template')

@section('title')
    About.
@endsection('title')

@section('page')
    About.
@endsection('page')

@section('ogImage')
{{asset('images/ogImg.webp')}}
@endsection('ogImage')

@section('centar')
    @include('front.partials.secondHeader')


    <div class="wrapper">
        <div id="about">
            <div id="aboutText">
                <h1>Marko Milivojevic</h1>
                <p>Hello! I'm Marko, a graduate expert in information technology and a passionate enthusiast for boxing and
                    traveling.</p>
                <p>My professional journey commenced with the completion of my degree at the ICT school, where I gained a
                    profound understanding of information technologies and the skills necessary for crafting innovative
                    solutions.</p>
                <p>Outside of work, my life is interwoven with the world of sports, particularly boxing, where the
                    challenges of the ring become my daily training. Through sports, I've learned determination, discipline,
                    and persistence — values I transfer into the professional aspects of my life.</p>
                <p>Furthermore, my love for travel propels me to explore various cultures and create unforgettable memories
                    worldwide. Each journey brings new perspectives and inspiration that I apply to my work.</p>
                <p>In the professional realm, I strive to apply my experience and skills in the best way possible, providing
                    innovative and efficient solutions. I invite you to explore my portfolio and gain insight into my work.
                </p>
                <img src="{{ asset('images/potpis.webp') }}" alt="marko milivojevic" />
            </div>
            <div id="aboutImage">
                <img src="{{ asset('images/markoPortret.webp') }}" alt="marko milivojevic" />
            </div>
        </div>
    </div>
@endsection('centar')

@section('javascript')
    @parent
@endsection('javascript')
