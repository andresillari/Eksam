<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/MaketeCSS.css') }}" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/app.js') }}" defer></script>


    </head>
    
        <header class="header">
            <a class="logo" >MaketeOÜ</a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
<ul class="menu">


    <li>
		<a href="Home.html" class="effect-underline">
            Home
        </a>
	</li>
				
    <li>
		<a class="effect-underline">
            Portfolio
        </a>
	</li>
				
    <li>
		<a class="effect-underline">
            Contact
        </a>
    </li>

    <li>
		<a class="effect-underline">
            Shop
        </a>
	</li>
   
    <li>   
    @if (Route::has('login'))                 
    @auth                      
        <a>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>                                     
    </li> 
   
    <li>   

        <a href="{{ route('logout') }}" class="effect-underline"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">   
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </li>

@else
    <li>  
        <a href="{{ route('login') }}" class="effect-underline">
            Login
        </a>   
    </li>                       
@if (Route::has('register'))  

    <li>  
        <a  href="{{ route('register') }}" class="effect-underline">
            Register
        </a>  
    </li>  

@endif                     
@endauth                           
@endif

</ul>
</header>


<body>
    <div class="Kodu">
        @extends('Home')
    </div>

            <!-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div> -->

    </body>
</html>
