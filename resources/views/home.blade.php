@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                @if (Route::has('plans'))
                        <div class="top-right links">
                            <a href="{{ url('/plans') }}">Subscription</a>
                        </div>
                @endif
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

               
            </div>
        </div>
    </div>
</div>
@endsection
