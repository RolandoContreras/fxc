<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">
  <title>Inicio de Sesión</title>
  <link href="<?php echo site_url().'static/backoffice/css/bootstrap.min.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/animsition.min.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/animate.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/select2.min.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/theme.css';?>" rel="stylesheet" media="all">
  <!--https://colorlib.com/polygon/cooladmin/-->
    <script>
        var site = '<?php echo site_url();?>';
    </script>
</head>

<body class="animsition">
  <div class="page-wrapper">
    <div class="page-content--bge5">
      <div class="container">
        <div class="login-wrap">
          <div class="login-content">
            <div class="login-logo">
                <!--LOGO-->
              <a href="<?php echo site_url().'home';?>">
                  <img src="<?php echo site_url().'static/page_front/images/logo/logo.jpg';?>" alt="Empire" width="100" />
              </a>
            </div>
            <div class="login-form">
              <form method="post" action="javascript:void(0);" onsubmit="login();" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Usuario</label>
                    <input class="au-input au-input--full" type="text" name="code" id="code" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input class="au-input au-input--full" type="password" name="pass" id="pass" placeholder="Password">
                </div>
                <div class="form-group has-feedback">
                    <div class="g-recaptcha" data-sitekey="6Lc684YUAAAAAKbiFYJvMx83vmSSJHH8N03PXnKx"></div>
                </div>
                  
                <div class="form-group has-feedback" style="display: none;" id="no_messages">
                    <div class="alert alert-danger validation-errors">
                        <p class="user_login_id" style="text-align: center;">El usuario y/o contraseña incorrectas.</p>
                    </div>
                </div>
                <div class="form-group has-feedback" style="display: none;" id="captcha_messages">
                    <div class="alert alert-danger validation-errors">
                        <p class="user_login_id" style="text-align: center;">Captcha no verificado</p>
                    </div>
                </div>
                <div class="form-group has-feedback" style="display: none;" id="messages">
                    <div class="alert alert-success validation-errors">
                        <p class="user_login_id" style="text-align: center;">Bienvenido.</p>
                    </div>
                </div>  
                  
                <div class="login-checkbox">
                    <label>
                        <input type="checkbox" name="remember">Remember Me</label>
                    <label>
                        <a class="register-link" href="<?php echo site_url().'forget';?>">¿Olvidaste tu Contraseña?</a>
                    </label>
                </div>
                  <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Accesar Oficina Virtual</button>
              </form>
              <div class="register-link">
                  <p>¿Aún no tienes una cuenta?<a href="<?php echo site_url().'register';?>">&nbsp;&nbsp;Regístrate Aquí</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="<?php echo site_url().'static/page_front/js/script/login.js';?>"></script>
  <script src="<?php echo site_url().'static/backoffice/js/jquery-3.2.1.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/bootstrap.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/animsition.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/main.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="27d243113242fdd8b9f794f9-|49" defer=""></script>
</body>
</html>