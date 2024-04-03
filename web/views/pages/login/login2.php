
<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">
      <div class="login-card">
        <div>
          <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="<?php echo $path ?>views/assets/images/logo/logoHoriz.png" alt="looginpage"><img class="img-fluid for-dark" src="<?php echo $path ?>views/assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
          <div class="login-main">
            <form class="theme-form method="POST">
              <h4>Administradores</h4> 
              <!-- <p>Enter your email & password to login</p> -->
              <div class="form-group">
                <label class="col-form-label">usuario o email</label>
                <input class="form-control" type="" required="" placeholder="" name="loginAdminEmail">
              </div>
              <div class="form-group">
                <label class="col-form-label">Contraseña</label>
                <div class="form-input position-relative">
                  <input class="form-control" type=""  name="loginAdminPassword" required="" placeholder="*********">
                  <div class="show-hide"><span class="show"> </span></div>
                </div>
              </div>
              <div class="form-group mb-0">
                <div class="checkbox p-0">
                  <input id="checkbox1" type="checkbox">
                  <label class="text-muted" for="checkbox1">Recordar contraseña</label>
                </div>
              </div>
              

              <div class="form-group m-0 p-0">
              <a class="link" href="forget-password.html">¿Has olvidado tu contraseña?</a>
                <div class="text-end pt-5">
                  <button class="btn btn-primary btn-block w-100" type="submit">Ingresar</button>
                </div>  
              </div>
              <?php 
                require_once "controllers/admins.controller.php";
                $loginAdmins = new AdminsControllers();
                $loginAdmins->loginAdmins();
              ?>

              <!-- <h6 class="text-muted mt-4 or"></h6>
              <div class="social mt-4">
                <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
              </div> -->
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <script>
    $(document).on('click', '#error', function(e) {
      if ($('.email').val() == '' || $('.pwd').val() == '') {
        swal(
          "Error!", "Sorry, looks like some data are not filled, please try again !", "error"
        )
      }
    });
  </script> -->
</div>