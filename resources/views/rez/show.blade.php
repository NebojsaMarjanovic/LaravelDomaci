@extends('layouts.app')
@section('content')
<!-- dodali smo dugme da nnas vrati na prethodnu stranicu -->
<a href="/agencija/public/rezervacije" class="btn btn-default"> Vrati se nazad</a>
<h1> Podaci nosioca rezervacije: {{$rez->ime}} {{$rez->prezime}}</h1>
    <div>
       Destinacija: {{$rez->destinacija}}
    </div>
    <div>
       Datum polaska: {{$rez->polazak}}
    </div>
    <div>
      Datum povratka: {{$rez->povatak}}
    </div>
    <div>
       Broj prijavljenih putnika: {{$rez->brPutnika}}
    </div>
    <div>
        Napomena: {{$rez->napomena}}
     </div>

    <a href="/agencija/public/rezervacije/{{$rez->id}}/edit" class="btn btn-defualt">Izmeni</a>
    {!!Form::open(['action'=>['App\Http\Controllers\RezervacijaController@destroy',$rez->id,
    'method'=>'POST','class'=>'pull-right']])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Izbrisi',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection
