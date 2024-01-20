@extends('layouts.template')

@section('title')
{{$service->name}}
@endsection('title')

@section('ogImage')
{{asset('images/'.$service->path)}}
@endsection('ogImage')

@section('page')
Project.
@endsection('page')


@section('centar')

@include('front.partials.secondHeader')

<div class="wrapper">
    <div id="oneProjectContainer">
        <div class="projectImage">
            <img src="{{asset('images/'.$service->path)}}" alt="{{$service->alt}}"/>
        </div>

        <div class="projectInfo">
            <ul>
                <li><h1>{{$service->name}}</h1></li>
                {{-- <li><div class="line"></div></li> --}}
                <li class="level">
                    <p>Level:</p>
                    @for($i=0;$i<$service->idLevel;$i++)
                    <span class="dot"></span>
                    @endfor
                    @for($i=0;$i<(5-$service->idLevel);$i++)
                    <span class="dot s"></span>
                    @endfor
                </li>
                <li class="languages">
                    <p><span id="tech">Programming tehnologies:</span> {{$service->text}}</p>
                </li>
                {{-- <li><p>{{$service->text}}</p></li> --}}
            </ul>
            <ul>
                <li><a class="button" target="_blank" rel="noopener" href="{{$service->link}}">Open site</a></li>
                {{-- <li id="price" >{{$service->price}}</li> --}}
            </ul>
        </div>
    </div>
</div>

@endsection('centar')
