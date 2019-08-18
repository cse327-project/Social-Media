<div class="card">
    <div class="card-header">Whats on your mind?</div>
    <div class="card-body">
        <form action="{{ route('status.store') }}" method="post">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="text" cols="30" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Post</button>
            </div>
        </form>
    </div>
</div>