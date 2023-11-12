@extends('layouts.main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-regristation ">
                <form>
                    <h1 class="h3 mb-3 fw-normal text-center">Regristation</h1>

                    <div class="form-floating ">
                    <input type="text" name="nama" class="mt-4 form-control" id="name" placeholder="Name">
                    <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                    <input type="email" name="email" class="form-control " id="email" placeholder="Email@mail.com">
                    <label for="email">Email</label>
                    </div>
                    <div class="form-floating">
                    <input type="text" name="username" class="form-control " id="username" placeholder="Username">
                    <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                    <input type="password" name="password" class="form-control mb-4" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Regrister</button>
                </form>
                <small class="text-center d-block mt-3">Alredy regrister? <a href="/login">Login here!</a></small>
            </main>
        </div>
    </div>


@endsection
