<div class="jumbotron d-flex">
    <div class="profile-photo pr-3">
        <img src="{{ Storage::url($user->profile_photo) }}" alt="" height="180" width="180">
    </div>
    <div class="profile-info">        
        <h2>{{ $user->name }}</h2>
        <p>
            {{ $user->bio }}
        </p>
        <p>Gender: <span class="text-capitalize">{{ $user->gender }}</span></p>
        <p>Date of birth: {{ $user->date_of_birth }}</p>
        @auth
            {{-- Friend Request --}}
            @if (auth()->user()->id !== $user->id)
                @if($user->friends->where('user_id' , auth()->user()->id )->count())
                    <form action="{{ route('unfriend' , [ 'friend_of' => $user->id , 'user_id' =>  auth()->user()->id ] ) }}" method="POST">
                        @csrf
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-times"></i> Unfriend
                        </button>
                    </form>
                @else
                    <form action="{{ route('send-request' , $user->id) }}" method="POST">
                        @csrf
                        @if ($has_request)   
                        <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Cancel Request</button>
                        @else
                        <button class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i> Add Friend</button>
                        @endif
                    </form>
                @endif                
            @endif 

            {{-- Follow --}}
            @if (auth()->user()->id !== $user->id)
            <form class="mt-2" action="{{ route('toggle_follow' , $user->id ) }}" method="POST">
                @csrf
                @if($user->followers->where('user_id' , auth()->user()->id )->count())
                <button class="btn btn-primary btn-sm">Follow</button>
                @else
                <button class="btn btn-danger btn-sm">Unfollow</button>
                @endif
            </form>
            @endif 
        @endauth
    </div>
</div>