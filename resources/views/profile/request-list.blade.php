@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">

                <div class="py-2">
                    <h4>Hey!! you have {{ $reuqest_count }} friend request</h4>
                </div>

                <div class="card">
                    <ul class="list-group list-group-flush">
                        @foreach ($friends as $friend)
                        <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    @if ($friend->user->profile_photo)
                                        <img 
                                        width="30" 
                                        height="30" 
                                        src="{{ Storage::url($friend->user->profile_photo) }}" 
                                        alt="{{ $friend->user->username }}">
                                    @else
                                        <i class="fa fa-user pr-2"></i>
                                    @endif
                                    <a href="{{ route('user.profile' , $friend->user->username) }}">
                                        {{ $friend->user->name }}
                                    </a> 
                                </div>
                                <div class="btn-group">

                                    <form action="{{ route('accept_request' , $friend->user->id) }}" method="POST" id="accept_request">@csrf</form>
                                    <form action="{{ route('decline_request', $friend->user->id) }}" method="POST" id="decline_request">@csrf</form>

                                    <button class="btn btn-danger btn-sm" onclick="document.getElementById('decline_request').submit()"><i class="fa fa-times pr-2"></i>Decline</button>
                                    <button class="btn btn-primary btn-sm" onclick="document.getElementById('accept_request').submit()"><i class="fa fa-check pr-2"></i>Accept</button>
                                </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@stop