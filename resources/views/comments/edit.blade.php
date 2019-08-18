@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">

            <h5 class="mb-3">Update Comment</h5>


            <form action="{{ route('comments.update' , $comment) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <textarea class="form-control" name="text" cols="30" rows="3">{{ $comment->text }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Update Comment</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop