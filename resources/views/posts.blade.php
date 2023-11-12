@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <img src="https://media.istockphoto.com/id/1459313027/photo/choose-the-correct-answer-on-the-exam-questionnaire-with-checkboxes-filling-survey-form-online.webp?b=1&s=170667a&w=0&k=20&c=eaPa1j0WF4FXPCVCf-Fhw8zWucHDOlDu3nmVDdDh144=" class="card-img-top mb-2" height="360px" >
                <h2> {{ $berita->judul }}</h2>
                <h6> By : <a class="text-decoration-none" href="/blog?authors={{ $berita->author->username }}">{{ $berita->author->name }}</a> | category : <a href="/blog?categories={{ $berita->category->slug }} " class="text-decoration-none">{{ $berita->category->name }}</a></h6>
                {{-- menandakan bahwak kita mengizinkan adanya htmlspecialchars untuk memudahkan penulisan paragraff --}}
                 {!! $berita->content !!}
                <a class="text-decoration-none d-block mt-4" href="/blog">Back to Blog</a>
            </div>
        </div>
    </div>

@endsection
