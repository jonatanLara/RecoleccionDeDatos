<?php include_once  'views/modules/session.php'; ?>
<?php include_once  'views/modules/header.php'; ?>
<div class="container">
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
    </div>
  </div>
  <br>
  <?php
        $mvc = new MvcController();
        $mvc -> cargarCSV();
   ?>
</div>
