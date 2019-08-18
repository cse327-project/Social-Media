<div class="card mb-5 mt-5 status-card">
    <div class="card-header">
        <div class="profile d-flex">
            {{-- <img class="mr-3" src="https://scontent.fdac13-1.fna.fbcdn.net/v/t1.0-1/p50x50/67926169_2645271378817301_7772261544276000768_n.jpg?_nc_cat=104&_nc_oc=AQmgusNkKgOALKiHa_OJu-8R5j6DWieKhj9BZn8lJ1TOr1HCEllxKJp1HQTFV8H-VCU&_nc_ht=scontent.fdac13-1.fna&oh=b20e263edb5cb5fa68c179b61b6c446d&oe=5DD43A13" alt="profile-pic" /> --}}
            <div class="info">
                <p>{{ $status->user->name }}</p>
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
            <span>
                <a href="{{ route('status.edit' , $status) }}">Edit</a>
            </span>
        </div>
        <a href="{{ route('status.show' , $status->id) }}">Read</a>
    </div>
</div>
