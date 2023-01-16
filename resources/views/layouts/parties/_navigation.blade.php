<nav class="navbar navbar-expand-lg static-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('root_path') }}">{{ Config('app.name') }}</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-pills nav-fill">
       <li class="nav-item">
          <a class="nav-link {{ set_active_route('portail_path') }}" aria-current="page" href="{{ route('portail_path') }}">Portail</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Données</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Pays</a></li>
            <li><a class="dropdown-item" href="#">Villes</a></li>
            <li><a class="dropdown-item" href="#">Localités</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notifications</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ set_active_route('contact_path') }} " href="{{ route('contact_path') }}">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Traitements</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item"><a class="nav-link active" href="#">Login</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">Register</a></li>
      </ul>
      <!--<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav>