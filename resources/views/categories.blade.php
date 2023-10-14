@extends('layouts.main')

@section('content')
    <h2>Post Kategori</h2>
    @foreach ($categories as $k)
        <ul>
            <li>
                <a href="/categories/{{ $k->slug }}">{{ $k->name }}</a>
            </li>
        </ul>
    @endforeach
@endsection