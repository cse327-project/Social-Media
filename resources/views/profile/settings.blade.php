@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Update profile
                </div>
                <div class="card-body">
                    <form action="{{ route('user.settingsUpdate') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid  @enderror" placeholder="Your Name" value="{{ $user->name }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Name" value="{{ $user->email }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Your Username</label>
                            <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Your Name" value="{{ $user->username }}">
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="bio">Your Bio</label>
                            <textarea name="bio" id="bio" placeholder="Your Bio" cols="30" rows="3" class="form-control @error('bio') is-invalid @enderror">{{ $user->bio }}</textarea>
                            @error('bio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- <div class="form-group">
                            <label for="gender">Your Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="male" @if($user->gender == 'male')selected="selected"@endif>Male</option>
                                <option value="female" @if($user->gender == 'female')selected="selected"@endif>Female</option>
                                <option value="other" @if($user->gender == 'other')selected="selected"@endif>Other</option>
                            </select>
                        </div> --}}
                        
                        <div class="form-group">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Update Password
                </div>
                <div class="card-body">
                    <form action="{{ route('user.settingsUpdate') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="text" id="password" name="name" class="form-control @error('password') is-invalid  @enderror" placeholder="New Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm New Password</label>
                            <input type="text" id="password_confirmation" name="password_confirmation" class="form-control"
                            placeholder="Confirm New Password" >
                        </div>
                        
                        <div class="form-group">
                            <button name="password_update" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop