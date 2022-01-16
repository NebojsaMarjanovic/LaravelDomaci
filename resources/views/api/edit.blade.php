@extends('layouts.app')
@section('content')
    <h1> Izmeni rezervaciju </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\RezApiController@update',$rez->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
   <div class="form-group">
    {{Form::label('ime','Ime')}}
    <!--  oclass opet bootstrap-->
     {{Form::text('ime',$rez->ime,['class'=>'form-control','placeholder'=>'ime'])}}
</div>
<div class="form-group">
     {{Form::label('prezime','Prezime')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('prezime',$rez->prezime, ['class'=>'form-control','placeholder'=>'prezime'])}}
</div>
<div class="form-group">
    {{Form::label('email','Email')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('email',$rez->email, ['class'=>'form-control','placeholder'=>'email'])}}
</div>
<div class="form-group">
    {{Form::label('destinacija','Destinacija')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('destinacija',$rez->destinacija, ['class'=>'form-control','placeholder'=>'destinacija'])}}
<div class="form-group">
    {{Form::label('polazak','Polazak')}}
    <!--  oclass opet bootstrap-->
    {{ Form::date('polazak', $rez->polazak, ['class'=>'form-control','placeholder'=>'polazak'])}}

</div>
<div class="form-group">
    {{Form::label('povatak','Povratak')}}
    <!--  oclass opet bootstrap-->
    {{ Form::date('povatak', $rez->povatak, ['class'=>'form-control','placeholder'=>'povatak'])}}
</div>
<div class="form-group">
    {{Form::label('napomena','Napomena')}}
    <!--  oclass opet bootstrap-->
    {{Form::textarea('napomena',$rez->napomena, ['class'=>'form-control','placeholder'=>'napomena'])}}
</div>
<div class="form-group">
    {{Form::label('brPutnika','Broj Putnika')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('brPutnika',$rez->brPutnika, ['class'=>'form-control','placeholder'=>'brPutnika'])}}
</div>
<div class="form-group">
    {{Form::label('grad_id','Grad')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('grad_id',$rez->grad_id, ['class'=>'form-control','placeholder'=>'grad_id'])}}
</div>
<div class="form-group">
    {{Form::label('user_id','User')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('user_id',$rez->user_id, ['class'=>'form-control','placeholder'=>'user_id'])}}
</div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
