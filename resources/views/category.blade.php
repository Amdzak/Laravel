@extends('layouts.main')

@section('content')
<h2>Post Category : {{ $title }}</h2>
    @foreach ($post as $berita)
        <article class="mb-4">
            <a href="/posts/{{ $berita->slug }}"><h2>{{ $berita->judul }}</h2></a>
            <p>{{ $berita->excerpt }}</p>
        </article>
    @endforeach
@endsection