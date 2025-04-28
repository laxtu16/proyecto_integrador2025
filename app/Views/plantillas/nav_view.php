<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <!-- BOTÓN HAMBURGUESA (faltaba) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido del menú -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <!-- Tus links -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('nosotros'); ?>">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('productos'); ?>">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('contacto'); ?>">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Ayuda'); ?>">Ayuda</a>
                </li>
            </ul>
        </div>

    </div>
</nav>