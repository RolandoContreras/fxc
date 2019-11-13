<div class="content-w">
  <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url().'backoffice';?>">Tablero</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0);">Red</a></li>
    <li class="breadcrumb-item"><span>Referidos Directos</span></li>
  </ul>
  <!-------------------- END - Breadcrumbs -------------------->
  <div class="content-i">
    <div class="content-box">
      <div class="element-wrapper col-xl-10">
        <h6 class="element-header"> Referidos Diretos </h6>
        <div class="col-12">
          <div class="row">
            <div class="col-3">
              <div class="row">
                <div class="col-md-6">
                  <div class="profile-tile">
                    <a class="profile-tile-box">
                        <div class="pt-avatar-w"> <img src="<?php echo site_url().'static/backoffice/images/plan/membership.png';?>"> </div>
                      <div class="pt-user-name"> <b><?php echo $obj_total->total_membership;?> Kits</b> <br> Membersgip </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="profile-tile">
                    <a class="profile-tile-box" href="#">
                      <div class="pt-avatar-w"> <img src="<?php echo site_url().'static/backoffice/images/plan/inicio.png';?>"> </div>
                      <div class="pt-user-name"> <b><?php echo $obj_total->total_inicio;?> Kits</b> <br> Inicio </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="row">
                <div class="col-md-6">
                  <div class="profile-tile">
                    <a class="profile-tile-box" href="#">
                      <div class="pt-avatar-w"> <img src="<?php echo site_url().'static/backoffice/images/plan/apertura.png';?>"> </div>
                      <div class="pt-user-name"> <b><?php echo $obj_total->total_apertura;?> Kits</b> <br> Apertura </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="profile-tile">
                    <a class="profile-tile-box" href="#">
                      <div class="pt-avatar-w"> <img src="<?php echo site_url().'static/backoffice/images/plan/apertura_elite.png';?>"> </div>
                      <div class="pt-user-name"> <b><?php echo $obj_total->total_elite;?> Kits</b> <br> Elite </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="row">
                <div class="col-md-12">
                  <div class="profile-tile">
                    <a class="profile-tile-box" href="#">
                      <div class="pt-avatar-w"> <img src="<?php echo site_url().'static/backoffice/images/plan/apertura_premium.png';?>"> </div>
                      <div class="pt-user-name"> <b><?php echo $obj_total->total_premium;?> Kits</b> <br> Premium </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div class="element-box-tp">
          <div class="table-responsive" style="overflow-x: auto;">
            <table class="table table-padded table-condensed">
              <thead>
                <tr>
                  <th class="text-center"> Nombre y <br>Usuario </th>
                  <th class="text-center"> Datos de<br>  Contacto</th>
                  <th class="text-center"> Plan <br> </th>
                  <th class="text-center"> Fecha de<br>Registro </th>
                  <th class="text-center"> Fecha de<br>Activación </th>
                  <th class="text-center"> Estado </th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  foreach ($obj_referidos as $value) { ?>
                        <tr>
                              <td class="text-center"> <span class="smaller lighter"><?php echo $value->first_name." ".$value->last_name?></span> <br> <span><b><?php echo "@".$value->username;?></b></span> </td>
                              <td class="text-center"> <?php echo $value->phone;?> <br> <span class="lighter"><?php echo $value->email;?></span> </td>
                              <td class="text-center"> <span>
                                      <?php 
                                      switch ($value->kit_id) {
                                          case 1:
                                                echo "Membership";    
                                              break;
                                          case 2:
                                                echo "Inicio";    
                                              break;
                                          case 3:
                                                echo "Apertura";    
                                              break;
                                          case 4:
                                               echo "Elite"; 
                                              break;
                                          case 5:
                                              echo "Premium";   
                                              break;
                                          default:
                                              echo "-";   
                                              break;
                                      }
                                      ?>
                                  </span> <br> <span class="smaller lighter"> Actual </span> </td>
                              <td class="text-center"> <span>  <?php echo formato_fecha_barras($value->created_at);?></span><br> <span class="smaller lighter"><?php echo formato_fecha_minutos($value->created_at);?> <i class="far fa-clock"></i></span> </td>
                              <td class="text-center"> <span>  <?php echo $value->date_start==""?"-": formato_fecha_barras($value->date_start);?></span><br> <span class="smaller lighter"><?php echo formato_fecha_minutos($value->date_start);?> <i class="far fa-clock"></i></span> </td>
                              <td class="row-actions"> 
                                <div class="btn-group mb-2"> 
                                    <?php 
                                    if($value->active == 1){ ?>
                                            <a class="badge badge-success">Activo</a>
                                    <?php }else{ ?>
                                            <a class="badge badge-danger">Inativo</a> 
                                    <?php } ?>
                                </div>
                              </td>
                        </tr>
                  <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
<!--        <div class="col-md-12" style="margin: 10px auto;">
          <ul class="pagination">
            <li class="page-item disabled"><span class="page-link">«</span></li>
            <li class="page-item active"><span class="page-link">1</span></li>
            <li class="page-item"><a class="page-link" href="https://18kworld.com/bo/network/directs/62208?page=2">2</a></li>
            <li class="page-item"><a class="page-link" href="https://18kworld.com/bo/network/directs/62208?page=2" rel="next">»</a></li>
          </ul>
        </div>-->
      </div>
      <form method="post" id="formConfirmInvoice" action="" onsubmit="return sendWithValidation($(this));"> <input type="hidden" name="cofirm_invoice_id" id="cofirm_invoice_id" value="sss"> <input type="hidden" name="_token" value="VHHrXR8gvwphmQbkUhdNaQvjXNOYIYmGYF3DyXyk">        </form>
    </div>
    <!-------------------- START - Sidebar -------------------->
    <!-- <div class="content-panel compact color-scheme-dark" id="crypto-panel" style="display:none; position: absolute; right: 0; max-width: 390px; top: 50px; z-index: 1000"> <div class="element-wrapper compact"> </div> <div class="element-wrapper compact"> <div class="element-actions actions-only"><a class="element-action element-action-fold" href="#"><i class="os-icon os-icon-minus-circle"></i></a></div> <h6 class="element-header">Operações do dia</h6> <div class="element-box-tp"> <div class="element-balances justify-content-between mobile-full-width"> <div class="balance balance-v2" data-placement="top" data-toggle="tooltip" title="" data-original-title="Rentabilidade bruta apurada pela empresa durante as operações das exatas últimas 24 horas."> <div class="balance-title">Delta de arbitragem (24h) <i class="far fa-question-circle"></i></div> <div class="balance-value"> <span class="d-xxl-inline-block" id="deltaAb">0.0%</span> </div> </div> </div> <div class="todo-list"> <a class="todo-item"> <div class="ti-info" style="width: 100%;"> <div class="ti-header"> <span style="display: none;" id="secondsOrderBook">300</span> Atualizando em <span id="timeOrderBook">5:00</span> </div> <div class="os-progress-bar primary mb-2"> <div class="bar-level-1" style="width: 90%"> <div class="bar-level-2" style="width: 100%; background-color: #00000047; height: 10px !important"> <div class="bar-level-3" id="progressOrderBook" style="width: 100%; background: linear-gradient(-270deg, #505be4 0%, #21defd 98%) !important; height: 10px !important"></div> </div> </div> </div> </div> <div class="ti-icon"><i class="far fa-clock"></i></div> </a> <a class="todo-item"> <div class="ti-info"> <div class="ti-header">Ultima operação realizada</div> <div class="ti-sub-header" id="lastOrderTime">09:44:15 [2019/10/23]</div> </div> <div class="ti-icon"><i class="os-icon os-icon-check"></i></div> </a> </div> </div> </div> <div class="element-wrapper compact"> <div class="element-actions actions-only"> <a class="element-action element-action-fold" href="#"><i class="os-icon os-icon-minus-circle"></i></a> </div> <h6 class="element-header mb-2"> Histórico de Operações </h6> <div class="element-box-tp" id="orderbook"> <table class="table table-compact smaller text-faded mb-0"> <thead> <tr> <th> Exchange </th> <th class="text-center"> Valor </th> <th class="text-right"> Quantidade </th> <th class="text-right"> Profit </th> </tr> </thead> <tbody> <tr> <td> CoinbasePro </td> <td class="text-center text-success"> $ 7586.86 </td> <td class="text-right text-bright"> 0.04494034 <i style="font-size: 7px">BTC</i> </td> <td class="text-right text-bright"> 0.00043586 <i style="font-size: 7px">BTC</i> </td> </tr> <tr> <td> HitBtc </td> <td class="text-center text-danger"> $ 7905.61 </td> <td class="text-right text-bright"> 0.11 <i style="font-size: 7px">BTC</i> </td> <td class="text-right text-bright"> 0.00106627 <i style="font-size: 7px">BTC</i> </td> </tr> <tr> <td> Bitstamp </td> <td class="text-center text-success"> $ 7911.27 </td> <td class="text-right text-bright"> 0.03 <i style="font-size: 7px">BTC</i> </td> <td class="text-right text-bright"> 0.00013424 <i style="font-size: 7px">BTC</i> </td> </tr> <tr> <td> Huobi </td> <td class="text-center text-success"> $ 7927.48 </td> <td class="text-right text-bright"> 0.849999 <i style="font-size: 7px">BTC</i> </td> <td class="text-right text-bright"> 0.00794529 <i style="font-size: 7px">BTC</i> </td> </tr> <tr> <td> Bittrex </td> <td class="text-center text-success"> $ 7929.40 </td> <td class="text-right text-bright"> 0.39064854 <i style="font-size: 7px">BTC</i> </td> <td class="text-right text-bright"> 0.00286887 <i style="font-size: 7px">BTC</i> </td> </tr> <tr> <td> Bitfinex </td> <td class="text-center text-danger"> $ 7962.40 </td> <td class="text-right text-bright"> 2.41364196 <i style="font-size: 7px">BTC</i> </td> <td class="text-right text-bright"> 0.01497593 <i style="font-size: 7px">BTC</i> </td> </tr> <tr> <td> Gemini </td> <td class="text-center text-danger"> $ 7935.57 </td> <td class="text-right text-bright"> 0.70 <i style="font-size: 7px">BTC</i> </td> <td class="text-right text-bright"> 0.00055300 <i style="font-size: 7px">BTC</i> </td> </tr> <tr> <td> Gemini </td> <td class="text-center text-success"> $ 7937.76 </td> <td class="text-right text-bright"> 0.08796872 <i style="font-size: 7px">BTC</i> </td> <td class="text-right text-bright"> 0.00017100 <i style="font-size: 7px">BTC</i> </td> </tr> <tr> <td> HitBtc </td> <td class="text-center text-success"> $ 7943.00 </td> <td class="text-right text-bright"> 0.00001 <i style="font-size: 7px">BTC</i> </td> <td class="text-right text-bright"> 0.00000010 <i style="font-size: 7px">BTC</i> </td> </tr> <tr> <td> Bitstamp </td> <td class="text-center text-danger"> $ 7949.99 </td> <td class="text-right text-bright"> 1.14614601 <i style="font-size: 7px">BTC</i> </td> <td class="text-right text-bright"> 0.00113127 <i style="font-size: 7px">BTC</i> </td> </tr> </tbody></table> </div> <canvas height="150px" width="350px" id="lineChart"></canvas> <div style="margin-bottom: 10px;"></div> <div class="row pl-2"> <div class="col-6 m-0 p-0 text-center"> <div class="transparent-box" align="center"> <canvas id="pagoDLDiaAnterior" width="140px" height="130px"></canvas> <small id="pagoDLDiaAnteriorLegend" class="profit-resume"></small> <br> <small class="profit-sub">Delta (Last day)</small> </div> </div> <div class="col-6 m-0 p-0 text-center"> <div class="transparent-box" align="center"> <canvas id="pagoDL7Dias" width="140px" height="130px"></canvas> <small id="pagoDL7DiasLegend" class="profit-resume"></small> <br> <small class="profit-sub">Delta (7 days)</small> </div> </div> </div> <style> .transparent-box { background: #0000004a; border-radius: 5px; padding: 10px !important; margin: 10px; } .profit-sub { background: #000000e0; border-radius: 5px; padding: 5px 10px; color: #69cb5e; } .profit-resume { font-size: 25px !important; font-weight: 100; color: #fff; } </style> <div class="row pl-2"> <div class="col-6 m-0 p-0 text-center"> <div class="transparent-box" align="center"> <canvas id="pagoDL30Dias" width="140px" height="130px"></canvas> <small id="pagoDL30DiasLegend" class="profit-resume"></small> <br> <small class="profit-sub">Delta (30 days)</small> </div> </div> <div class="col-6 m-0 p-0 text-center"> </div> </div> </div> <hr style="border-top: 1px dashed #ffffff59;"> <div class="aec-full-message-w"> <div class="message-head"> <div class="user-w with-status status-green"> <div class="user-avatar"><i class="fas fa-exclamation-circle" style="font-size: 50px;"></i></div> <div class="user-name"> <h6 class="user-title" style="color: #f5d315;">Aviso Legal</h6> <div class="user-role">As informações exibidas acima são o espelhamento e resumo de operações realizadas em multiplas plataformas de operações pela 18k Ronaldinho em tempo real.</div> </div> </div> </div> </div> <div class="element-wrapper compact"> </div></div> -->
    <!-------------------- END - Sidebar -------------------->
  </div>
</div>