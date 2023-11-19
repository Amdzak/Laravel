<nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
    <div class="container">
      <a class="navbar-brand" href="#">AZK Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : ''  }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}"  href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Category</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Weclome back, {{ auth()->user()->username }}
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"> Logout</button>
                        </form>
                      </li>
                    </ul>
                  </li>
            @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ $active === "login" ? 'active' : '' }}">Login<i class="bi bi-arrow-return-right"></i></a>
                </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>
