<script src="static/cms/js/core/bootstrap-modal.js"></script>
<script src="static/cms/js/core/bootbox.min.js"></script>
<script src="static/cms/js/core/jquery-1.11.1.min.js"></script>
<script src="static/cms/js/core/jquery.dataTables.min.js"></script>
<link href="static/cms/css/core/jquery.dataTables.css" rel="stylesheet"/>

<!-- main content -->
<div id="main_content" class="span9">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                    <div class="navbar navbar-static navbar_as_heading">
                            <div class="navbar-inner">
                                    <div class="container" style="width: auto;">
                                            <a class="brand">Listado de Videos</a>
                                            <button class="btn btn-small" onclick="new_video();"><i class="fa fa-plus-square"></i> Nuevo Video</button>
                                    </div>
                            </div>
                    </div>
                
             <!--<form>-->
                <div class="well nomargin" style="width: 100% !important;">
                    <!--- INCIO DE TABLA DE RE4GISTRO -->
                   <table id="table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Categoría</th>
                                <th>Modulo</th>
                                <th>Imagen</th>
                                <th>Video</th>
                                <th>Tipo</th>
                                <th>Activo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($obj_videos as $value): ?>
                                <tr>
                            <th align="center"><?php echo $value->video_id;?></th>
                            <td align="center"><?php echo str_to_first_capital($value->name);?></td>
                            <td align="center" style="color:#fff;" class="label-success"><?php echo str_to_first_capital($value->categoria);?></td>
                            <td align="center">
                                <?php if ($value->module == 1) {
                                    $valor = "Básico";
                                    $stilo = "label label-success";
                                }elseif($value->module == 2){
                                    $valor = "Intermedio";
                                    $stilo = "label label-info";
                                }else{
                                    $valor = "Avanzando";
                                    $stilo = "label label-important";
                                } ?>
                                <span class="<?php echo $stilo;?>"><?php echo $valor;?></span>
                            </td>
                            <td align="center"><img src='<?php echo site_url()."static/course/img/$value->img";?>' width="180"/></td>
                            <td align="center"><?php echo $value->video;?></td>
                            <td align="center" style="color:#fff;" class="label-info">
                                <?php if ($value->type_product == 1) {
                                    $valor = "Principal";
                                    $stilo = "label label-success";
                                }else{
                                    $valor = "Re-Consumos";
                                    $stilo = "label label-info";
                                } ?>
                                <span><?php echo $valor;?></span>
                            </td>
                            <td align="center">
                                <?php if ($value->active == 0) {
                                    $valor = "No Activo";
                                    $stilo = "label label-important";
                                }else{
                                    $valor = "Activo";
                                    $stilo = "label label-success";
                                } ?>
                                <span class="<?php echo $stilo;?>"><?php echo $valor;?></span>
                            </td>
                            <td>
                                <div class="operation">
                                        <div class="btn-group">
                                           <button class="btn btn-small" onclick="edit_videos('<?php echo $value->video_id;?>');"><i class="fa fa-edit"></i>  Editar</button>
                                        </div>
                                </div>
                            </td>
                        </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>
           <!--</form>-->         
        </div>
    </div>
</div><!-- main content -->
</div>
<script type="text/javascript">
   $(document).ready(function() {
    $('#table').dataTable( {
         "order": [[ 0, "desc" ]]
    } );
} );
</script>
<script src="<?php echo site_url();?>static/cms/js/videos.js"></script>
