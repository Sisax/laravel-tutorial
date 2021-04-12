@extends ('layout')

@section ('content')
    @error('title')
    <p>{{ $errors->first('title') }}</p>
    @enderror
    @error('body')
    <p>{{ $errors->first('body') }}</p>
    @enderror
    <form action="/articles" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
        <input type="text" name="body" placeholder="body" value="{{ old('body') }}">
        <button type="submit">SUBMIT</button>
    </form>
@endsection