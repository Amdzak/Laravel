@extends('layouts.main')

@section('content')
    <h2>Post Kategori</h2>

    <div class="container">
        <div class="row">
            @foreach ($categories as $k)
                <div class="col-md-4">
                    <a class="text-decoration-none text-white " href="/blog?categories={{ $k->slug }}">
                        <div class="card text-bg-dark">
                            <img src="https://media.istockphoto.com/id/1459313027/photo/choose-the-correct-answer-on-the-exam-questionnaire-with-checkboxes-filling-survey-form-online.webp?b=1&s=170667a&w=0&k=20&c=eaPa1j0WF4FXPCVCf-Fhw8zWucHDOlDu3nmVDdDh144=" class="card-img">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0, 0, 0, 0.5)">{{ $k->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
