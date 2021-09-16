<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="img-fluid" src="assets/img/logo.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Link comum d-->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicial</a>
          </li>
          <!-- CAdastro com dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cadastro
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="cadfuncionario.php">Funcionário</a></li>
              <li><a class="dropdown-item" href="cadusuario.php">Usuário</a></li>
              <li><a class="dropdown-item" href="cadanuncios.php">Anúncios</a></li>
            </ul>
          </li>
          
          <!-- Login com dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Login
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="loginfuncionario.php">Funcionário</a></li>
              <li><a class="dropdown-item" href="login.php">Usuário</a></li>
            </ul>
          </li>

          <!-- Serviço funcionário com dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Serviços funcionario
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="loginfuncionario.php">Funcionário</a></li>
              <li><a class="dropdown-item" href="login.php">Usuário</a></li>
            </ul>
          </li>

          <!-- Link simples do menu -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="logout.php">Sair</a>
          </li>
        </ul>



        <form class="d-flex" method="POST" action="inc/result.php">
          <input class="form-control me-2" type="search" placeholder="Pesquisar anúncios" aria-label="Pesquisar">
          <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
      </div>
    </div>
  </nav>


</div>