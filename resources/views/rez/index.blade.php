@extends('layouts.app')
@section('content')
    <h1> Rezervacije </h1>
     @if(count($rez)>0)
    @foreach ($rez as $r)
        <div class="well">
            <h3> <a href = "/agencija/public/rezervacije/{{$r->id}}">Prikazi {{$r->destinacija}}</a> </h3>
            <p> Ime i prezime nosioca rezervacije: {{$r->ime}} {{$r->prezime}}</p>
            <p> Email: {{$r->email}}</p>
            <p> Broj prijavljenih putnika: {{$r->brPutnika}}</p>
            <small> Napomena: {{$r->napomena}}</small>
</div>
    @endforeach

    @endif

@endsection
