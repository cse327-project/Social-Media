@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            @include('components.status.status-card')
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            @include('components.status.commentbox')
            <div class="comments mt-5">
                @include('components.status.comments')
            </div>
        </div>
    </div>
</div>
@endsection