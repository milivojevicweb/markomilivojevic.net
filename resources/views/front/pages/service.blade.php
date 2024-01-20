@extends('layouts.template')

@section('title')
Projects
@endsection('title')


@section('page')
Projects.
@endsection('page')

@section('ogImage')
{{asset('images/ogImg.webp')}}
@endsection('ogImage')

@section('centar')

@include('front.partials.secondHeader')


    <div class="wrapper">
        <div id="mainProject">
            @foreach ($service as $item)
            @component("front.partials.service",["item"=>$item])

            @endcomponent
        @endforeach
        </div>
    </div>



    <div id="pagination">
        <ul class="pagination">
            {{-- @for($i=1;$i<=ceil($service->total()/6);$i++)
            <li><a target="_self" rel="follow" @if($i==1) class="activePagination pag "@else class="pag" @endif href="page={{$i}}">{{$i}}</a></li>
            @endfor --}}
            @if($service->total()>6)<li><a target="_self" rel="follow" href="page=2" data-pag="2" class="pag "><p class="link">Load more projects +</p></a></li>@endif
        </ul>
    </div>
    <input type="hidden" name="page" id="hidden_page" value="1" />
    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="idProducts" />


@endsection('centar')

@section('javascript')
@parent
    <script type="text/javascript" src="{{asset('js/service.js')}}"></script>
@endsection('javascript')
