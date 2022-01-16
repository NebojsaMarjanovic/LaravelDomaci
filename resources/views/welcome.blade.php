<!DOCTYPE html>
{{-- @extends('layouts.app') --}}
{{-- @extends('pages.index') --}}

@section('content')
 <!-- OVO JE HTML SA DINAMICKIM KARAKTERIS-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','Travellino')}}</title>
    </head>
    <body>
        @include('inc.navbar')
       <h1> Dobrodosli u Travellino agenciju za putovanja </h1>

    </body>
</html>
