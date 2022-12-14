<?php
  #echo $user->getNivelUsuario();
  $AreaProspeccion =
  '<header class="p-3 mb-3 border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="index.php?action=inicio" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
              <img id="MDB-logo" src="images/tren.png" alt="MDB Logo" draggable="false" height="30"/>
          </a>
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php?action=inicio" class="nav-link px-2 color-rojo hover-color-rojo bold">Monumentos</a></li>
            <li><a href="index.php?action=usuarios" class="nav-link px-2 color-rojo hover-color-rojo bold">Usuarios</a></li>
            <li><a href="index.php?action=codigos" class="nav-link px-2 color-rojo hover-color-rojo bold">Códigos</a></li>
            <li><a href="index.php?action=minutas" class="nav-link px-2 color-rojo hover-color-rojo bold">Minutas</a></li>
            <li><a href="index.php?action=perfil" class="nav-link px-2 color-rojo hover-color-rojo bold">Perfil</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
          </form>

          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#"><i class="fas fa-user-circle pe-2"></i>'.$user->getNombre().'</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal" href="#modalForm"> <i class="fas fa-plus pe-2"></i>Nuevo Monumento</a></li>
              <li><a class="dropdown-item" href="index.php?action=perfil"><i class="fas fa-tools pe-2"></i>Configuración</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="index.php?action=destroy"><i class="fas fa-sign-out-alt pe-2"></i>Cerrar Sesión</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>';
  echo $AreaProspeccion;

?>
