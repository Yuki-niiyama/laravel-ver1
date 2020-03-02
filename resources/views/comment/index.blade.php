@foreach ( $comments as $comment)
    <p>{{ $comment->id}}</p>
    <p>{{ $comment->body}}</p>
    <p>{{ $comment->created_at}}</p>
@endforeach