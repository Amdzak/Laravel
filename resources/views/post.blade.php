{{-- @dd($posts) --}}
@extends('layouts.main')

@section('content')
    <h2>{{ $title }}</h2>

    {{-- jika postingan lebih dari 0 maka true --}}
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://media.istockphoto.com/id/1459313027/photo/choose-the-correct-answer-on-the-exam-questionnaire-with-checkboxes-filling-survey-form-online.webp?b=1&s=170667a&w=0&k=20&c=eaPa1j0WF4FXPCVCf-Fhw8zWucHDOlDu3nmVDdDh144=" class="card-img-top" height="360px" alt="...">

            <div class="card-body text-center">
                <h3 class="card-title">{{ $posts[0]->judul }}</h3>

                <small class="text-muted card-text">
                    Last updated {{ $posts[0]->created_at->diffForHumans() }}
                    <h6> By : <a class="text-decoration-none" href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> | category : <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> </h6>
                </small>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read More</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">Postingan Tidak Ada</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $berita)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="position-absolute bg-dark p-2"><a class="text-decoration-none text-white" href="/categories/{{ $berita->category->slug }}">{{ $berita->category->name }}</a></div>
                        <img src="https://media.istockphoto.com/id/1459313027/photo/choose-the-correct-answer-on-the-exam-questionnaire-with-checkboxes-filling-survey-form-online.webp?b=1&s=170667a&w=0&k=20&c=eaPa1j0WF4FXPCVCf-Fhw8zWucHDOlDu3nmVDdDh144=" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $berita->judul }}</h5>
                            <small class="text-muted card-text">
                                Last updated {{ $berita->created_at->diffForHumans() }}
                                <h6> By : <a class="text-decoration-none" href="/authors/{{ $berita->author->username }}">{{ $berita->author->name }}</a></h6>
                            </small>
                            <p class="card-text">{{ $berita->excerpt }}</p>
                            <a href="/posts/{{ $berita->slug }}" class="btn btn-primary">Read more..</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
