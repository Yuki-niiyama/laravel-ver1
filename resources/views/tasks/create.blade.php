<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('tasks/store')}}" method="post">
     @csrf
    <input type="tel" name="tel" value="{{ old('tel') }}">
        {{-- バリデーション --}}
        {{-- {{  $errors->first('tel') }} --}}
        @error('tel')
            {{ $message }}
        @enderror
        <button type="submit">追加</button>
    </form>

</body>
</html>
