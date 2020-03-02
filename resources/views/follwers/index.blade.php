@foreach ( $followers as $follower)
    <p>{{ $follower->id}}</p>
    <p>{{ $follower->user_id}}</p>
    <p>{{ $follower->follower_id}}</p>
    <p>{{ $follower->created_at}}</p>
@endforeach