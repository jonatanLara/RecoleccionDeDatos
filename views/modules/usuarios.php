<?php include_once  'views/modules/session.php'; ?>
<?php include_once  'views/modules/header.php'; ?>

<div class="container">
  <div class="caja d-flex justify-content-between align-items-center">
    <div class="">
      <h5 class="mb-2 color-rojo">Usuarios </h5>
    </div>
    <div class="">
      <a class="btn bg-primario bg-primario-hover"data-bs-toggle="modal" href="#modalFormPersona" role="button">
        <i class="fas fa-user-plus pe-2"></i>Nuevo Usuario
      </a>
    </div>
  </div>
  <div class="caja">
    <div class="px-2">
        <div class="mb-2 d-flex justify-content-between align-items-center">
            <div class="">
              <span>Filters <i class="fa fa-angle-down"></i></span>
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <label for="" class="p-3">Estatus</label>
              <select class="form-select " aria-label="Default select example">
                <option value="1" selected>Todos</option>
                <option value="2">Activo</option>
                <option value="3">Baja</option>
              </select>
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <label for="" class="p-3">Tramo</label>
              <select class="form-select " aria-label="Default select example">
                <option value="1" selected>T1</option>
                <option value="2">Activo</option>
                <option value="3">Baja</option>
              </select>
            </div>
            <div class="px-2">
                <input class="form-control" placeholder="Buscar nombre">
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
<?php include_once  'views/modal/newPersona.php'; ?>
