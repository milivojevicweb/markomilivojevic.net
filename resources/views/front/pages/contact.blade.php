@extends('layouts.template')

@section('title')
Contact.
@endsection('title')


@section('page')
Contact.
@endsection('page')

@section('ogImage')
{{asset('images/ogImage.webp')}}
@endsection('title')

@section('centar')

@include('front.partials.secondHeader')


<div id="contact">
    <div class="wrapper">
        <div id="contactContent">
            <div id="contactLeft">
                <ul>
                    <li class="contactHead">Let's get in touch</li>
                    <li class="contactFlex"><div class="faContact"><i class="fa fa-map-marker"></i></div><div class="contactLeftMargin"> <p><span>Address:</span> Smederevska Palanka, Serbia</p></div></li>
                    <li class="contactFlex"><a target="_blank" rel="noopener" href="tel:+381631632894"><div class="faContact"><i class="fa fa-phone"></i></div><div class="contactLeftMargin"><p><span>Phone:</span> +381 63 163 2894</p></div></a></li>
                    <li class="contactFlex"><a target="_blank" rel="noopener" href="mailto:deepaquadetailing@gmail.com"><div class="faContact"><i class="fa fa-send"></i></div> <div class="contactLeftMargin"><p><span>Email:</span> contact@markomilivojevic.net</p></div></a></li>
                    <li id="contactSocial"><a target="_blank" rel="noopener" href="https://www.linkedin.com/in/mmilivojevic"><div class="faContact"><i class="fa fa-linkedin"></i></div></a></li>
                </ul>
            </div>
            <div id="contactRight">
                <form method="POST" action="{{url('/contact')}}">
                    <ul>
                        @csrf
                        <li class="contactHead">Send Message</li>
                        <li><label for="nameLastName">Full Name</label><input type="text" id="nameLastName" placeholder="Name" name="nameLastName" /></li>
                        <li><label for="email">Email Address</label><input type="email" id="email" placeholder="Email" name="email"></li></li>
                        <li><label for="contactTextarea">Message</label><textarea id="contactTextarea" placeholder="Message" name="text"></textarea></li>
                        <li><button type="submit" id="sendMessage" disabled class="buttonDisable button" name="sendMessage">Send Message</button></li>
                    </ul>
                </form>

                @isset($errors)
                @foreach($errors->all() as $error)
                    <div class="messageVer2 message">
                        {{ $error }}
                    </div>
                @endforeach
                @endisset

                @if(session()->has('message'))
                    <div class="messageVer2 message">
                        {{ session('message') }}
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>

<div id="maps">
    <iframe title="Marko Milivojevic Google Maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45629.609254926276!2d20.92586445847393!3d44.37465854544939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4750cefff31a5049%3A0xe05e28b1c5d95b71!2z0KHQvNC10LTQtdGA0LXQstGB0LrQsCDQn9Cw0LvQsNC90LrQsA!5e0!3m2!1ssr!2srs!4v1701650566576!5m2!1ssr!2srs" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>



@endsection('centar')

@section('javascript')
@parent
    <script type="text/javascript" src="{{asset('js/contact.js')}}"></script>
@endsection('javascript')
