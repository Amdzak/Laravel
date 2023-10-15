@extends('layouts.main')

@section('content')
    <h2> {{ $berita->judul }}</h2>
    <h6> By : <a class="text-decoration-none" href="/authors/{{ $berita->author->username }}">{{ $berita->author->name }}</a> | category : <a href="/categories/{{ $berita->category->slug }} " class="text-decoration-none">{{ $berita->category->name }}</a></h6>
    {{-- menandakan bahwak kita mengizinkan adanya htmlspecialchars untuk memudahkan penulisan paragraff --}}
     {!! $berita->content !!} 
    <a class="text-decoration-none d-block mt-4" href="/blog">Back to Blog</a>
@endsection