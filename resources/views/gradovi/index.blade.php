@extends('layouts.app')
@section('content')
    <h1> Gradovi </h1>
     @if(count($gradovi)>0)
    @foreach ($gradovi as $grad)
        <div class="well">
            <h3> <a href = "/agencija/public/gradovi/{{$grad->id}}">{{$grad->naziv}}</a> </h3>
            <p> {{$grad->drzava}}</p>
            <p> {{$grad->naseljenost}}</p>
            <p> {{$grad->opis}}</p>
            <small> Valuta: {{$grad->valuta}}</small>

</div>
    @endforeach

    @endif
@endsection
