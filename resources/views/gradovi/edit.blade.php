@extends('layouts.app')
@section('content')
    <h1> Izmeni grad </h1>
    {!! Form::open(['action'=>['App\Http\Controllers\GradoviController@update',$grad->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
    <div class="form-group">
        {{Form::label('naziv','Naziv')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('naziv',$grad->naziv,['class'=>'form-control','placeholder'=>'Naziv'])}}
    </div>
    <div class="form-group">
        {{Form::label('drzava','Drzava')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('drzava',$grad->drzava, ['class'=>'form-control','placeholder'=>'Drzava'])}}
    </div>
    <div class="form-group">
        {{Form::label('naseljenost','Naseljenost')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('naseljenost',$grad->naseljenost, ['class'=>'form-control','placeholder'=>'naseljenost'])}}
    </div>
    <div class="form-group">
        {{Form::label('opis','Opis')}}
        <!--  oclass opet bootstrap-->
        {{Form::textarea('opis',$grad->opis, ['class'=>'form-control','placeholder'=>'opis'])}}
    </div>
    <div class="form-group">
        {{Form::label('valuta','Valuta')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('valuta',$grad->valuta, ['class'=>'form-control','placeholder'=>'valuta'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
