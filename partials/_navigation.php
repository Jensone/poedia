<!-- Les navigations -->
<div>

<!-- Navigation générale -->
<nav class="navbar navbar-dark navbar-expand-lg bg-transparent py-5 py-lg-3 px-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">
      <img class="img-fluid" src="/src/assets/images/light.png" alt="Logo Poedia" width="180">
    </a>
    <div class="collapse navbar-collapse me-5 justify-content-center">
      <ul class="navbar-nav">
        <li class="nav-item p-5">
          <a class="nav-link d-inline-block p-0" href="/livres.php">
            <h3 class="fs-17 fw-medium text-white mb-0">Bibliothèque</h3>
          </a>
        </li>
        <li class="nav-item p-5">
          <a class="nav-link d-inline-block p-0" href="/commandes.php">
            <h3 class="fs-17 fw-medium text-white mb-0">Commandes</h3>
          </a>
        </li>
        <li class="nav-item p-5">
          <a class="nav-link d-inline-block p-0" href="/clients.php">
            <h3 class="fs-17 fw-medium text-white mb-0">Clients</h3>
          </a>
        </li>
      </ul>
    </div>
    <div class="d-none d-lg-block">
      <div class="bg-white bg-opacity-25 rounded-3">
        <button class="btn btn-transparent p-4 rounded-3" type="button">
          <span class="fs-20 text-light text-uppercase mb-0" style="letter-spacing: 1px;">Coonexion</span>
        </button>
      </div>
    </div>
    <div class="d-lg-none">
      <button class="btn navbar-burger p-0">
        <svg class="text-dark-light" width="51" height="51" viewbox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="56" height="56" rx="28" fill="currentColor"></rect>
          <path d="M37 32H19M37 24H19" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </button>
    </div>
  </div>
</nav>

<!-- Navigation mobile -->
<div class="d-none navbar-menu position-fixed top-0 start-0 bottom-0 w-75 mw-xs" style="z-index: 9999;">
  <div class="navbar-close navbar-backdrop position-fixed top-0 start-0 end-0 bottom-0 bg-dark" style="opacity: 75%;"></div>
  <nav class="position-relative h-100 w-100 d-flex flex-column justify-content-between py-8 px-8 bg-white overflow-auto">
    <div class="d-flex align-items-center">
      <a class="me-auto h4 mb-0 text-decoration-none" href="#">
        <img class="img-fluid" src="gradia-assets/logos/gradia-name-black.svg" alt="">
      </a>
      <a class="navbar-close" href="#">
        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6 18L18 6M6 6L18 18" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </a>
    </div>
    <div class="py-16">
      <ul class="nav flex-column">
        <li class="nav-item mb-12">
          <a class="nav-link d-inline-block p-0" href="/livres.php">
            <h3 class="fs-17 fw-medium text-secondary mb-0">Bibliothèque</h3>
          </a>
        </li>
        <li class="nav-item mb-12">
          <a class="nav-link d-inline-block p-0" href="/commandes.php">
            <h3 class="fs-17 fw-medium text-secondary mb-0">Commandes</h3>
          </a>
        </li>
        <li class="nav-item mb-12">
          <a class="nav-link d-inline-block p-0" href="/clients.php">
            <h3 class="fs-17 fw-medium text-secondary mb-0">Clients</h3>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-inline-block p-0" href="/auteurs.php">
            <h3 class="fs-17 fw-medium text-secondary mb-0">Auteurs</h3>
          </a>
        </li>
      </ul>
    </div>
    <div>
      <button class="btn btn-light px-4 py-3 w-100 mb-5 rounded-1" type="button">
        <span class="fs-17 fw-medium text-secondary mb-0">Connexion</span>
      </button>
      <div class="d-inline-block w-100 rounded-3" style="padding:2px; background: linear-gradient(90deg, rgba(108,213,246,1 ) 0%, rgba(248,157,92,1) 50%, rgba(91,106,240,1) 100%)">
      </div>
    </div>
  </nav>
</div>

</div>