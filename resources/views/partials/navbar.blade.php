<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Homepage') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <button class="btn btn-primary" type="submit">Login</button>
        </form>
      </div>
    </div>
</nav>