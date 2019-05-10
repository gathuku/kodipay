@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary"> <strong> Dashboard</strong></div>

                <div class="card-body">
                @include('flash::message')

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
