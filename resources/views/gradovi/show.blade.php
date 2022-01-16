@extends('layouts.app')
@section('content')
<!-- dodali smo dugme da nnas vrati na prethodnu stranicu -->
<a href="/agencija/public/gradovi" class="btn btn-default"> Vrati se nazad</a>
<h1> {{$grad->naziv}}</h1>
    <div>
        {{$grad->drzava}}
        {{$grad->naseljenost}}
        {{$grad->opis}}
        {{$grad->valuta}}
    </div>
    <hr>
    <!-- Small znaci da ispisujemo txt malim slovima-->
    <small> Grad je kreiran dana: {{$grad->created_at}}</small>
    <hr>
    <a href="/agencija/public/gradovi/{{$grad->id}}/edit" class="btn btn-defualt">Izmeni</a>
    {!!Form::open(['action'=>['App\Http\Controllers\GradoviController@destroy',$grad->id,
    'method'=>'POST','class'=>'pull-right']])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Izbrisi',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection
