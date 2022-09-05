<?php include_once  'views/modules/session.php'; ?>
<?php include_once  'views/modules/header.php'; ?>
<div class="container">
  <div class="caja">
    <div class="caja d-flex justify-content-between align-items-center" style="box-shadow:none">
      <div class="">
        <h5 class="mb-2 color-rojo">ID Arqueólogo de prospección </h5>
      </div>
      <div class="">
        <a class="btn bg-primario bg-primario-hover" data-bs-toggle="modal" href="#modalFormPros" role="button">
          <i class="fas fa-plus pe-2"></i>Nuevo ID
        </a>
      </div>
    </div>
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
              <th scope="col" width="10%">Tramo</th>
              <th scope="col" width="10%">ID Arqueólogo</th>
              <th scope="col" width="30%">Nombre</th>
              <th scope="col" width="20%">Matrícula</th>
              <th scope="col" width="20%"></th>
            </tr>
          </thead>
          <tbody>
            <?php
                  $mvc = new MvcController();
                  $mvc-> vistaTablaIDProspeccionController();
             ?>
          </tbody>
      </table>
      </div>
    </div>
  </div>
  <br>
<!-- tabla de codigos de excavación -->
  <div class="caja">
    <div class="caja d-flex justify-content-between align-items-center" style="box-shadow:none">
      <div class="">
        <h5 class="mb-2 color-rojo">ID Arqueólogo de excavación </h5>
      </div>
      <div class="">
        <a class="btn bg-primario bg-primario-hover" data-bs-toggle="modal" href="#modalFormExc" role="button">
          <i class="fas fa-plus pe-2"></i>Nuevo ID
        </a>
      </div>
    </div>
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
              <th scope="col" width="10%">Tramo</th>
              <th scope="col" width="10%">ID Arqueólogo</th>
              <th scope="col" width="30%">Nombre</th>
              <th scope="col" width="20%">Matrícula</th>
              <th scope="col" width="20%"></th>
            </tr>
          </thead>
          <tbody>
            <?php
                  $mvc = new MvcController();
                  $mvc-> vistaTablaIDExcavacionController();
             ?>
          </tbody>
      </table>
      </div>
    </div>
  </div>
  <br>
<!-- tabla de codigos de topopgrafos -->
  <div class="caja">
    <div class="caja d-flex justify-content-between align-items-center" style="box-shadow:none">
      <div class="">
        <h5 class="mb-2 color-rojo">ID Topógrafos </h5>
      </div>
      <div class="">
        <a class="btn bg-primario bg-primario-hover" data-bs-toggle="modal" href="#modalFormTopo" role="button">
          <i class="fas fa-plus pe-2"></i>Nuevo ID
        </a>
      </div>
    </div>
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
              <th scope="col" width="10%">Tramo</th>
              <th scope="col" width="10%">ID Arqueólogo</th>
              <th scope="col" width="30%">Nombre</th>
              <th scope="col" width="20%">Matrícula</th>
              <th scope="col" width="20%"></th>
            </tr>
          </thead>
          <tbody>
            <?php
                  $mvc = new MvcController();
                  $mvc-> vistaTablaIDTopografoController();
             ?>
          </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
<?php include_once  'views/modal/newArqPros.php'; ?>
<?php include_once  'views/modal/newArqExc.php'; ?>
<?php include_once  'views/modal/newTopo.php'; ?>
