@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" name="image" id="">
                </div>
                <div class="form-group">
                    <button>Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection