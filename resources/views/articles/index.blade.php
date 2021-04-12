@extends ('layout')

@section ('content')

    @foreach ($articles as $article)
        <a href="http://localhost:8000/articles/{{ $article->id }}">{{ $article->title }}</a>
        <p>Here is some sample text for a thumbnail image</p>
        <p>{{ $article->body }}</p>
    @endforeach
        
@endsection