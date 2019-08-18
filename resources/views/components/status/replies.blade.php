<div class="replies">
    @foreach ($comment->replies as $reply)
    <p class="text-muted reply">
        {{$reply->text}} 
        <small>
            <a 
                href="{{ route('user.profile' ,$reply->user->username ) }}"
            >
                {{$reply->user->username}}
        </a> , {{ $reply->created_at->diffForHumans() }}</small> </p>
    @endforeach
    
    

    <form action="{{ route('replies.store') }}" method="POST">
        @csrf
        <input type="hidden" name="comment_id" value="{{ $comment->id }}">
        <input type="text" name="text" class="reply-input" placeholder="Reply to this comment">
    </form>
</div>