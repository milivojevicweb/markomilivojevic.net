<div id="myNav" class="overlayBox">
    <div class="closebtn">&times;</div>
    <div class="overlay-content">
        <ul id="hiddenUl">
            <li {{ request()->is('/') ? 'class=active' : '' }} ><a target="_self" rel="follow" href="{{url('/')}}">Home</a></li>
            <li {{ request()->is('projects') ? 'class=active' : '' }}><a target="_self" rel="follow"  href="{{url('/projects')}}">Projects</a></li>
            <li {{ request()->is('ccontact') ? 'class=active' : '' }}><a target="_self" rel="follow" href="{{url('/contact')}}">Contact</a></li>
            <li {{ request()->is('about') ? 'class=active' : '' }}><a target="_self" rel="follow" href="{{url('/about')}}">About</a></li>
            @if(session()->has('user'))
            <li>
                <a target="_self" rel="follow" class="cool-link " href="{{url('/admin')}}">{{ substr(session()->get("user")->name, 0, 1); }}. {{ substr(session()->get("user")->lastName, 0, 1); }}. <i class="fa fa-user-circle"></i></a>
            </li>
            <li>
                <a target="_self" rel="follow" class="cool-link" href="{{url('/odjava')}}">Odjava</a>
            </li>
            @endif
        </ul>
    </div>
</div>

<header>
    <div class="wrapper">
        <div id="headerContainer">
            <div id="logo">
                <a target="_self" rel="follow" href="{{url('/')}}"> <img @if(request()->is('/')) src="{{asset('images/logoWhite.webp')}}" @else src="{{asset('images/logoBlack.webp')}}" @endif alt="marko milivojevic" /></a>
            </div>
            <div id="headerNav">
                <div id="hamburger" @if(!request()->is('/')) class="blackHamburger" @endif>
                    <div class="hamburger "></div>
                    <div class="hamburger "></div>
                    <div class="hamburger "></div>
                </div>

                <ul id="headerLinks" class="topnav {{ request()->is('/') ? '' : 'blackHeader'}} ">
                    <li><a target="_self" rel="follow" class="cool-link" href="{{url('/')}}">Home</a></li>
                    <li><a target="_self" rel="follow" class="cool-link" href="{{url('/projects')}}">Projects</a></li>
                    <li><a target="_self" rel="follow" class="cool-link" href="{{url('/about')}}">About</a></li>
                    <li><a target="_self" rel="follow" class="cool-link" href="{{url('/contact')}}">Contat</a></li>
                    @if(session()->has('user'))
                    <li>
                        <a target="_self" rel="follow" class="cool-link " href="{{url('/admin')}}">{{ substr(session()->get("user")->name, 0, 1); }}. {{ substr(session()->get("user")->lastName, 0, 1); }}. <i class="fa fa-user-circle"></i></a>
                    </li>
                    <li>
                        <a target="_self" rel="follow" class="cool-link" href="{{url('/odjava')}}"><i class="fa fa-sign-out"></i></a>
                    </li>
                    @endif
                </ul>



            </div>
        </div>
    </div>
</header>
