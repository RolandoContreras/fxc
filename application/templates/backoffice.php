<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">
  <title>Tablero</title>
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
  <script src="https://kit.fontawesome.com/6359484e52.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
    var site = '<?php echo site_url();?>';
  </script>
</head>

<body class="animsition">
  <div class="page-wrapper">
    <header class="header-mobile d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
              <a class="logo" href="<?php echo site_url().'backoffice';?>">
                <img src="<?php echo site_url().'static/page_front/images/logo/logo.jpg';?>" alt="Empire" width="25" />
            </a>
              <button class="hamburger hamburger--slider" type="button">
                  <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                  </span>
              </button>
          </div>
        </div>
      </div>
        
      <?php 
            $url = explode("/",uri_string()); 
            $style_home = "";
            $style_profile = "";
            $style_network = "";
            $style_finance = "";
            $style_pay = "";
            $style_range = "";
            $style_file = "";
            
            if(isset($url[1])){
                $nav = "$url[1]";
                switch ($nav) {
                    case "profile":
                        $style_profile = "active";
                        break;
                    case "network":
                        $style_network = "active";
                        break;
                    case "finance":
                        $style_finance = "active";
                        break;
                    case "pay":
                        $style_pay = "active";
                        break;
                    case "range":
                        $style_range = "active";
                        break;
                    case "file":
                        $style_file = "active";
                        break;
                    default:
                        $style_home = "active";
                    }
            }else{
                $style_home = "active";
            }?>    
        
      <nav class="navbar-mobile">
        <div class="container-fluid">
          <ul class="navbar-mobile__list list-unstyled">
            <li class="has-sub"><a class="js-arrow" href="<?php echo site_url().'backoffice';?>"><i class="fas fa-tachometer-alt"></i>Panel</a></li>
            <li><a href="<?php echo site_url().'backoffice/profile';?>"><i class="fas fa-address-book"></i>Perfil</a></li>
            <li><a href="#"><i class="far fa-check-square"></i>Red</a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li><a href="<?php echo site_url().'backoffice/unilevel';?>">Arbol Unilevel</a></li>
              </ul>
            </li>
            <li><a href="<?php echo site_url().'backoffice/finance';?>"><i class="fas fa-chart-line"></i>Finanzas</a></li>
            <li><a href="<?php echo site_url().'backoffice/pay';?>"><i class="fas fa-money-bill-alt"></i>Cobros</a></li>
            <li><a href="<?php echo site_url().'backoffice/range';?>"><i class="fas fa-trophy"></i>Rangos</a></li>
            <li class="has-sub"><a class="js-arrow" href="#"><i class="fas fa-file-archive"></i>Material</a>
              <ul class="list-unstyled navbar__sub-list js-sub-list">
                <li><a href="<?php echo site_url().'backoffice/tools';?>">Material Red</a></li>
                <li><a href="<?php echo site_url().'backoffice/tools_legal';?>">Documentos Legales</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <aside class="menu-sidebar d-none d-lg-block">
      <div class="logo">
        <a href="<?php echo site_url().'backoffice';?>">
            <img src="<?php echo site_url().'static/page_front/images/logo/logo.jpg';?>" alt="Empire" width="100"/></a>
      </div>
      <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
          <ul class="list-unstyled navbar__list">
            <li class="<?php echo $style_home;?> has-sub">
                <a class="js-arrow" href="<?php echo site_url().'backoffice';?>"><i class="fas fa-tachometer-alt"></i>Panel</a>
            </li>
            <li class="<?php echo $style_profile;?> has-sub">
                <a href="<?php echo site_url().'backoffice/profile';?>"><i class="fas fa-address-book"></i>Perfil</a>
            </li>
            <li class="<?php echo $style_network;?> has-sub">
                <a class="js-arrow" href="#"><i class="fas fa-code-branch"></i>Red</a>
              <ul class="list-unstyled navbar__sub-list js-sub-list">
                <li><a href="<?php echo site_url().'backoffice/unilevel';?>">Arbol Unilevel</a></li>
              </ul>
            </li>
            <li class="<?php echo $style_finance;?> has-sub">
                <a href="<?php echo site_url().'backoffice/finance';?>"><i class="fas fa-chart-line"></i>Finanzas</a>
            </li>
            <li class="<?php echo $style_pay;?> has-sub">
                <a href="<?php echo site_url().'backoffice/pay';?>"><i class="far fa-money-bill-alt"></i>Cobros</a>
            </li>
            <li class="<?php echo $style_range;?> has-sub">
                <a href="<?php echo site_url().'backoffice/range';?>"><i class="fas fa-trophy"></i>Rangos</a>
            </li>
            <li class="<?php echo $style_file;?> has-sub">
                <a class="js-arrow" href="#"><i class="fas fa-file-archive"></i>Material</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                      <li><a href="<?php echo site_url().'backoffice/tools';?>">Material Red</a></li>
                      <li><a href="<?php echo site_url().'backoffice/tools_legal';?>">Documentos Legales</a></li>
                    </ul>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <div class="page-container">
      <header class="header-desktop">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="header-wrap">
              <form></form>
              <div class="header-button">
                <div class="noti-wrap">
                  <div class="noti__item js-item-menu"><i class="zmdi zmdi-comment-more"></i><span class="quantity">1</span>
                    <div class="mess-dropdown js-dropdown">
                      <div class="mess__title">
                        <p>You have 2 news message</p>
                      </div>
                      <div class="mess__item">
                        <div class="image img-cir img-40">
                            <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                        </div>
                        <div class="content">
                          <h6>Michelle Moreno</h6>
                          <p>Have sent a photo</p><span class="time">3 min ago</span></div>
                      </div>
                      <div class="mess__item">
                        <div class="image img-cir img-40">
                            <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                        </div>
                        <div class="content">
                          <h6>Diane Myers</h6>
                          <p>You are now connected on message</p><span class="time">Yesterday</span></div>
                      </div>
                      <div class="mess__footer"><a href="#">View all messages</a></div>
                    </div>
                  </div>
                  <div class="noti__item js-item-menu"><i class="zmdi zmdi-email"></i><span class="quantity">1</span>
                    <div class="email-dropdown js-dropdown">
                      <div class="email__title">
                        <p>You have 3 New Emails</p>
                      </div>
                      <div class="email__item">
                        <div class="image img-cir img-40">
                            <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                        </div>
                        <div class="content">
                          <p>Meeting about new dashboard...</p><span>Cynthia Harvey, 3 min ago</span></div>
                      </div>
                      <div class="email__item">
                        <div class="image img-cir img-40">
                            <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                        </div>
                        <div class="content">
                          <p>Meeting about new dashboard...</p><span>Cynthia Harvey, Yesterday</span></div>
                      </div>
                      <div class="email__item">
                        <div class="image img-cir img-40"><img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" /></div>
                        <div class="content">
                          <p>Meeting about new dashboard...</p><span>Cynthia Harvey, April 12,,2018</span></div>
                      </div>
                      <div class="email__footer"><a href="#">See all emails</a></div>
                    </div>
                  </div>
                  <div class="noti__item js-item-menu"><i class="zmdi zmdi-notifications"></i><span class="quantity">3</span>
                    <div class="notifi-dropdown js-dropdown">
                      <div class="notifi__title">
                        <p>You have 3 Notifications</p>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c1 img-cir img-40"><i class="zmdi zmdi-email-open"></i></div>
                        <div class="content">
                          <p>You got a email notification</p><span class="date">April 12, 2018 06:50</span></div>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c2 img-cir img-40"><i class="zmdi zmdi-account-box"></i></div>
                        <div class="content">
                          <p>Your account has been blocked</p><span class="date">April 12, 2018 06:50</span></div>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c3 img-cir img-40"><i class="zmdi zmdi-file-text"></i></div>
                        <div class="content">
                          <p>You got a new file</p><span class="date">April 12, 2018 06:50</span></div>
                      </div>
                      <div class="notifi__footer"><a href="#">All notifications</a></div>
                    </div>
                  </div>
                </div>
                <div class="account-wrap">
                  <div class="account-item clearfix js-item-menu">
                    <div class="image">
                        <img src="<?php echo site_url().'static/backoffice/images/avatar-01.jpg'?>" alt="<?php echo $_SESSION['customer']['name'];?>" />
                    </div>
                    <div class="content">
                        <a class="js-acc-btn" href="#">Rolando Contreras</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                      <div class="info clearfix">
                        <div class="image">
                          <a href="#">
                              <img src="<?php echo site_url().'static/backoffice/images/avatar-01.jpg'?>" alt="<?php echo $_SESSION['customer']['name'];?>" /></a>
                        </div>
                        <div class="content">
                          <h5 class="name"><a href="#">john doe</a></h5>
                          <span class="email">
                              <?php echo $_SESSION['customer']['username'];?>
                          </span>
                        </div>
                      </div>
                      <div class="account-dropdown__body">
                          <div class="account-dropdown__item"><a href="<?php echo site_url().'profile';?>"><i class="fas fa-address-book"></i>Perfil</a></div>
                        <div class="account-dropdown__item"><a href="<?php echo site_url().'finance';?>"><i class="fas fa-chart-line"></i>Finanzas</a></div>
                      </div>
                      <div class="account-dropdown__footer"><a href="<?php echo site_url().'salir';?>"><i class="fas fa-power-off"></i>Salir</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- START MAIN SECTION-->
            <?php echo $body;?> 
      <!-- END MAIN SECTION-->
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