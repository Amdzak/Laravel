@extends('dashboard.master')

@section('content')
    <h1 class="h2">Welcome Back {{ auth()->user()->username }}</h1>
@endsection
