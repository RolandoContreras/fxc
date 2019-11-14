<div class="content-w">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"> <a href="<?php echo site_url().'backoffice';?>">Tablero</a> </li>
  </ul>
  <div class="content-i">
    <div class="content-box">
      <div class="container-fluid" style="margin-top: 30px;">
        <div class="row clearfix">
          <div class="col-xl-4 col-lg-4 col-md-5">
            <div class="user-profile compact">
                <div class="up-head-w" style="background-image:url('<?php echo site_url().'static/page_front/images/header_image.jpg';?>')">
                <div class="up-main-info">
                  <h2 class="up-header"> <?php echo $obj_customer->first_name." ".$obj_customer->last_name;?></h2>
                  <h6 class="up-sub-header"> Email: <?php echo $obj_customer->email;?> <br> Usuario: <?php echo "@".$obj_customer->username;?> <br> Documento: <?php echo $obj_customer->dni;?></h6>
                </div> 
                </div>
              <div class="up-controls">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="value-pair">
                      <div class="label"> Estado: </div>
                      <?php 
                      if($obj_customer->active == "1"){ ?>
                            <div class="value badge badge-pill badge-success"> Activo </div>
                      <?php  }else{ ?>
                          <div class="value badge badge-pill badge-danger"> Inactivo </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="up-contents">
                <div class="m-b">
                  <div class="row m-b">
                    <div class="col-sm-6 b-r b-b">
                      <div class="el-tablo centered padded-v">
                        <div class="value" style="font-size: 18px;"> <?php echo $obj_customer->kit;?> </div>
                        <div class="label"> Mi Plan </div>
                      </div>
                    </div>
                    <div class="col-sm-6 b-r b-b">
                      <div class="el-tablo centered padded-v">
                          <div class="value" style="font-size: 18px;"> <?php echo formato_fecha_barras($obj_customer->created_at);?> </div>
                        <div class="label"> Fecha de Registro </div>
                      </div>
                    </div>
                    <div class="col-sm-12 b-b">
                      <div class="el-tablo centered padded-v">
                        <div class="value" style="font-size: 18px;"> <?php echo $obj_customer->created_at!=""?formato_fecha_barras($obj_customer->created_at):"-";?> </div>
                        <div class="label"> Fecha de Activación </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-8 col-md-7">
            <div class="element-wrapper">
              <div class="element-box">
                <div class="element-info">
                  <div class="element-info-with-icon">
                    <div class="element-info-icon">
                      <div class="os-icon os-icon-edit-1"></div>
                    </div>
                    <div class="element-info-text">
                      <h5 class="element-inner-header"> Información Editable </h5>
                      <div class="element-inner-desc"> Seleccione la categoría abajo para editar </div>
                    </div>
                  </div>
                  <ul class="nav nav-tabs" style="padding: 20px;">
                    <li class="nav-item" style="cursor: pointer;"> 
                        <a id="show_wallet" class="nav-link active show" align="center">Billetera BTC</a> 
                    </li>
                    <li class="nav-item" style="cursor: pointer;"> 
                        <a id="show_pass" class="nav-link" align="center">Contraseña</a>                      
                    </li>
                  </ul>
                  <div class="body" style="margin-top: 30px;">
                    <div id="show_wallet_div">
                        <form class="form-horizontal" enctype="multipart/form-data" action="javascript:void(0);"> 
                            <div class="form-group"> 
                                <label class="control-label"> Su hash de recibimiento </label> 
                                <input type="text" name="wallet" id="wallet" class="form-control">
                              <p>* Verificar los datos de recibimiento debido a que es bajo su responzabilidad.</p>
                            </div>
                                <div class="form-group">
                                  <div class="col-lg-12" align="right"> 
                                      <button class="mr-2 mb-2 btn btn-success" onclick="change_wallet();" style="margin-top: 30px;">Cambiar billetera de cobro <i class="os-icon os-icon-grid-18"></i></button>        
                                  </div>
                                </div>
                          </form>
                    </div> 
                      <div id="show_pass_div" style="display:none;">
                          <form role="form" class="form-horizontal " onsubmit="" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <div class="col-lg-12"> 
                                  <label class="control-label">Contraseña Actual</label> 
                                  <input type="password" name="current_password" id="current_password" class="form-control">        
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-lg-12"> 
                                  <label class="control-label">Nueva Contraseña</label> 
                                  <input type="password" name="new_password" id="new_password" class="form-control"> 
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-lg-12"> 
                                  <label class="control-label">Confirme Nueva Contraseña</label> 
                                  <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control"> 
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-lg-12" align="right"> 
                                  <button class="mr-2 mb-2 btn btn-success" onclick="change_pass();">Actualizar Contraseña</button> 
                              </div>
                            </div>
                          </form>
                        </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#show_wallet").click(function(){
    $("#show_pass_div").hide(1000);
    $("#show_wallet_div").show(1000);
  });
  
  $("#show_pass").click(function(){
    $("#show_wallet_div").hide(1000);
    $("#show_pass_div").show(1000);
  });
  
});
</script>
<script src='<?php echo site_url().'static/page_front/js/script/profile.js';?>'></script>


