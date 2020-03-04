@foreach ( $tasks as $task)
    <p>{{ $task->id}}</p>
    <p>{{ $task->tel}}</p>
    <p>{{ $task->created_at}}</p>
    <a href="{{ route('tasks.edit', ['id' => $task->id ])}}">編集</a>
    <form action="{{ route('tasks.delete', ['id' => $task->id ])}}" method="POST">
        @method('delete')
        @csrf
        <button type="submit">削除</button>
    </form>
@endforeach

<br>
<a href="{{url('tasks/create')}}">新規追加</a>

