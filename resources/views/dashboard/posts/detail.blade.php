@extends('dashboard.master')

@section('content')


    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8 ">
                <h2 class="mb-3"> {{ $berita->judul }}</h2>

                <a href="/dashboard/posts" class="btn btn-info mb-3">Back to posts</a>
                <a href="/dashboard/posts" class="btn btn-warning mb-3"><span data-feather="edit-2"></span> Edit</a>
                <a href="/dashboard/posts" class="btn btn-danger mb-3"><span data-feather="trash-2"></span> Delete</a>

                <img src="https://media.istockphoto.com/id/1459313027/photo/choose-the-correct-answer-on-the-exam-questionnaire-with-checkboxes-filling-survey-form-online.webp?b=1&s=170667a&w=0&k=20&c=eaPa1j0WF4FXPCVCf-Fhw8zWucHDOlDu3nmVDdDh144=" class="card-img-top mb-2" height="360px" >


                {{-- menandakan bahwak kita mengizinkan adanya htmlspecialchars untuk memudahkan penulisan paragraff --}}
                 {!! $berita->content !!}
                <a class="text-decoration-none d-block mt-4" href="/blog">Back to Blog</a>
            </div>
        </div>
    </div>


@endsection
