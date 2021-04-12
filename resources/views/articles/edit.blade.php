@extends ('layout')

@section ('content')
    <form action="{{ $article->updatePath() }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" placeholder="title" value="{{ $article -> title }}">
        <input type="text" name="body" placeholder="body" value="{{ $article -> body }}">
        <button type="submit">SUBMIT</button>
    </form>
@endsection