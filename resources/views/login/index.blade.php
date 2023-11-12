@extends('layouts.main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin ">
                <form>
                    <h1 class="h3 mb-3 fw-normal text-center">Please LogIn</h1>

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
