<div class="content-w">
  <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url().'backoffice';?>">Tablero</a></li>
    <li class="breadcrumb-item"><span>Hisorial Financiero</span></li>
  </ul>
  <div class="content-i">
    <div class="content-box">
      <div class="row">
        <div class="col-md-4">
          <div class="element-wrapper" style="padding-bottom: 0;">
            <h6 class="element-header">Historial Financiero <small class="text-muted">Detalle de Ganancias</small> </h6>
          </div>
          <div class="element-box">
            <div class="os-tabs-w">
              <div class="os-tabs-controls">
                <ul class="nav nav-tabs smaller">
                  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tab_overview">Financeiro</a> </li>
                </ul>
                <ul class="nav nav-pills smaller">
                  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#">7 dias</a> </li>
                </ul>
              </div>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_overview">
                  <div class="el-tablo">
                    <div class="label"> Total em ganhos </div>
                    <div class="value" id="bonustotal">US$ 532.82</div>
                  </div>
                  <div class="el-chart-w">
                    <div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor">
                      <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                      </div>
                      <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                      </div>
                    </div> <canvas height="125" id="totalGanhosChart" width="444" style="display: block; width: 444px; height: 125px;" class="chartjs-render-monitor"></canvas>                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="element-wrapper">
            <h6 class="element-header">Historial Financiero <small class="text-muted">Detalle de Ganancias</small> </h6>
            <div class="row">
              <div class="col-md-6">
                <a class="element-box el-tablo centered trend-in-corner smaller" style="border-radius: 4px; padding: 0.5rem 2rem;">
                  <div class="display-5" style="font-size: 30px;"> <span class="cash">$</span> <span id="totalInd">100,80</span> </div>
                  <div class="label"> Bônus de Indicação </div>
                </a>
              </div>
              <div class="col-md-6">
                <a class="element-box el-tablo centered trend-in-corner smaller" style="border-radius: 4px; padding: 0.5rem 2rem;">
                  <div class="display-5" style="font-size: 30px;"> <span class="cash">$</span> <span id="totalBin">312,00</span> </div>
                  <div class="label"> Bônus Binário </div>
                </a>
              </div>
              <div class="col-md-6">
                <a class="element-box el-tablo centered trend-in-corner smaller" style="border-radius: 4px; padding: 0.5rem 2rem;">
                  <div class="display-5" style="font-size: 30px;"> <span class="cash">$</span> <span id="totalDl">102,02</span> </div>
                  <div class="label"> Bônus Share </div>
                  <div class="trending trending-up"> <span>12%</span><i class="os-icon os-icon-arrow-up6"></i> </div>
                </a>
              </div>
              <div class="col-md-6">
                <a class="element-box el-tablo centered trend-in-corner smaller" style="border-radius: 4px; padding: 0.5rem 2rem;">
                  <div class="display-5" style="font-size: 30px;"> <span class="cash">$</span> <span id="bonusResidual">0,00</span> </div>
                  <div class="label"> Bônus Residual </div>
                </a>
              </div>
              <div class="col-md-6">
                <a class="element-box el-tablo centered trend-in-corner smaller" style="border-radius: 4px; padding: 0.5rem 2rem;">
                  <div class="display-5" style="font-size: 30px;"> <span class="cash">$</span> <span id="totalMatch">0,00</span> </div>
                  <div class="label"> Matching Bônus </div>
                </a>
              </div>
              <div class="col-md-6">
                <a class="element-box el-tablo centered trend-in-corner smaller" style="border-radius: 4px; padding: 0.5rem 2rem;">
                  <div class="display-5" style="font-size: 30px;"> <span class="cash">$</span> <span id="totalAward">0,00</span> </div>
                  <div class="label"> Plano de Carreira </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="element-wrapper">
            <h6 class="element-header">Histórico financeiro <small class="text-muted">Detalhamento de Ganhos</small> </h6>
            <div class="element-box">
              <div class="controls-above-table">
                <div class="row">
                  <div class="col-sm-6">
                    <form method="get">
                      <div class="form-group"> <label for="extrato_periodo"> <b>Extrato do Período</b> </label>
                        <div class="form-inline"> <input class="form-control form-control-sm" readonly="" id="extrato_periodo" type="text" value="11/01/2019 - 12/01/2019" style="width: auto;">                          <button type="submit" class="btn btn-primary"> Pesquisar </button> <input type="hidden" name="fromDate" id="fromDate" value="11/01/2019">                          <input type="hidden" name="toDate" id="toDate" value="12/01/2019"> </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-------------------- END - Controls Above Table -------------------->
              <div class="table-responsive">
                <!-------------------- START - Basic Table -------------------->
                <div id="financial_history_wrapper" class="dataTables_wrapper">
                  <div class="dataTables_length" id="financial_history_length" style="width:70%">
                    <div class="col-md-11">
                      <form class="form-inline">
                        <div class="col-md-4">
                          <div class="form-group"><label>De:</label><input type="date" id="date_min" class="form-control" value="11/01/2019"></div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group"><label>Até:</label><input type="date" id="date_max" value="12/01/2019" class="form-control"></div>
                        </div>
                        <div class="col-md-4"><button type="submit" class="btn btn-primary" onclick="reloadTable()">Pesquisar</button></div>
                      </form>
                    </div>
                  </div>
                  <div id="financial_history_filter" class="dataTables_filter"><label>Pesquisar<input type="search" class="" placeholder="" aria-controls="financial_history"></label></div>
                  <div id="financial_history_processing"
                    class="dataTables_processing" style="display: none;">Processando...</div>
                  <table class="table table-padded dataTable" id="financial_history" role="grid" aria-describedby="financial_history_info"
                    style="width: 952px;">
                    <thead>
                      <tr role="row">
                        <th class="text-center sorting_desc" tabindex="0" aria-controls="financial_history" rowspan="1" colspan="1" style="width: 137.4px;"
                          aria-sort="descending" aria-label=" ID : Ordenar colunas de forma ascendente"> ID </th>
                        <th class="text-center sorting" tabindex="0" aria-controls="financial_history" rowspan="1" colspan="1" style="width: 152.4px;"
                          aria-label=" Usuárioremetente : Ordenar colunas de forma ascendente"> Usuário<br>remetente </th>
                        <th class="text-center sorting" tabindex="0" aria-controls="financial_history" rowspan="1" colspan="1"
                          style="width: 142.4px;" aria-label=" Tipo deentrada : Ordenar colunas de forma ascendente"> Tipo de<br>entrada </th>
                        <th class="text-center sorting" tabindex="0" aria-controls="financial_history" rowspan="1" colspan="1"
                          style="width: 141.4px;" aria-label=" Data ehorário : Ordenar colunas de forma ascendente"> Data e<br>horário </th>
                        <th class="text-center sorting" tabindex="0" aria-controls="financial_history" rowspan="1" colspan="1" style="width: 140.4px;"
                          aria-label=" Valortotal : Ordenar colunas de forma ascendente"> Valor<br>total </th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th class="text-center" rowspan="1" colspan="1">
                          <div class="form-group"><input type="text" class="form-control" placeholder="Busca" id="" "=" "></div></th><th class="text-center " rowspan="1
                              " colspan="1 "><div class="form-group "><input type="text " class="form-control " placeholder="Busca " usuárioremetente=" " "=""></div>
                        </th>
                        <th class="text-center" rowspan="1" colspan="1">
                          <div class="form-group"><input type="text" class="form-control" placeholder="Busca" tipo="" deentrada="" "=" "></div></th><th class="text-center
                              " rowspan="1 " colspan="1 "><div class="form-group "><input type="text " class="form-control " placeholder="Busca " data="
                              " ehorário=" " "=""></div>
                        </th>
                        <th class="text-right" rowspan="1" colspan="1">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Busca" valortotal="" "=" "></div></th></tr> </tfoot> <tbody> <tr role="row
                              " class="odd "><td class="sorting_1 "><span class="lighter ">8635626</span></td><td> <span class="smaller lighter
                              ">System</span> <br> <span><b>@Administrador</b></span></td><td>Share Bonus - 0.01%</td><td> <span>2019/11/08</span> <br> <span class="smaller lighter "> 00:00<i class="far fa-clock "></i></span></td><td><span class="badge badge-success-inverted
                              "> + 0,02</span></td></tr><tr role="row " class="even "><td class="sorting_1 "><span class="lighter ">8577823</span></td><td> <span class="smaller lighter
                              ">System</span> <br> <span><b>@Administrador</b></span></td><td>Share Bonus - 1.01%</td><td> <span>2019/10/16</span> <br> <span class="smaller lighter "> 00:00<i class="far fa-clock "></i></span></td><td><span class="badge badge-success-inverted
                              "> + 1,52</span></td></tr><tr role="row " class="odd "><td class="sorting_1 "><span class="lighter ">8523371</span></td><td> <span class="smaller lighter
                              ">System</span> <br> <span><b>@Administrador</b></span></td><td>Share Bonus - 1.02%</td><td> <span>2019/10/15</span> <br> <span class="smaller lighter "> 00:00<i class="far fa-clock "></i></span></td><td><span class="badge badge-success-inverted
                              "> + 1,53</span></td></tr><tr role="row " class="even "><td class="sorting_1 "><span class="lighter ">8464940</span></td><td> <span class="smaller lighter
                              ">System</span> <br> <span><b>@Administrador</b></span></td><td>Share Bonus - 1.07%</td><td> <span>2019/10/14</span> <br> <span class="smaller lighter "> 00:00<i class="far fa-clock "></i></span></td><td><span class="badge badge-success-inverted
                              "> + 1,61</span></td></tr><tr role="row " class="odd "><td class="sorting_1 "><span class="lighter ">8384702</span></td><td> <span class="smaller lighter
                              ">System</span> <br> <span><b>@Administrador</b></span></td><td>Share Bonus - 0.85%</td><td> <span>2019/10/11</span> <br> <span class="smaller lighter "> 00:00<i class="far fa-clock "></i></span></td><td><span class="badge badge-success-inverted
                              "> +US$ 1,28</span></td></tr><tr role="row " class="even "><td class="sorting_1 "><span class="lighter ">8323061</span></td><td> <span class="smaller lighter
                              ">System</span> <br> <span><b>@Administrador</b></span></td><td>Share Bonus - 0.9%</td><td> <span>2019/10/10</span> <br> <span class="smaller lighter "> 00:00<i class="far fa-clock "></i></span></td><td><span class="badge badge-success-inverted
                              "> +US$ 1,35</span></td></tr><tr role="row " class="odd "><td class="sorting_1 "><span class="lighter ">8250682</span></td><td> <span class="smaller lighter
                              ">System</span> <br> <span><b>@Administrador</b></span></td><td>Share Bonus - 0.849%</td><td> <span>2019/10/09</span> <br> <span class="smaller lighter "> 00:00<i class="far fa-clock "></i></span></td><td><span class="badge badge-success-inverted
                              "> +US$ 1,27</span></td></tr><tr role="row " class="even "><td class="sorting_1 "><span class="lighter ">8180057</span></td><td> <span class="smaller lighter
                              ">System</span> <br> <span><b>@Administrador</b></span></td><td>Share Bonus - 1.15%</td><td> <span>2019/10/08</span> <br> <span class="smaller lighter "> 00:00<i class="far fa-clock "></i></span></td><td><span class="badge badge-success-inverted
                              "> +US$ 1,72</span></td></tr><tr role="row " class="odd "><td class="sorting_1 "><span class="lighter ">8108144</span></td><td> <span class="smaller lighter
                              ">System</span> <br> <span><b>@Administrador</b></span></td><td>Share Bonus - 0.89%</td><td> <span>2019/10/07</span> <br> <span class="smaller lighter "> 00:00<i class="far fa-clock "></i></span></td><td><span class="badge badge-success-inverted
                              "> +US$ 1,34</span></td></tr><tr role="row " class="even "><td class="sorting_1 "><span class="lighter ">7993511</span></td><td> <span class="smaller lighter
                              ">System</span> <br> <span><b>@Administrador</b></span></td><td>Share Bonus - 0.89%</td><td> <span>2019/10/04</span> <br> <span class="smaller lighter "> 00:00<i class="far fa-clock "></i></span></td><td><span class="badge badge-success-inverted
                              "> +US$ 1,34</span></td></tr></tbody> </table><div class="dataTables_info " id="financial_history_info " role="status " aria-live="polite
                              ">Mostrando de 1 até 10 de 116 registros</div><div class="dataTables_paginate paging_simple_numbers " id="financial_history_paginate "><a class="btn btn-success previous disabled
                              " aria-controls="financial_history " data-dt-idx="0 " tabindex="0 " id="financial_history_previous ">Anterior</a><span><a class="btn btn-success
                              current " aria-controls="financial_history " data-dt-idx="1 " tabindex="0 ">1</a><a class="btn btn-success
                              " aria-controls="financial_history " data-dt-idx="2 " tabindex="0 ">2</a><a class="btn btn-success " aria-controls="financial_history
                              " data-dt-idx="3 " tabindex="0 ">3</a><a class="btn btn-success " aria-controls="financial_history " data-dt-idx="4 " tabindex="0
                              ">4</a><a class="btn btn-success " aria-controls="financial_history " data-dt-idx="5 " tabindex="0 ">5</a><span class="ellipsis
                              ">…</span><a class="btn btn-success " aria-controls="financial_history " data-dt-idx="6 " tabindex="0 ">12</a></span><a class="btn btn-success
                              next " aria-controls="financial_history " data-dt-idx="7 " tabindex="0 " id="financial_history_next
                              ">Próximo</a></div></div> </div> </div> </div> </div> </div> </div> </div> 
</div>