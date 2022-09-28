<?php include_once  'views/modules/session.php'; ?>
<?php include_once  'views/modules/header.php'; ?>

<section>
  <div class="container">
    <div class="caja d-flex justify-content-end">
      <?php include_once  'views/modules/header-dashboard.php'; ?>
    </div>
    <div class="d-flex">
      <div class="caja col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">

      </div>
      <div class="caja col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="header">
          <h5 class="color-rojo"><i class="far fa-folder"></i> / Tramo 1</h5>
        </div>
        <a type="button" class="btn bg-primario bg-primario-hover" href="" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            <i class="far fa-file"></i></i> Nueva minuta de PROS
        </a>
        <a type="button" class="btn bg-primario bg-primario-hover" href="" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            <i class="far fa-file"></i></i> Nueva minuta de Exc
        </a>

        <table class="table table-responsive table-borderless">
          <thead>
            <tr class="bg-light">
              <th scope="col" width="5%">#</th>
              <th scope="col" width="20%">Minuta</th>
              <th scope="col" width="20%">Fecha solicitada</th>
              <th scope="col" width="20%">Fecha emitida</th>
              <th scope="col" width="20%"></th>
            </tr>
          </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>T1-FN-EXC-OC-EST-0001</td>
            <td>12/01/2022</td>
            <td>13/01/2022</td>
            <td class="d-flex justify-content-end"><a type="button" class="btn btn-primary" href=index.php?action=monumento&clave='.$item["bd_tm_mnm_id"].'
              style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
              <i class="fas fa-pen-square pe-1"></i> Editar</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>T1-FN-PROS-DDV-TOT-0001</td>
            <td>15/01/2022</td>
            <td>16/01/2022</td>
            <td class="d-flex justify-content-end"><a type="button" class="btn btn-primary" href=index.php?action=monumento&clave='.$item["bd_tm_mnm_id"].'
              style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
              <i class="fas fa-pen-square pe-1"></i> Editar</a></td>
          </tr>
        </tbody>
      </div>
    </div>
  </div>

</section>
