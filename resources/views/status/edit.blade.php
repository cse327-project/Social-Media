@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">

            @error('text')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('status.update' , $status) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                        <textarea name="text" cols="30" rows="4" class="form-control" placeholder="Write a comment">{{$status->text}}</textarea>
                        </div>
                        <div class="form-group text-right mb-0">
                            <button class="btn btn-primary btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop