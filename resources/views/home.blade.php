@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">Dashboard</h1>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!




                    <h1>
                        
                        {{auth::user()->name}}


                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
