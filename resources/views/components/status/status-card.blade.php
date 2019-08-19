<div class="card mb-5 mt-5 status-card">
    <div class="card-header">
        <div class="profile d-flex">
        <img class="mr-3" src="{{ Storage::url($status->user->profile_photo) }}" alt="{{ $status->user->username }}" height="40" width="40"/>
            <div class="info">
                <p>
                    <a href="{{ route('user.profile' , $status->user->username) }}">{{ $status->user->name }}</a>
                </p>
                <span>{{ $status->created_at->diffForHumans() }}</span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <p>
            {{$status->text}}
        </p>
    </div>
    <div class="card-footer d-flex justify-content-between">
        <div>
            <span>Comments({{ $status->comments->count() }})</span>
            @if (auth()->user()->id === $status->user->id)
            <span>
                <a href="{{ route('status.edit' , $status) }}">Edit</a>
            </span>
            @endif
        </div>
        <a href="{{ route('status.show' , $status->id) }}">Read</a>
    </div>
</div>
