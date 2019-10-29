<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <!--DATOS PERSONALES-->
          <div class="col-lg-6">
            <div class="card">
                <div class="card-header"><strong>Datos</strong> Personales</div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                              <div class="col col-md-3">
                                  <label for="text-input" class=" form-control-label">Nombres</label>
                              </div>
                              <div class="col-12 col-md-9">
                                  <input type="text" id="name" name="name" class="input-sm form-control-sm form-control">
                              </div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Apellidos</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="last_name" name="last_name" class="input-sm form-control-sm form-control">
                            </div>
                          </div>
                            <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Email</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="email" name="email" class="input-sm form-control-sm form-control">
                            </div>
                          </div>
                            <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Cedula / DNI</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="dni" name="dni" class="input-sm form-control-sm form-control">
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
          <!--CONTRASEÑAS-->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header"><strong>Contraseña</strong></div>
            <div class="card-body card-block">
              <form action="" method="post" class="">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                    <input type="password" id="new_contraseña" name="new_contraseña" placeholder="Contraseña Actual" class="input-sm form-control-sm form-control"></div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                    <input type="password" id="new_contraseña" name="new_contraseña" placeholder="Nueva Contraseña" class="input-sm form-control-sm form-control"></div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                    <input type="password" id="new_contraseña_2" name="new_contraseña_2" placeholder="Confirme Nueva Contraseña" class="input-sm form-control-sm form-control">
                  </div>
                </div>
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-success btn-sm">Cambiar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--DATOS BANCARIOS-->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header"><strong>Datos</strong> Bancarios</div>
                  <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Nombre del Banco</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="text-input" placeholder="Ingrese Nombre" class="input-sm form-control-sm form-control ">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class="input-sm form-control-label">Número de Cuenta</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="text-input" placeholder="Ingrese Cuenta" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Código Interbancario</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="text-input" placeholder="Ingrese CCI" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Enviar</button>
                </div>
            </div>
        </div>
        <!--KYC-->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header"><strong>Verificación</strong> KYC</div>
            <div class="card-body card-block">
              <form action="" method="post" class="form-horizontal">
                <div class="row form-group">
                  <div class="col col-md-3"><label for="hf-email" class=" form-control-label">DNI /Cedula (Foto)</label></div>
                  <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="file-input" class="form-control-file">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Recibo de Servicios</label></div>
                  <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="file-input" class="form-control-file">
                  </div>
                </div>
              </form>
            </div>
            <div class="card-footer"><button type="submit" class="btn btn-success btn-sm"> <i class="fa fa-dot-circle-o"></i> Submit</button></div>
          </div>
        </div>
</div>
</div>
</div>
</div>