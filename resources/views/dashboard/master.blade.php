<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AZK | Dashboard </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset("css/dashboard.css") }}" rel="stylesheet">

  </head>
  <body>

    @include('dashboard.navbar')

<div class="container-fluid">
  <div class="row">

    @include('dashboard.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        @yield("content")

    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="{{asset("js/feather.js")}}" ></script>

      <script src="{{ asset("js/dashboard.js") }}"></script>
  </body>
</html>
