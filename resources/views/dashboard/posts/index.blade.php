@extends('dashboard.master')

@section('content')
<div class="container my-3">
    <h1>Dashboard Posts</h1>
    <div class="table-responsive mt-3 col-lg-11 ">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->judul }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}"><div class="badge bg-info"><span data-feather="eye"></span>
                        </div></a>
                        <a href=""><div class="badge bg-warning"><span data-feather="edit-2"></span>
                        </div></a>
                        <a href=""><div class="badge bg-danger"><span data-feather="trash-2"></span>
                        </div></a>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>

@endsection
