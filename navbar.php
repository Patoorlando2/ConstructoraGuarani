<!-- navbar section -->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary p-3">
  <!--<a class="navbar-brand" href="index.php">
    <img src="images/guaraniConstructora/LOGO Constructora Guarani_blanco.png" class="d-inline-block align-top" height="60px" alt="">
  </a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo ' active'; ?>">
          <a class="nav-link text-white" href="index.php">Empresa <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item<?php if (basename($_SERVER['PHP_SELF']) == 'servicios.php') echo ' active'; ?>">
          <a class="nav-link text-white" href="servicios.php">Servicios</a>
        </li>
        <li class="nav-item<?php if (basename($_SERVER['PHP_SELF']) == 'obras-en-ejecucion.php') echo ' active'; ?>">
          <a class="nav-link text-white" href="obras-en-ejecucion.php">Obras En Ejecución</a>
        </li>
        <li class="nav-item<?php if (basename($_SERVER['PHP_SELF']) == 'contacto.php') echo ' active'; ?>">
          <a class="nav-link text-white" href="contacto.php">Contacto</a>
        </li>
      </ul>
    </div>
  </nav>