@foreach ($comments as $comment)
    <div class="card">
        <div class="card-body">
            <div class="user">
                <a href="#">{{$comment->user->name}} </a>  <small class="text-muted text-sm">{{ $comment->created_at->diffForHumans() }}</small>
            </div>
            <div class="text">
                
                <div class="comment-text">
                    {{ $comment->text }}
                </div>



                <div>
                    
                    <form action="{{ route('comments.destroy' , $comment->id ) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-link text-danger pl-0">Delete</button>
                    </form>


                    <a class="editButton btn btn-sm btn-link text-primary pl-0" href="{{ route('comments.edit' , $comment->id) }}">
                        Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
@endforeach
