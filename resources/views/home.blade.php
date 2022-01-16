@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Travellino agencija') }}</div>
<p> </p>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<a href="rezervacije" class="btn btn-primary">Idite na sve rezervacije</a>
                   <p> {{ __('You are logged in!') }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
