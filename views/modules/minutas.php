<?php include_once  'views/modules/session.php'; ?>
<?php include_once  'views/modules/header.php'; ?>

<section>
  <div class="container">
    <div class="caja">
      <?php include_once  'views/modules/header-dashboard.php'; ?>
    </div>
    <div class="d-flex">
      <div class="caja col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="">
          <a class="btn bg-primario bg-primario-hover" data-bs-toggle="modal" href="#modalFormMinuta" role="button">
            <i class="fas fa-plus pe-2"></i>Nuevo Minuta
          </a>
        </div>
        <!-- Main Menu -->
        <nav tabindex="-1" id="">
          <div class=" border-bottom">
            <a href="" class="d-flex align-items-center text-decoration-none d-sm-block">
              <h4>
                Tramos
                <i class="fas fa-ellipsis-v"></i>
              </h4>
            </a>
          </div>
          <div class="px-0">

            <ul class="list-unstyled ps-0">
              <li class="mb-1">
                <button
                  class="btn btn-toggle align-items-center rounded"
                  data-bs-toggle="collapse"
                  data-bs-target="#tramo1-collapse"
                  aria-expanded="true"
                >
                  Tramo 1
                </button>
                <div class="collapse show" id="tramo1-collapse" style="">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="index.php?action=minutas&tabla=T1" class="rounded">Prospección</a></li>
                    <li><a href="#" class="rounded">Excavación</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button
                  class="btn btn-toggle align-items-center rounded collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#tramo2-collapse"
                  aria-expanded="false"
                >
                  Tramo 2
                </button>
                <div class="collapse" id="tramo2-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="rounded">Prospección</a></li>
                    <li><a href="#" class="rounded">Excavación</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button
                  class="btn btn-toggle align-items-center rounded collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#tramo3-collapse"
                  aria-expanded="false"
                >
                  Tramo 3
                </button>
                <div class="collapse" id="tramo3-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="rounded">Prospección</a></li>
                    <li><a href="#" class="rounded">Excavación</a></li>
                  </ul>
                </div>
              </li>

              <li class="mb-1">
                <button
                  class="btn btn-toggle align-items-center rounded collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#tramo4-collapse"
                  aria-expanded="false"
                >
                  Tramo 4
                </button>
                <div class="collapse" id="tramo4-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="rounded">Prospección</a></li>
                    <li><a href="#" class="rounded">Excavación</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button
                  class="btn btn-toggle align-items-center rounded collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#tramo5-collapse"
                  aria-expanded="false"
                >
                  Tramo 5
                </button>
                <div class="collapse" id="tramo5-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="rounded">Prospección</a></li>
                    <li><a href="#" class="rounded">Excavación</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button
                  class="btn btn-toggle align-items-center rounded collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#tramo6-collapse"
                  aria-expanded="false"
                >
                  Tramo 6
                </button>
                <div class="collapse" id="tramo6-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="rounded">Prospección</a></li>
                    <li><a href="#" class="rounded">Excavación</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button
                  class="btn btn-toggle align-items-center rounded collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#tramo7-collapse"
                  aria-expanded="false"
                >
                  Tramo 7
                </button>
                <div class="collapse" id="tramo7-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="rounded">Prospección</a></li>
                    <li><a href="#" class="rounded">Excavación</a></li>
                  </ul>
                </div>
              </li>

              <li class="border-top my-3"></li>

              <li class="mb-1">
                <button
                  class="btn btn-toggle align-items-center rounded collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#categoria-collapse"
                  aria-expanded="false"
                >
                  Tipo de categoría
                </button>
                <div class="collapse" id="categoria-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="index.php?action=minutas&tabla=DDV" class="rounded">Derecho de vía (DDV)</a></li>
                    <li><a href="index.php?action=minutas&tabla=OC" class="rounded">Obras complementarias (OC)</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </nav>

      </div>
      <!-- Estapacio dinamico -->
      <div class="caja col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">

        <?php
          if(isset($_GET["tabla"])){
            if($_GET["tabla"] == "DDV"){
              echo '<div class="header">
                        <h5 class="color-rojo"><i class="far fa-folder"></i> / Lista de claves de derecho a vía</h5>
                      </div>
                      <a type="button" class="btn bg-primario bg-primario-hover" href="" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                          <i class="far fa-file"></i></i> Agregar
                      </a>
                      <table class="table table-responsive table-borderless">
                        <thead>
                          <tr class="bg-light">
                            <th scope="col" width="5%">#</th>
                            <th scope="col" width="5%">Clave</th>
                            <th scope="col" width="20%">Nombre</th>
                            <th scope="col" width="20%"></th>
                          </tr>
                        </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>CRO</td>
                          <td>Ceros</td>
                          <td class="d-flex justify-content-end">
                          <a type="button" class="btn btn-primary" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-pen-square pe-1"></i> Editar</a>
                          <a type="button" class="btn btn-danger" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-trash-alt"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>VTE</td>
                          <td>Variantes</td>
                          <td class="d-flex justify-content-end">
                          <a type="button" class="btn btn-primary" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-pen-square pe-1"></i> Editar</a>
                          <a type="button" class="btn btn-danger" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-trash-alt"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>RML</td>
                          <td>Ramal</td>
                          <td class="d-flex justify-content-end">
                          <a type="button" class="btn btn-primary" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-pen-square pe-1"></i> Editar</a>
                          <a type="button" class="btn btn-danger" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-trash-alt"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>TRC</td>
                          <td>Troncal</td>
                          <td class="d-flex justify-content-end">
                          <a type="button" class="btn btn-primary" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-pen-square pe-1"></i> Editar</a>
                          <a type="button" class="btn btn-danger" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-trash-alt"></i> Eliminar </a>
                          </td>
                          <tr>
                            <td>5</td>
                            <td>TOT</td>
                            <td>Total</td>
                            <td class="d-flex justify-content-end">
                            <a type="button" class="btn btn-primary" href=index.php?action=
                              style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                              <i class="fas fa-pen-square pe-1"></i> Editar</a>
                            <a type="button" class="btn btn-danger" href=index.php?action=
                              style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                              <i class="fas fa-trash-alt"></i> Eliminar </a>
                            </td>
                        </tr>
                      </tbody>';
            }else if($_GET["tabla"] == "OC"){
              echo '<div class="header">
                        <h5 class="color-rojo"><i class="far fa-folder"></i> / Lista de obras complementarias</h5>
                      </div>
                      <a type="button" class="btn bg-primario bg-primario-hover" href="" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                          <i class="far fa-file"></i></i> Agregar
                      </a>
                      <table class="table table-responsive table-borderless">
                        <thead>
                          <tr class="bg-light">
                            <th scope="col" width="5%">#</th>
                            <th scope="col" width="5%">Clave</th>
                            <th scope="col" width="20%">Nombre</th>
                            <th scope="col" width="20%"></th>
                          </tr>
                        </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>PIV</td>
                          <td>Paso inferior vehicular</td>
                          <td class="d-flex justify-content-end">
                          <a type="button" class="btn btn-primary" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-pen-square pe-1"></i> Editar</a>
                          <a type="button" class="btn btn-danger" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-trash-alt"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>PSV</td>
                          <td>Paso superior vehicular</td>
                          <td class="d-flex justify-content-end">
                          <a type="button" class="btn btn-primary" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-pen-square pe-1"></i> Editar</a>
                          <a type="button" class="btn btn-danger" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-trash-alt"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>EST</td>
                          <td>Estación</td>
                          <td class="d-flex justify-content-end">
                          <a type="button" class="btn btn-primary" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-pen-square pe-1"></i> Editar</a>
                          <a type="button" class="btn btn-danger" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-trash-alt"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>PDRO</td>
                          <td>Paradero</td>
                          <td class="d-flex justify-content-end">
                          <a type="button" class="btn btn-primary" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-pen-square pe-1"></i> Editar</a>
                          <a type="button" class="btn btn-danger" href=index.php?action=
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
                            <i class="fas fa-trash-alt"></i> Eliminar </a>
                          </td>
                        </tr>
                      </tbody>';
            }else if($_GET["tabla"]=="T1"){
              echo '<div class="header">
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
                      <tbody id="contenido">
                        
                      </tbody>';
            }
          }
         ?>
      </div>
    </div>
  </div>

</section>
<?php include_once  'views/modal/newMinuta.php'; ?>
