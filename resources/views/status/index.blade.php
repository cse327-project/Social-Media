@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('components.status.status-writter')

            @foreach ($statuses as $status)
                @include('components.status.status-card')
            @endforeach


        </div>
    </div>
</div>
@endsection
