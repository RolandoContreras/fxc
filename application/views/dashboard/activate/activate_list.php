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
                                            <a class="brand">LISTADO DE  ASOCIADOS</a>
                                    </div>
                            </div>
                    </div>
                
             <!--<form>-->
                <div class="well nomargin" style="width: 100%;">
                    <!--- INCIO DE TABLA DE RE4GISTRO -->
                   <table id="table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>USUARIO</th>
                                <th>CLIENTE</th>
                                <th>IMAGEN</th>
                                <th>PAQUETE</th>
                                <th>FECHA</th>
                                <th>ESTADO</th> 
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php foreach ($obj_invoices as $key => $value): ?>
                                <td align="center"><?php echo $value->invoice_id;?></td>
                                <td align="center" style="color:#fff;" class="label-info"><b><?php echo "@".$value->username;?></b></td>
                                <td align="center"><?php echo $value->first_name." ".$value->last_name;?></td>
                                <td align="center">
                                    <?php 
                                    if($value->img != ""){?>
                                    <img id="<?php echo $key;?>" onclick="modal_img(<?php echo $key;?>);" src='<?php echo site_url()."static/backoffice/invoice/$value->img";?>' width="40" alt="imagen" />
                                    <?php }else{
                                        echo "---";
                                    }
                                    ?>
                                </td>
                                <td align="center" style="color:#fff;" class="label-success"><?php echo $value->name;?></td>
                                <td align="center"><?php echo formato_fecha_barras($value->date);?></td>
                                <td align="center">
                                    <?php if ($value->active == 1) {
                                        $valor = "Esperando Activación";
                                        $stilo = "label label-info";
                                    }elseif($value->active == 2){
                                        $valor = "Procesado";
                                        $stilo = "label label-success";
                                    }else{
                                        $valor = "Cancelado";
                                        $stilo = "label label-important";
                                    }?>
                                    <span class="<?php echo $stilo ?>"><?php echo $valor;?></span>
                                </td>
                            
                                <td>
                                    <div class="operation">
                                        <div class="btn-group">
                                                    <button class="btn btn-small" onclick="active('<?php echo $value->invoice_id;?>');">Activar</button>
                                                    <button class="btn btn-small" onclick="active_financiada('<?php echo $value->invoice_id;?>','<?php echo $value->customer_id;?>','<?php echo $value->kit_id;?>');">Financiada</button>
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
<div id="myModal" class="modal" style="display:none">
  <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>
<script src="static/cms/js/active.js"></script>
<style>
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0;}
/* Caption of Modal Image */
/* Add Animation */
@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: black;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #aaa;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>