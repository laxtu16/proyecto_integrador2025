<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('nosotros'); ?>">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Acción</a></li>
            <li><a class="dropdown-item" href="#">Aventura</a></li>
            <li><a class="dropdown-item" href="#">Estrategia</a></li>
            <li><a class="dropdown-item" href="#">RPG (Rol)</a></li>
            <li><a class="dropdown-item" href="#">Simulación</a></li>
            <li><a class="dropdown-item" href="#">Deportes</a></li>
            <li><a class="dropdown-item" href="#">Carreras</a></li>
            <li><a class="dropdown-item" href="#">Multijugador Online</a></li>

            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        
      </div>
    </div> 
  </nav>

</div>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

</body>
</html>