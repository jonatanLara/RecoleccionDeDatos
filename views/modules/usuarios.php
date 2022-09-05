<?php include_once  'views/modules/session.php'; ?>
<?php include_once  'views/modules/header.php'; ?>
<div class="container">
  <div class="caja d-flex justify-content-between align-items-center">
    <div class="">
      <h5 class="mb-2 color-rojo">Usuarios </h5>
    </div>
    <div class="">
      <a class="btn bg-primario bg-primario-hover" role="button">
        <i class="fas fa-user-plus pe-2"></i>Nuevo Usuario
      </a>
    </div>
  </div>
  <div class="caja">
    <div class="px-2">
        <div class="mb-2 d-flex justify-content-between align-items-center">
            <div class="position-relative">
                <input class="form-control w-100" placeholder="Buscar nombre">
            </div>
            <div class="px-2">
              <span>Filters <i class="fa fa-angle-down"></i></span>
              <i class="fa fa-ellipsis-h ms-3"></i>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table table-responsive table-borderless">
          <thead>
            <tr class="bg-light">
              <th scope="col" width="5%">#</th>
              <th scope="col" width="10%">Matrícula</th>
              <th scope="col" width="20%">Nombre</th>
              <th scope="col" width="10%">Ciudad Natal</th>
              <th scope="col" width="20%">Correo</th>
              <th scope="col" width="10%">Teléfono</th>
              <th scope="col" width="10%">Nivel</th>
              <th scope="col" width="8%">Estatus</th>
              <th scope="col" width="10%"></th>
            </tr>
          </thead>
          <tbody>
            <?php
                  $mvc = new MvcController();
                  $mvc -> vistaTablaUsuariosController();
             ?>
          </tbody>
      </table>
    </div>
  </div>
</div>
