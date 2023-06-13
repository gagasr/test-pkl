  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><b>GAS</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Home") ? 'active' : '' }}"  href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "About") ? 'active' : '' }}" href="/about">Tentang GAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Posts") ? 'active' : '' }}" href="/posts">Fitur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "") ? 'active' : '' }}" href="post">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "") ? 'active' : '' }}" href="karir">Karir</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Posts") ? 'active' : '' }}" href="">sign in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>







</body>
</html>