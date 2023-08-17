<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">
      <img src="logo.svg" height="64px" alt="logo">
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ $active === 'home' ? 'active fw-bold' : '' }}" aria-current="page" href="/">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active === 'article' ? 'active fw-bold' : '' }}" href="/article">ARTICLES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active === 'about' ? 'active fw-bold' : '' }}" href="/about">ABOUT</a>
        </li>
      </ul>
      @auth
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-person-badge"></i> Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-left"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
      @else
        <a href="/login">
          <button class="btn btn-dark fw-bold" type="submit">JOIN US</button>
        </a>
      @endauth
    </div>
  </div>
</nav>