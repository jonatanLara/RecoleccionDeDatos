
<?php include_once  'views/modules/session.php'; ?>
<?php include_once  'views/modules/header.php'; ?>
<section>
<div class="container">
  <div class="caja d-flex justify-content-end ">
      <!-- Button to trigger modal -->
      <a class="btn bg-primario bg-primario-hover" data-bs-toggle="modal" href="#modalForm" role="button">
        <i class="fas fa-plus pe-2"></i>Nuevo Monumento
      </a>
      <?php include_once  'views/modal/newMonumento.php'; ?>
    </div>
    <div class="caja">
      <div class="px-2">
          <div class="mb-2 d-flex justify-content-between align-items-center">
              <div class="position-relative">
                  <input class="form-control w-100" placeholder="Buscar monumento">
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
                <th scope="col" width="20%">Monumento</th>
                <th scope="col" width="20%">Arq. Prospección</th>
                <th scope="col" width="20%">Última actualización</th>
                <th scope="col" width="20%"></th>
              </tr>
            </thead>
          <tbody>
            <?php
                  $mvc = new MvcController();
                  $mvc -> vistaTablaMonumetosController();
             ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</section>
