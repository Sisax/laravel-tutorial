@extends ('layout')

@section ('content')

    <h1>it the welcome page</h1>

    <ul>
        @foreach ($articles as $article)
        <li>
            <a href="http://localhost:8000/articles/{{ $article->id }}"><h1>{{ $article->title }}</h1></a>
            <p>{{ $article->body }}</p>
        </li>
        @endforeach
    </ul>


@endsection