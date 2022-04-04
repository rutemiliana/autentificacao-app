@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <h1>mensagems</h1>
                        </div>
                    @endif
                    {{ __('You are logged in!') }}

                    @if($user->type_user == 2)
                        <h1>Você é admin</h1>
                    @endif

                    {{ $user -> name }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
