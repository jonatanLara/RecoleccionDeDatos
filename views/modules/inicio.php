<?php
  // session_start();
  // if(!$_SESSION["validar"]){// si validar es igual a falso
  //   echo "<script>window.location='index.php'</script>"; // se le redirige a la persona al login
  //   exit();
  // }
?>

<?php include_once  'views/modules/header.php'; ?>
<section>
  <div class="container-fluid">
    <div class="card">
      <div class="card-header"><i class="fas fa-file-search"></i> Carga tu archivo</div>
      <div class="card-body">

        <form class="" action="" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="archivo"> Selecciona un archivo <code>.csv</code></label>
            <input type="file" name="dataCliente" class="form-control" id="file-input" accept=".csv">
          </div>
          <button class="btn bg-primario bg-primario-hover" name="subir" value="Importar" ><i class="fas fa-file-import"></i> Importar</button>
        </form>
        <!-- <form  method="post">
          <div class="mb-3">
            <label for="archivo">Selecciona un archivo <code>.csv</code></label>
            <input type="file" id="fileUpload" class="form-control" name="archivocsv_nombre" required>
          </div>
          <button class="btn btn-success" id="submit-file" type="submit">Importar</button>
        </form> -->

      </div>
    </div>
    <br>
    <?php
          $mvc = new MvcController();
          $mvc -> cargarCSV();
     ?>
  </div>
  <div class="caja d-flex justify-content-end">
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
        <tr>
          <td>1</td>
          <td>T1_05026</td>
          <td>Ángel Juventino</td>
          <td>2022.06.17</td>
          <td class="text-end"><a type="button" class="btn btn-primary" href=""
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            <i class="fas fa-pen-square pe-1"></i> Editar
            </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
