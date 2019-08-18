@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 jumbotron">
            <h2>{{ $user->name }}</h2>
            <p>
                {{ $user->bio }}
            </p>
            <p>Gender: <span class="text-capitalize">{{ $user->gender }}</span></p>
            <p>Date of birth: {{ $user->date_of_birth }}</p>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            @auth
                @if (auth()->user()->id === $user->id)
                    @include('components.status.status-writter')
                @endif
            @endauth


            @foreach ($user->statuses as $status)
                @include('components.status.status-card')
            @endforeach
        </div>
    </div>
</div>

@stop