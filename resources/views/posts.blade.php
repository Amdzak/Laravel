@extends('layouts.main')

@section('content')
    <h2> {{ $berita["judul"] }}</h2>
    <h5> author: {{ $berita["author"] }}</h5>
    <p> {{ $berita["content"] }}</p>

    <a href="/blog">Back to Blog</a>
@endsection