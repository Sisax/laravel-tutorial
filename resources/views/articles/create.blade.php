@extends ('layout')

@section ('content')
    @error('title')
    <p>{{ $errors->first('title') }}</p>
    @enderror
    @error('body')
    <p>{{ $errors->first('body') }}</p>
    @enderror
    @error('tags')
    <p>{{ $errors->first('tags') }}</p>
    @enderror
    <form action="/articles" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
        <input type="text" name="body" placeholder="body" value="{{ old('body') }}">
        <select name="tags[]" multiple>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
        <button type="submit">SUBMIT</button>
    </form>
@endsection