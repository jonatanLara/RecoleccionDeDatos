<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5 d-flex justify-content-center  ">
        <img src="images/tren.png" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <?php
          $mvc = new MvcController();
          $mvc->loginController();

          if(isset($_GET["action"])){
            if($_GET["action"] == "error"){
              echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Alerta!</strong> Los datos ingresados son incorrectos, intente de nuevo
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
            }
            if($_GET["action"] == "error-baja"){
              echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Alerta!</strong> Este usuario esta de baja temporalmente
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
            }
          }
        ?>
        <form role="form" method="post">

          <!-- Matrícula input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Introduzca su Matrícula" name="cl_matricula" pa />
            <label class="form-label" for="form3Example3">Matrícula</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4"  name="cl_passw" class="form-control form-control-lg"
              placeholder="Introduzca su contraseña" />
            <label class="form-label" for="form3Example4">Contraseña</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                ¿Quiere mantener la sesión iniciada?
              </label>
            </div>
            <a href="#!" class="text-body">¿Se te olvidó tu contraseña?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn bg-primario bg-primario-hover "
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar sesión</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes una cuenta? <a href="#!"
                class="link-danger">Registro</a></p>
          </div>
        </form>

      </div>
    </div>

  </div>
  <div class="bg-primario d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      <p>Copyright © 2022. Todos los derechos reservados.</p>
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
