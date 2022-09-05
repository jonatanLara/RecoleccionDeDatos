<?php include_once  'views/modules/session.php'; ?>
<?php include_once  'views/modules/header.php'; ?>
<div class="container">
  <div class="row gutters">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
      <div class="card h-100">
        <div class="card-body">
          <div class="account-settings">
            <div class="user-profile">
              <div class="user-avatar">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
              </div>
              <h5 class="user-name"><?php echo $user->getNombre()?></h5>
              <h6 class="user-email"><?php echo $user->getCorreo()?></h6>
              <h6 class="user-matricula color-rojo"><?php echo $user->getMatricula()?></h6>
            </div>
            <div class="about">
              <h5 class="color-rojo">Acerca de mi</h5>
              <p>Soy Originario de <?php echo $user->getOrigen()?> </p>
            </div>
            <div class="btns-footer d-flex justify-content-center">
              <button type="button" id="submit" name="submit" class="btn bg-primario bg-primario-hover submitBtn" >Actualizar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
      <div class="caja d-flex">
        <div class="card h-100" style="border:none">
          <div class="card-body">
            <div class="row gutters mb-3">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h6 class="mb-2 text-primary">Datos personales</h6>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group mb-3">
                  <label for="fullName">Nombre</label>
                  <input type="text" class="form-control" id="fullName" value="<?php echo $user->getNombre()?>" readonly>
                </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group mb-3">
                  <label for="eMail">Correo electrónico</label>
                   <input type="email" class="form-control" id="eMail"  value="<?php echo $user->getCorreo()?>">
                 </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group mb-3">
                    <label for="phone">Teléfono</label>
                    <input type="text" class="form-control" id="phone" value="<?php echo $user->getTelefono()?>">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                 <div class="form-group mb-3">
                   <label for="website">Matrícula</label>
                   <input type="url" class="form-control" id="website" value="<?php echo $user->getMatricula()?>"  disabled>
                 </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group mb-3">
                    <label for="phone">Genero</label>
                    <input type="text" class="form-control" id="phone" value="<?php echo $user->getGenero()?>">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                   <div class="form-group mb-3">
                     <label for="website">Ciudad de origen</label>
                     <input type="url" class="form-control" id="website" value="<?php echo $user->getOrigen()?>" readonly>
                   </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group mb-3">
                    <label for="phone">Tipo de usuario</label>
                    <input type="text" class="form-control" id="phone" value="<?php echo $user->getUsuario();?>" disabled>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                   <div class="form-group mb-3">
                     <label for="website">Estatus del Usuario</label>
                     <input type="url" class="form-control" id="website" value="<?php echo $user->getEstatus();?>"  disabled>
                   </div>
                </div>
             </div>
               <div class="row gutters mb-3">
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   <div class="d-flex justify-content-end">
                     <button type="button" id="submit" name="submit" class="btn btn-default" style="margin-right: 10px;">Cancel</button>
                     <button type="button" id="submit" name="submit" class="btn bg-primario bg-primario-hover submitBtn" >Guardar</button>
                   </div>
                 </div>
               </div>
             </div>
           </div>
      </div>
    </div>
  </div>
</div>
