@extends('layouts.main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-5">

            @if (session()->has("success"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session("success") }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <main class="form-signin ">
                <h1 class="h3 mb-3 fw-normal text-center">Please LogIn</h1>
                <form>

                    <div class="form-floating ">
                    <input type="email" class="mt-4 form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                    <input type="password" class="form-control mb-4" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="text-center d-block mt-3">Not regrister? <a href="/regristasi">Regrister Now!</a></small>
            </main>
        </div>
    </div>


@endsection
