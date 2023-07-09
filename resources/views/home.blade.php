@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-info" role="alert">
                            Has iniciado session.<a href="#" class="alert-link">Vamos a la agenda</a>
                        </div>
                    @endif
                        <div class="alert alert-info" role="alert">
                            Has iniciado session.<a href="/agenda/public/evento" class="alert-link">Vamos a la agenda</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
