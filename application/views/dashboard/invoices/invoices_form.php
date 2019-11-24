<link href="<?php echo site_url();?>static/cms/css/uploadimg.css" rel="stylesheet" />
<script src="<?php echo site_url();?>static/cms/js/core/bootstrap-fileupload.js"></script>
<script src="<?php echo site_url();?>static/cms/js/customer.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- main content -->

<form id="customer-form" name="customer-form" enctype="multipart/form-data" method="post" action="<?php echo site_url()."dashboard/facturas/validate";?>">
<div id="main_content" class="span7">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                <div class="navbar navbar-static navbar_as_heading">
                        <div class="navbar-inner">
                                <div class="container" style="width: auto;">
                                        <a class="brand"></i> Formulario de Facturas</a>
                                </div>
                        </div>
                </div>
                <!--GET CUSTOMER ID-->
                <input type="hidden" name="invoice_id" id="invoice_id" value="<?php echo isset($obj_invoices)?$obj_invoices->invoice_id:"";?>">
              
                <div class="well nomargin" style="width: 600px;">
                    <div class="inner">
                    <strong>Paquete:</strong>
                            <select name="kit" id="kit">
                                <option value="">[ Seleccionar ]</option>
                                    <?php foreach ($obj_kit as $value ): ?>
                                <option value="<?php echo $value->kit_id;?>"
                                    <?php 
                                            if(isset($obj_invoices->kit_id)){
                                                    if($obj_invoices->kit_id==$value->kit_id){
                                                        echo "selected";
                                                    }
                                            }else{
                                                      echo "";
                                            }

                                    ?>><?php echo $value->name;?>
                                </option>
                                    <?php endforeach; ?>
                            </select>
                    </div>
                    <br/>
                    <div class="inner">
                    <strong>Precio:</strong>
                    <select name="price" id="price" disabled="">
                                <option value="price" disabled="" selected=""><?php echo $obj_invoices->price;?></option>
                            </select>
                    </div>
                </div>
              <br><br>
              <strong>ID:</strong><br>
              <input type="text" id="invoice_id" name="invoice_id" value="<?php echo isset($obj_invoices->invoice_id)?$obj_invoices->invoice_id:"";?>" class="input-xlarge-fluid" placeholder="ID" disabled="">
              <br><br>
              <strong>Username:</strong><br>
              <input type="text" id="username" name="username" value="<?php echo isset($obj_invoices->username)?$obj_invoices->username:"";?>" class="input-xlarge-fluid" placeholder="Username" disabled="">
              <br><br>
              <strong>Cliente:</strong><br>
              <input type="text" id="customer" name="customer" value="<?php echo isset($obj_invoices->username)?$obj_invoices->first_name." ".$obj_invoices->last_name:"";?>" class="input-xlarge-fluid" placeholder="Cliente" disabled="">
              <br><br>
              <strong>Fecha: (YYYY-mm-dd)</strong><br>
              <input type="text" id="date" name="date" class="input-small-fluid" placeholder="YYYY/mm/dd" value="<?php echo isset($obj_invoices->date)?formato_fecha_db_time($obj_invoices->date):"";?>">
              <br><br>
              <?php 
              if(isset($obj_invoices->invoice_id)){ ?>
              <img src='<?php echo site_url()."static/backoffice/invoice/$obj_invoices->img";?>' width="100" />
              <input type="hidden" name="img2" id="img2" value="<?php echo isset($obj_invoices)?$obj_invoices->img:"";?>">
              <br><br>
              <?php } ?>
              
              <strong>Imagen:</strong><br>   
              <input type="file" value="Upload Imagen de Envio" name="image_file" id="image_file">
              <br><br>
                <div class="well nomargin" style="width: 200px;">
                  <div class="inner">
                  <strong>Tipo:</strong>
                  <select name="type" id="type" disabled="">
                                  <option value="1" <?php if(isset($obj_invoices)){
                                      if($obj_invoices->type == 1){ echo "selected";}
                                  }else{echo "";} ?>>Pago de Kit</option>
                      </select>
                  </div>
                </div>
                <br><br>
                <div class="well nomargin" style="width: 200px;">
                <div class="inner">
                <strong>Activo o Pagado:</strong>
                    <select name="active" id="active">
                                <option value="">[ Seleccionar ]</option>
                                <option value="0" <?php if(isset($obj_invoices)){
                                    if($obj_invoices->active == 0){ echo "selected";}
                                }else{echo "";} ?>>Esperando Activación</option>
                                <option value="1" <?php if(isset($obj_invoices)){
                                    if($obj_invoices->active == 1){ echo "selected";}
                                }else{echo "";} ?>>Procesado</option>
                                <option value="2" <?php if(isset($obj_invoices)){
                                    if($obj_invoices->active == 2){ echo "selected";}
                                }else{echo "";} ?>>Cancelado</option>
                    </select>
                </div>
                </div>
                <br><br>
                <div class="subnav nobg">
                    <button class="btn btn-danger btn-small pull-left" type="reset" onclick="cancelar_invoice();">Cancelar</button>                    
                    <button class="btn btn-primary btn-small pull-right"  type="submit">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
</form>
<script src="static/cms/js/invoices.js"></script>