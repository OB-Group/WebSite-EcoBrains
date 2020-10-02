<!-- Navbar -->
<nav class="sticky-top navbar navbar-expand-lg navbar-fundo">

  <div class="container-fluid mx-5">

    <a class="navbar-brand h1 mt-2" href=<?= base_url('/') ?>>
      <img src="imgs/eco-logo-branco.png" id="logo-nav" alt="Logo da EcoBrains">
      <img src="imgs/eco-branco.png" id="name-nav" alt="Logo da EcoBrains">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
      <span class="navbar-toggler-icon icon-hambuger"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSite">

      <ul class="navbar-nav ml-auto mt-1">

        <li class="nav-item marginItens">
          <a class="nav-link nav-tamanho" href=<?= base_url('/') ?>>Início</a>
        </li>
        <li class="nav-item marginItens">
          <a class="nav-link nav-tamanho" href=<?= base_url('/') ?>>Pesquisar Empresas</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle nav-tamanho" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Nome da Empresa
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Perfil</a>
          <a class="dropdown-item" href="#">Se torne um Premium!</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sair</a>
        </div>
      </li>
      </ul>
    </div>
  </div>
</nav>