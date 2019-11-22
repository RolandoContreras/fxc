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
                                            <a class="brand">LISTADO DE  FACTURAS</a>
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
                                <th>PAQUETE</th>
                                <th>FECHA</th>
                                <th>ESTADO</th> 
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php foreach ($obj_invoices as $value): ?>
                                <td align="center"><?php echo $value->invoice_id;?></td>
                                <td align="center" style="color:#fff;" class="label-info"><b><?php echo "@".$value->username;?></b></td>
                                <td align="center"><?php echo $value->first_name." ".$value->last_name;?></td>
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
                                                    <button class="btn btn-small" onclick="edit_invoices('<?php echo $value->invoice_id;?>');"><i class="fa fa-edit"></i> Editar</button>
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
<script src="static/cms/js/invoices.js"></script>