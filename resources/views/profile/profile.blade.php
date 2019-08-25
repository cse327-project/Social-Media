@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('profile.friends')
        </div>
        <div class="col-md-8">
            @include('profile.profile-info')
            <div>
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
</div>
@stop