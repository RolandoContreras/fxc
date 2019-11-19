<link href="<?php echo site_url();?>static/cms/css/uploadimg.css" rel="stylesheet" />
<script src="<?php echo site_url();?>static/cms/js/core/bootstrap-fileupload.js"></script>
<script src="static/cms/js/franchise.js"></script>
<form method="post" id="upload_form" enctype="multipart/form-data" action="<?php echo site_url()."dashboard/membresias/validate";?>">
<div id="main_content" class="span7">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                <div class="navbar navbar-static navbar_as_heading">
                        <div class="navbar-inner">
                                <div class="container" style="width: auto;">
                                        <a class="brand"></i> Formulario Membresias</a>
                                </div>
                        </div>
                </div>
              <input type="hidden" name="kit_id" id="kit_id" value="<?php echo isset($obj_kit)?$obj_kit->kit_id:"";?>">
              <strong>Nombre:</strong><br>              
              <input type="text" id="name" name="name" value="<?php echo isset($obj_kit->name)?$obj_kit->name:"";?>" class="input-xlarge-fluid" placeholder="Nombre">
              <br><br>
              <strong>Precio:</strong><br>   
              <input type="text" id="price" name="price" value="<?php echo isset($obj_kit->price)?$obj_kit->price:"";?>" class="input-xlarge-fluid" placeholder="Precio">
              <br><br>
              <strong>Puntos:</strong><br>   
              <input type="text" id="point" name="point" value="<?php echo isset($obj_kit->point)?$obj_kit->point:"";?>" class="input-xlarge-fluid" placeholder="Puntos">
              <br><br>
              <strong>Descripción:</strong><br>   
              <textarea class="form-control" name="description" id="" placeholder="Descripción" style="height: 200px;width: 100% !important" placeholder="Descripcion"><?php echo isset($obj_kit->description)?$obj_kit->description:"";?></textarea>
              <br><br>
              <?php 
              if(isset($obj_kit->kit_id)){ ?>
              <img src='<?php echo site_url()."static/backoffice/images/plan/$obj_kit->img";?>' width="100" />
              <input type="hidden" name="img2" id="img2" value="<?php echo isset($obj_kit)?$obj_kit->img:"";?>">
              <br><br>
              <?php } ?>
              
              <strong>Imagen:</strong><br>   
              <input type="file" value="Upload Imagen de Envio" name="image_file" id="image_file">
              <br><br>
              <div class="well nomargin" style="width: 200px;">
                  <div class="inner">
                  <strong>Estado:</strong>
                  <select name="active" id="active">
                                  <option value="">[ Seleccionar ]</option>
                                  <option value="0" <?php if(isset($obj_kit)){
                                      if($obj_kit->active == 0){ echo "selected";}
                                  }else{echo "";} ?>>Inactivo</option>
                                  <option value="1" <?php if(isset($obj_kit)){
                                      if($obj_kit->active == 1){ echo "selected";}
                                  }else{echo "";} ?>>Activo</option>
                      </select>
                  </div>
              </div>
              <div id="uploaded_image"></div>
              <br><br>
              <br><br>
              <div class="subnav nobg">
                    <button class="btn btn-danger btn-small pull-left" type="reset" onclick="cancel_kit();">Cancelar</button>  
                    <button type="submit" name="upload" id="upload" class="btn btn-primary btn-small pull-right"  type="submit">Guardar</button>
               </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
</form>
<script src="<?php echo site_url();?>static/cms/js/kit.js"></script>
