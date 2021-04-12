@extends ('layout')

@section ('content')

    <h1>{{ $article->title }}</h1>
    <p>{{ $article->body }}</p>
    <p>
        @foreach ($article->tags as $tag)
            <a href="/articles?tag={{$tag->name}}">{{ $tag->name }}</a>
        @endforeach
    </p>

@endsection