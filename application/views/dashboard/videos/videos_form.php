<script src="static/cms/js/videos.js"></script>
<form id="customer-form" name="points-binary-form" enctype="multipart/form-data" method="post" action="<?php echo site_url()."dashboard/videos/validate";?>">
<div id="main_content" class="span7">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                <div class="navbar navbar-static navbar_as_heading">
                        <div class="navbar-inner">
                                <div class="container" style="width: auto;">
                                        <a class="brand"></i> Formulario de Videos</a>
                                </div>
                        </div>
                </div>
              <div class="well nomargin" style="width: 600px;">
                    <div class="inner">
                    <strong>Categoría:</strong>
                            <select name="category" id="category">
                                <option value="">[ Seleccionar ]</option>
                                    <?php foreach ($obj_category as $value ): ?>
                                <option value="<?php echo $value->category_id;?>"
                                    <?php 
                                            if(isset($obj_videos->category_id)){
                                                    if($obj_videos->category_id==$value->category_id){
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
                </div>  
              <?php 
               if(isset($obj_videos)){ ?>
                      <strong>ID:</strong><br>
                      <input type="text" value="<?php echo isset($obj_videos->video_id)?$obj_videos->video_id:"";?>" class="input-xlarge-fluid" placeholder="ID" disabled="">
                      <input type="hidden" id="video_id" name="video_id" value="<?php echo isset($obj_videos->video_id)?$obj_videos->video_id:"";?>">
                      <br><br>
              <?php } ?>
              
              <strong>Título:</strong><br>
              <input type="text" id="name" name="name" value="<?php echo isset($obj_videos->name)?$obj_videos->name:"";?>" class="input-xlarge-fluid" placeholder="Titulo">
              <br><br>
              <strong>Sumilla:</strong><br>
              <textarea name="summary" id="summary" placeholder="Sumilla"><?php echo isset($obj_videos->summary)?$obj_videos->summary:"";?></textarea>
              <br><br>
              <strong>video:</strong><br>
              <input type="text" id="video" name="video" value="<?php echo isset($obj_videos->video)?$obj_videos->video:"";?>" class="input-xlarge-fluid" placeholder="Video">
              <br><br>
                  <strong>Módulo:</strong>
                        <select name="module" id="module">
                              <option value="">[ Seleccionar ]</option>
                              <option value="1" <?php if(isset($obj_videos)){
                                  if($obj_videos->module == 1){ echo "selected";}
                              }else{echo "";} ?>>Básico</option>
                              <option value="2" <?php if(isset($obj_kit)){
                                  if($obj_videos->module == 2){ echo "selected";}
                              }else{echo "";} ?>>Intermedio</option>
                              <option value="3" <?php if(isset($obj_kit)){
                                  if($obj_videos->module == 3){ echo "selected";}
                              }else{echo "";} ?>>Avanzado</option>
                      </select>
              <br><br>
                  <strong>Tipo:</strong>
                      <select name="type_product" id="type_product">
                              <option value="">[ Seleccionar ]</option>
                              <option value="1" <?php if(isset($obj_videos)){
                                  if($obj_videos->type_product == 1){ echo "selected";}
                              }else{echo "";} ?>>Principal</option>
                              <option value="2" <?php if(isset($obj_kit)){
                                  if($obj_videos->type_product == 2){ echo "selected";}
                              }else{echo "";} ?>>Re-Consumos</option>
                      </select>
              <br><br>
                  <strong>Estado:</strong>
                      <select name="active" id="active">
                                  <option value="">[ Seleccionar ]</option>
                                  <option value="1" <?php if(isset($obj_videos)){
                                      if($obj_videos->active == 1){ echo "selected";}
                                  }else{echo "";} ?>>Activo</option>
                                  <option value="0" <?php if(isset($obj_kit)){
                                      if($obj_videos->active == 0){ echo "selected";}
                                  }else{echo "";} ?>>Inactivo</option>
                      </select>
              <br><br>
              <div class="subnav nobg">
                    <button class="btn btn-danger btn-small pull-left" type="reset" onclick="cancel_video();">Cancelar</button>                    
                    <button class="btn btn-primary btn-small pull-right"  type="submit">Guardar</button>
               </div>   
               </div>
              </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
</form>
