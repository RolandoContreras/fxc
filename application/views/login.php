<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">
  <title>Inicio de Sesión</title>
  <link href="<?php echo site_url().'static/backoffice/css/font-face.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/font-awesome.min.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/fontawesome-all.min.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/material-design-iconic-font.min.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/bootstrap.min.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/animsition.min.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/bootstrap-progressbar-3.3.4.min.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/animate.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/hamburgers.min.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/slick.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/select2.min.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/perfect-scrollbar.css';?>" rel="stylesheet" media="all">
  <link href="<?php echo site_url().'static/backoffice/css/theme.css';?>" rel="stylesheet" media="all">
  <!--https://colorlib.com/polygon/cooladmin/-->
</head>

<body class="animsition">
  <div class="page-wrapper">
    <div class="page-content--bge5">
      <div class="container">
        <div class="login-wrap">
          <div class="login-content">
            <div class="login-logo">
                <!--LOGO-->
              <a href="<?php echo site_url().'forget';?>">
                  <img src="<?php echo site_url().'static/page_front/images/logo/logo.jpg';?>" alt="Empire" width="100" />
              </a>
            </div>
            <div class="login-form">
              <form action="" method="post">
                <div class="form-group">
                    <label>Usuario</label>
                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                </div>
                <div class="login-checkbox">
                    <label>
                        <input type="checkbox" name="remember">Remember Me</label>
                    <label>
                        <a class="register-link" href="<?php echo site_url().'forget';?>">¿Olvidaste tu Contraseña?</a>
                    </label>
                </div>
                  <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Accesar Oficina Virtual</button>
                <div class="social-login-content">
                  <div class="social-button"><button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button><button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button></div>
                </div>
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
  <script src="<?php echo site_url().'static/backoffice/js/jquery-3.2.1.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/popper.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/bootstrap.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/slick.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/wow.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/animsition.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/bootstrap-progressbar.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/jquery.waypoints.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/jquery.counterup.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/circle-progress.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/perfect-scrollbar.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/Chart.bundle.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/select2.min.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="<?php echo site_url().'static/backoffice/js/main.js';?>" type="27d243113242fdd8b9f794f9-text/javascript"></script>
  <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="27d243113242fdd8b9f794f9-|49" defer=""></script>
</body>
</html>