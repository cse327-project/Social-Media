@foreach ($comments as $comment)
    <div class="card">
        <div class="card-body">
            <div class="user">
                <a href="#">{{$comment->user->name}}</a>
            </div>
            <div class="text">
                {{ $comment->text }}
            </div>
        </div>
    </div>
@endforeach

