
@extends('layouts.app')
@section('content')
<html>
<head>
	<meta http-equiv="Content-Language" content="sr" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>O nama</title>
	<link rel="shortcut icon" href="../imgages/about.png">
</head>
 <body style="background-color:#43758a;">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" >Agencija za putovanja</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li ><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"> </span> Početna</a></li>
					<li class="active"><a href="#">O nama</a></li>
                   <li><a href="{{url('/gradovi')}}"><span class="glyphicon glyphicon-city"> </span> Gradovi</a></li>
					<li><a href="{{url('/rezervacije')}}"> Rezervacije</a></li>

				</ul>
                <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ms-auto">
                <ul class="nav navbar-nav">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
		</div>
			</div>
	</nav>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
        <h3>Travellino!</h3>
        {{-- <h3 align="left"  style="color:white" > {{$title}}</h3> --}}
        <img src="{{asset('/images/avion.jpg')}}" alt="Slika se ne moze prikazati" height="200"/>
		<div class="row"  align="center">

			<div class="col-md-6">
				<div id="dream-land" style="color:white" >Turistička agencija Travellino Land bavi se prodajom turističkih aranžmana u zemlji i inostranstvu od 2021. godine. Uz odličnu saradnju koju imamo sa renomiranim imenima iz sveta turizma gradimo reputaciju efikasne i pouzdane agencije i tour operator-a, sa željom da našim korisnicima pružimo najbolju uslugu. Svoju poslovnu filozofiju baziramo na kreiranju ponuda prema potrebama i zahtevima putnika. Cilj našeg rada i ono čemu težimo jeste da vama pružimo najbolju i najpovoljniju uslugu smeštaja širom naše zemlje i sveta. Vaše zadovoljstvo uslugom koju vam pružamo i želja da ponovo budete naši putnici, naša su najbolja preporuka koja čini da se osećamo uspešnima u svom poslu. Veliki broj zadovoljnih putnika sa kojima smo do sad sarađivali tvrde sa smo veoma pouzdani, efikasni i da smo svojom profesionalnom uslugom opravdali njihovo poverenje. Vaše putovanje iz snova počinje sa nama Kuća dobrih putovanja - Travellino Land. Licenca br OTP 15/2021. Travellino Land je članica YUTA-e.
				</div>
			</div>

		</div>
	</div>
	<br>
	<br>
<div class="container">
	<div class="row">
	</div>
</div>
<br>
<footer footer-fixed-down>
	<div class="container" >
		<div class="row">
			<div class="col-md-8" id="podaci">
				<ul>
					<li><span class="glyphicon glyphicon-pushpin" ></span> Ljutice Bogdana 154</li>
					<li><span class="glyphicon glyphicon-earphone"></span> 011/100 1000</li>
					<li><span class="glyphicon glyphicon-phone"></span> 061/11 34 561</li>
					<li><span class="glyphicon glyphicon-envelope"></span> travellino@gmail.com</li>

				</ul>
			</div>
		</div>
	</div>
    <div >
        <p align="center">Copyright &copy; Laravel application</p>
    </div>
</footer>

</body>
</html>
@endsection

