{{-- @dd($posts) --}}
@extends('layouts.main')

@section('content')
    <h2>{{ $title }}</h2>
    @foreach ($posts as $berita)
        <article class="mb-4 pb-3">
            <a class="text-decoration-none" href="/posts/{{ $berita->slug }}"><h2>{{ $berita->judul }}</h2></a>
            <h6> By : <a class="text-decoration-none" href="/authors/{{ $berita->author->username }}">{{ $berita->author->name }}</a> | category : <a class="text-decoration-none" href="/categories/{{ $berita->category->slug }}">{{ $berita->category->name }}</a></h6>
            <p>{{ $berita->excerpt }}</p>
            <a class="text-decoration-none" href="/posts/{{ $berita->slug }}">Read More...</a>
        </article>
    @endforeach
@endsection