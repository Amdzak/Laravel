@extends('layouts.main')

@section('content')
    <h2> {{ $berita->judul }}</h2>
    <h6> By : {{ $berita->author }} | category : <a href="/categories/{{ $berita->category->slug }}">{{ $berita->category->name }}</a></h6>
    {{-- menandakan bahwak kita mengizinkan adanya htmlspecialchars untuk memudahkan penulisan paragraff --}}
     {!! $berita->content !!} 

    <a href="/blog">Back to Blog</a>
@endsection