@extends('layouts.main')

@section('content')
    <h1>Halaman About</h1>
    {{-- tanda {{  }}  akan membawa parameter varialeb yang ada pada file route dan menanggil dengan pemanggilan key nya--}}
    <h3>Nama : {{ $nama }}</h3>
    <p>Email : {{ $email }}</p>
    <p>{{ $addr }}</p>
    <img src="./img/{{ $gbr }}" width="150">
@endsection
