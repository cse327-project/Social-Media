<div class="card">
    <div class="card-header">Friends ( {{ $user->friends->count() }} )</div>
    <ul class="list-group list-group-flush">
        @foreach ($user->friends as $friend)
            <li class="list-group-item">
                <a href="{{ route('user.profile' , $friend->user->username ) }}">
                @if ($friend->user->profile_photo)
                    <img src="{{ Storage::url($friend->user->profile_photo) }}" alt="{{ $friend->user->name }}" width="30" height="30">
                    @else
                        <i class="fa fa-user"></i>
                @endif
                {{ $friend->user->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>