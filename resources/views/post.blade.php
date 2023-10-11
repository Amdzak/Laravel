@extends('layouts.main')

@section('content')
    @foreach ($posts as $berita)
        <article class="mb-4">
            <a href="/posts/{{ $berita->slug }}"><h2>{{ $berita->judul }}</h2></a>
            <h5>By: {{ $berita->author }}</h5>
            <p>{{ $berita->excerpt }}</p>
        </article>
    @endforeach
@endsection