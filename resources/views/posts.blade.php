@extends('layouts.main')

@section('content')
    <h2> {{ $berita->judul }}</h2>
    <h5> author: {{ $berita->author }}</h5>
    {{-- menandakan bahwak kita mengizinkan adanya htmlspecialchars untuk memudahkan penulisan paragraff --}}
     {!! $berita->content !!} 

    <a href="/blog">Back to Blog</a>
@endsection