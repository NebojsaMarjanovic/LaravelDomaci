@extends('layouts.app')
@section('content')
    <h1> Kreiraj novi grad </h1>
    {!! Form::open(['action'=>'App\Http\Controllers\GradoviController@store','method'=>'POST']) !!}
  <!--  ovo ispod je bootstrap -->
    <div class="form-group">
    {{Form::label('naziv','Naziv')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('naziv','',['class'=>'form-control','placeholder'=>'Naziv'])}}
</div>
<div class="form-group">
    {{Form::label('drzava','Drzava')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('drzava','', ['class'=>'form-control','placeholder'=>'Drzava'])}}
</div>
<div class="form-group">
    {{Form::label('naseljenost','Naseljenost')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('naseljenost','', ['class'=>'form-control','placeholder'=>'naseljenost'])}}
</div>
<div class="form-group">
    {{Form::label('opis','Opis')}}
    <!--  oclass opet bootstrap-->
    {{Form::textarea('opis','', ['class'=>'form-control','placeholder'=>'opis'])}}
</div>
<div class="form-group">
    {{Form::label('valuta','Valuta')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('valuta','', ['class'=>'form-control','placeholder'=>'valuta'])}}
</div>
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}

{!! Form::close() !!}
@endsection
