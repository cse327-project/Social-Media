<div class="card">
    <div class="card-body">
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="text" cols="30" rows="4" class="form-control" placeholder="Write a comment"></textarea>
                <input type="hidden" name="status_id" value="{{ $status->id }}">
            </div>
            <div class="form-group text-right mb-0">
                <button class="btn btn-primary btn-sm">Add Comment</button>
            </div>
        </form>
    </div>
</div>