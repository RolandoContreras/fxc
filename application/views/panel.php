<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="m-b-10">Tablero</h5>
                </div>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a>Panel General</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="main-body">
          <div class="page-wrapper">
            <div class="row">
              <div class="col-md-12 col-xl-4">
                <div class="card user-card">
                  <div class="card-block">
                    <h5 class="m-b-15">Pagos Realizados</h5>
                    <h4 class="f-w-300 mb-3"><?php echo $obj_total->total_pay;?></h4><span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400"><?php echo $obj_pending->pending_pay;?></label> Pendientes</span></div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card user-card">
                  <div class="card-block">
                    <h5 class="f-w-400 m-b-15">Facturas</h5>
                    <h4 class="f-w-300 mb-3"><?php echo $obj_total->total_invoices;?></h4><span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400"><?php echo $obj_pending->pending_invoices;?></label> Pendientes</span></div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card user-card">
                  <div class="card-block">
                    <h5 class="f-w-400 m-b-15">Bonos</h5>
                    <h4 class="f-w-300 mb-3"><?php echo $obj_total->total_bonus;?></h4><span class="text-muted">Total</span></div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card user-card">
                  <div class="card-block">
                    <h5 class="f-w-400 m-b-15">Categorías</h5>
                    <h4 class="f-w-300 mb-3"><?php echo $obj_total->total_category;?></h4><span class="text-muted">Total</span></div>
                </div>
              </div>
             <div class="col-md-6 col-xl-4">
                <div class="card user-card">
                  <div class="card-block">
                    <h5 class="f-w-400 m-b-15">Kits</h5>
                    <h4 class="f-w-300 mb-3"><?php echo $obj_total->total_kit;?></h4><span class="text-muted">Total</span></div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card user-card">
                  <div class="card-block">
                    <h5 class="f-w-400 m-b-15">Rangos</h5>
                    <h4 class="f-w-300 mb-3"><?php echo $obj_total->total_ranges;?></h4><span class="text-muted">Total</span></div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card Active-visitor">
                  <div class="card-block text-center">
                    <h5 class="mb-3">Clientes</h5><i class="fas fa-user-friends f-30 text-c-green"></i>
                    <h2 class="f-w-300 mt-3"><?php echo format_number_miles($obj_total->total_customer);?></h2>
                    <div class="progress mt-4 m-b-40">
                      <div class="progress-bar progress-c-theme" role="progressbar" style="width: 75%; height:7px;" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                    <div class="row card-active">
                      <div class="col-md-4 col-6">
                        <h4>52%</h4><span class="text-muted">Pagados</span></div>
                      <div class="col-md-4 col-6">
                        <h4>80%</h4><span class="text-muted">Financiados</span></div>
                      <div class="col-md-4 col-12">
                        <h4>68%</h4><span class="text-muted">Posicionado</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5 class="mb-2">Age</h5>
                    <div class="card-header-right">
                      <div class="btn-group card-option"><button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></button>
                        <ul
                          class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                          <li
                            class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                            <li
                              class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                              <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                              </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-block">
                    <div id="Stack-age" class="Stackchart" style="height: 220px; overflow: hidden; text-align: left;">
                      <div style="position: relative;" class="amcharts-main-div">
                        <div style="overflow: hidden; position: relative; text-align: left; width: 456px; height: 220px; padding: 0px; touch-action: auto;"
                          class="amcharts-chart-div"><svg version="1.1" style="position: absolute; width: 456px; height: 220px; top: 0.0499878px; left: 0.333313px;"><desc>JavaScript chart by amCharts 3.21.5</desc><g><path cs="100,100" d="M0.5,0.5 L455.5,0.5 L455.5,219.5 L0.5,219.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path><path cs="100,100" d="M0.5,0.5 L408.5,0.5 L408.5,164.5 L0.5,164.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" transform="translate(27,20)"></path></g><g><g transform="translate(27,20)"></g><g transform="translate(27,20)" visibility="visible"></g></g><g transform="translate(27,20)" clip-path="url(#AmChartsEl-3)"><g visibility="hidden"></g></g><g></g><g></g><g></g><g><g transform="translate(27,20)"><g><g transform="translate(27,164)" visibility="visible" aria-label=" <20 30"><path cs="100,100" d="M0.5,0.5 L0.5,-40.5 L14.5,-40.5 L14.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-311)" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path><linearGradient id="AmChartsEl-311" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1de9b6"></stop><stop offset="100%" stop-color="#1dc4e9"></stop></linearGradient></g><g transform="translate(95,164)" visibility="visible" aria-label=" 30 35"><path cs="100,100" d="M0.5,0.5 L0.5,-81.5 L14.5,-81.5 L14.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-312)" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path><linearGradient id="AmChartsEl-312" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#899FD4"></stop><stop offset="100%" stop-color="#A389D4"></stop></linearGradient></g><g transform="translate(163,164)" visibility="visible" aria-label=" 40 40"><path cs="100,100" d="M0.5,0.5 L0.5,-122.5 L14.5,-122.5 L14.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-353)" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path><linearGradient id="AmChartsEl-353" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1de9b6"></stop><stop offset="100%" stop-color="#1dc4e9"></stop></linearGradient></g><g transform="translate(231,164)" visibility="visible" aria-label=" 50 30"><path cs="100,100" d="M0.5,0.5 L0.5,-40.5 L14.5,-40.5 L14.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-375)" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path><linearGradient id="AmChartsEl-375" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#899FD4"></stop><stop offset="100%" stop-color="#A389D4"></stop></linearGradient></g><g transform="translate(299,164)" visibility="visible" aria-label=" 60 32"><path cs="100,100" d="M0.5,0.5 L0.5,-56.5 L14.5,-56.5 L14.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-396)" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path><linearGradient id="AmChartsEl-396" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1de9b6"></stop><stop offset="100%" stop-color="#1dc4e9"></stop></linearGradient></g><g transform="translate(367,164)" visibility="visible" aria-label=" >70 38"><path cs="100,100" d="M0.5,0.5 L0.5,-106.5 L14.5,-106.5 L14.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-407)" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path><linearGradient id="AmChartsEl-407" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#899FD4"></stop><stop offset="100%" stop-color="#A389D4"></stop></linearGradient></g></g></g></g><g></g><g><g><path cs="100,100" d="M0.5,0.5 L408.5,0.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(27,184)"></path></g><g><path cs="100,100" d="M0.5,0.5 L0.5,164.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(27,20)" visibility="visible"></path></g></g><g><g transform="translate(27,20)" style="pointer-events: none;" clip-path="url(#AmChartsEl-4)"><path cs="100,100" d="M0.5,0.5 L0.5,0.5 L0.5,164.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" visibility="hidden"></path><path cs="100,100" d="M0.5,0.5 L408.5,0.5 L408.5,0.5" fill="none" stroke-width="1" stroke="#000000" visibility="hidden"></path></g><clipPath id="AmChartsEl-4"><rect x="0" y="0" width="408" height="164" rx="0" ry="0" stroke-width="0"></rect></clipPath></g><g></g><g><g transform="translate(27,20)"></g></g><g><g></g></g><g><g transform="translate(27,20)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(34,181.5)"><tspan y="6" x="0">&lt;20</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(102,181.5)"><tspan y="6" x="0">30</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(170,181.5)"><tspan y="6" x="0">40</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(238,181.5)"><tspan y="6" x="0">50</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(306,181.5)"><tspan y="6" x="0">60</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(374,181.5)"><tspan y="6" x="0">&gt;70</tspan></text></g><g transform="translate(27,20)" visibility="visible"><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="end" transform="translate(-12,164)"><tspan y="0" x="0">25</tspan></text><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="end" transform="translate(-12,123)"><tspan y="0" x="0">30</tspan></text><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="end" transform="translate(-12,82)"><tspan y="0" x="0">35</tspan></text><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="end" transform="translate(-12,41)"><tspan y="0" x="0">40</tspan></text><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="end" transform="translate(-12,0)"><tspan y="0" x="0">45</tspan></text></g></g><g></g><g transform="translate(27,20)"></g><g></g><g></g><clipPath id="AmChartsEl-3"><rect x="-1" y="-1" width="410" height="166" rx="0" ry="0" stroke-width="0"></rect></clipPath></svg>
                          <a
                            href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 32px; top: 25px;">JS chart by amCharts</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                
                
              <div class="col-md-12 col-xl-4">
                <div class="card theme-bg visitor">
                  <div class="card-block text-center">
                    <h5 class="text-white m-0">COMENTARIOS</h5>
                    <h3 class="text-white m-t-20 f-w-300"><?php echo $obj_total->total_comments;?></h3>
                    <span class="text-white"><?php echo $obj_pending->pending_comments;?> Pendientes</span></div>
                </div>
                <div class="card">
                  <div class="card-block">
                    <div class="row">
                      <div class="col"><i class="feather icon-shopping-cart f-30 text-c-green"></i>
                        <h6 class="m-t-50 m-b-0">Last week’s orders</h6>
                      </div>
                      <div class="col text-right">
                        <h3 class="text-c-green f-w-300">589</h3><span class="text-muted d-block">New Order</span><span class="badge theme-bg text-white m-t-20">1434</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Statistics</h5>
                    <div class="card-header-right">
                      <div class="btn-group card-option"><button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></button>
                        <ul
                          class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                          <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                          <li
                            class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                            <li
                              class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                              <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                              </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-block pb-0">
                    <div id="bar-chart2" class="bar-chart2" style="height: 330px; overflow: hidden; text-align: left;">
                      <div style="position: relative; width: 100%; height: 100%;" class="amcharts-main-div">
                        <div style="overflow: hidden; position: relative; text-align: left; width: 993px; height: 48px;" class="amChartsLegend amcharts-legend-div"><svg version="1.1" style="position: absolute; width: 993px; height: 48px;"><desc>JavaScript chart by amCharts 3.21.5</desc><g transform="translate(49,10)"><path cs="100,100" d="M0.5,0.5 L943.5,0.5 L943.5,37.5 L0.5,37.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path><g transform="translate(0,11)"><g cursor="pointer" aria-label="SALES" transform="translate(0,0)"><path cs="100,100" d="M-15.5,8.5 L16.5,8.5 L16.5,-7.5 L-15.5,-7.5 Z" fill="url(#AmChartsEl-16)" stroke="#1de9b6,#1dc4e9" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" transform="translate(16,8)"></path><linearGradient id="AmChartsEl-16" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1de9b6"></stop><stop offset="100%" stop-color="#1dc4e9"></stop></linearGradient><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(37,7)"><tspan y="6" x="0">SALES</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(140,7)"> </text><rect x="32" y="0" width="108" height="18" rx="0" ry="0" stroke-width="0" stroke="none" fill="#fff" fill-opacity="0.005"></rect></g><g cursor="pointer" aria-label="VISITS " transform="translate(157,0)"><path cs="100,100" d="M-15.5,8.5 L16.5,8.5 L16.5,-7.5 L-15.5,-7.5 Z" fill="url(#AmChartsEl-17)" stroke="#a389d4,#899ed4" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" transform="translate(16,8)"></path><linearGradient id="AmChartsEl-17" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#a389d4"></stop><stop offset="100%" stop-color="#899ed4"></stop></linearGradient><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(37,7)"><tspan y="6" x="0">VISITS </tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(140,7)"> </text><rect x="32" y="0" width="108" height="18" rx="0" ry="0" stroke-width="0" stroke="none" fill="#fff" fill-opacity="0.005"></rect></g><g cursor="pointer" aria-label="CLICKS" transform="translate(313,0)"><path cs="100,100" d="M-15.5,8.5 L16.5,8.5 L16.5,-7.5 L-15.5,-7.5 Z" fill="url(#AmChartsEl-18)" stroke="#04a9f5,#049df5" fill-opacity="1" stroke-width="1" stroke-opacity="0.9" transform="translate(16,8)"></path><linearGradient id="AmChartsEl-18" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#04a9f5"></stop><stop offset="100%" stop-color="#049df5"></stop></linearGradient><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(37,7)"><tspan y="6" x="0">CLICKS</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(140,7)"> </text><rect x="32" y="0" width="108" height="18" rx="0" ry="0" stroke-width="0" stroke="none" fill="#fff" fill-opacity="0.005"></rect></g></g></g></svg></div>
                        <div
                          style="overflow: hidden; position: relative; text-align: left; width: 993px; height: 282px; padding: 0px; touch-action: auto;"
                          class="amcharts-chart-div"><svg version="1.1" style="position: absolute; width: 993px; height: 282px; top: 0.0999756px; left: 0px;"><desc>JavaScript chart by amCharts 3.21.5</desc><g><path cs="100,100" d="M0.5,0.5 L992.5,0.5 L992.5,281.5 L0.5,281.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path><path cs="100,100" d="M0.5,0.5 L943.5,0.5 L943.5,236.5 L0.5,236.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" transform="translate(49,10)"></path></g><g><g transform="translate(49,10)"></g><g transform="translate(49,10)" visibility="visible"><g><path cs="100,100" d="M0.5,236.5 L0.5,236.5 L943.5,236.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,177.5 L0.5,177.5 L943.5,177.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,118.5 L0.5,118.5 L943.5,118.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,59.5 L0.5,59.5 L943.5,59.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,0.5 L0.5,0.5 L943.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g></g></g><g transform="translate(49,10)" clip-path="url(#AmChartsEl-19)"><g visibility="hidden"></g></g><g></g><g></g><g></g><g><g transform="translate(49,10)"><g><g transform="translate(83,236)" aria-label="SALES 2014 2"><path cs="100,100" d="M0.5,0.5 L0.5,-58.5 L20.5,-58.5 L20.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-21)" stroke="#1de9b6,#1dc4e9" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path><linearGradient id="AmChartsEl-21" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1de9b6"></stop><stop offset="100%" stop-color="#1dc4e9"></stop></linearGradient></g><g transform="translate(319,236)" aria-label="SALES 2015 4"><path cs="100,100" d="M0.5,0.5 L0.5,-117.5 L20.5,-117.5 L20.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-22)" stroke="#1de9b6,#1dc4e9" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path><linearGradient id="AmChartsEl-22" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1de9b6"></stop><stop offset="100%" stop-color="#1dc4e9"></stop></linearGradient></g><g transform="translate(554,236)" aria-label="SALES 2016 2"><path cs="100,100" d="M0.5,0.5 L0.5,-58.5 L20.5,-58.5 L20.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-23)" stroke="#1de9b6,#1dc4e9" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path><linearGradient id="AmChartsEl-23" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1de9b6"></stop><stop offset="100%" stop-color="#1dc4e9"></stop></linearGradient></g><g transform="translate(790,236)" aria-label="SALES 2017 4.5"><path cs="100,100" d="M0.5,0.5 L0.5,-132.5 L20.5,-132.5 L20.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-24)" stroke="#1de9b6,#1dc4e9" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path><linearGradient id="AmChartsEl-24" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1de9b6"></stop><stop offset="100%" stop-color="#1dc4e9"></stop></linearGradient></g></g></g><g transform="translate(49,10)"><g><g transform="translate(108,236)" aria-label="VISITS 2014 4"><path cs="100,100" d="M0.5,0.5 L0.5,-117.5 L20.5,-117.5 L20.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-25)" stroke="#a389d4,#899ed4" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path><linearGradient id="AmChartsEl-25" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#a389d4"></stop><stop offset="100%" stop-color="#899ed4"></stop></linearGradient></g><g transform="translate(344,236)" aria-label="VISITS 2015 7"><path cs="100,100" d="M0.5,0.5 L0.5,-205.5 L20.5,-205.5 L20.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-26)" stroke="#a389d4,#899ed4" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path><linearGradient id="AmChartsEl-26" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#a389d4"></stop><stop offset="100%" stop-color="#899ed4"></stop></linearGradient></g><g transform="translate(579,236)" aria-label="VISITS 2016 3"><path cs="100,100" d="M0.5,0.5 L0.5,-87.5 L20.5,-87.5 L20.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-27)" stroke="#a389d4,#899ed4" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path><linearGradient id="AmChartsEl-27" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#a389d4"></stop><stop offset="100%" stop-color="#899ed4"></stop></linearGradient></g><g transform="translate(815,236)" aria-label="VISITS 2017 6"><path cs="100,100" d="M0.5,0.5 L0.5,-176.5 L20.5,-176.5 L20.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-28)" stroke="#a389d4,#899ed4" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path><linearGradient id="AmChartsEl-28" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#a389d4"></stop><stop offset="100%" stop-color="#899ed4"></stop></linearGradient></g></g></g><g transform="translate(49,10)"><g><g transform="translate(133,236)" aria-label="CLICKS 2014 3"><path cs="100,100" d="M0.5,0.5 L0.5,-87.5 L20.5,-87.5 L20.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-29)" stroke="#04a9f5,#049df5" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path><linearGradient id="AmChartsEl-29" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#04a9f5"></stop><stop offset="100%" stop-color="#049df5"></stop></linearGradient></g><g transform="translate(369,236)" aria-label="CLICKS 2015 5"><path cs="100,100" d="M0.5,0.5 L0.5,-146.5 L20.5,-146.5 L20.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-30)" stroke="#04a9f5,#049df5" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path><linearGradient id="AmChartsEl-30" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#04a9f5"></stop><stop offset="100%" stop-color="#049df5"></stop></linearGradient></g><g transform="translate(604,236)" aria-label="CLICKS 2016 4"><path cs="100,100" d="M0.5,0.5 L0.5,-117.5 L20.5,-117.5 L20.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-31)" stroke="#04a9f5,#049df5" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path><linearGradient id="AmChartsEl-31" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#04a9f5"></stop><stop offset="100%" stop-color="#049df5"></stop></linearGradient></g><g transform="translate(840,236)" aria-label="CLICKS 2017 4"><path cs="100,100" d="M0.5,0.5 L0.5,-117.5 L20.5,-117.5 L20.5,0.5 L0.5,0.5 Z" fill="url(#AmChartsEl-32)" stroke="#04a9f5,#049df5" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path><linearGradient id="AmChartsEl-32" x1="0%" x2="0%" y1="100%" y2="0%"><stop offset="0%" stop-color="#04a9f5"></stop><stop offset="100%" stop-color="#049df5"></stop></linearGradient></g></g></g></g><g></g><g><path cs="100,100" d="M0.5,236.5 L943.5,236.5 L943.5,236.5" fill="none" stroke-width="1" stroke-opacity="0.2" stroke="#000000" transform="translate(49,10)"></path><g><path cs="100,100" d="M0.5,0.5 L943.5,0.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(49,246)"></path></g><g><path cs="100,100" d="M0.5,0.5 L0.5,236.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(49,10)" visibility="visible"></path></g></g><g><g transform="translate(49,10)" style="pointer-events: none;" clip-path="url(#AmChartsEl-20)"><path cs="100,100" d="M0.5,0.5 L0.5,0.5 L0.5,236.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" visibility="hidden"></path><path cs="100,100" d="M0.5,0.5 L943.5,0.5 L943.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.2" stroke="#000000" visibility="hidden"></path></g><clipPath id="AmChartsEl-20"><rect x="0" y="0" width="943" height="236" rx="0" ry="0" stroke-width="0"></rect></clipPath></g><g></g><g><g transform="translate(49,10)"></g><g transform="translate(49,10)"></g><g transform="translate(49,10)"></g></g><g><g></g></g><g><g transform="translate(49,10)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(118,253.5)"><tspan y="6" x="0">2014</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(354,253.5)"><tspan y="6" x="0">2015</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(589,253.5)"><tspan y="6" x="0">2016</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(825,253.5)"><tspan y="6" x="0">2017</tspan></text></g><g transform="translate(49,10)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,235)"><tspan y="6" x="0">000</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,176)"><tspan y="6" x="0">200</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,117)"><tspan y="6" x="0">400</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,58)"><tspan y="6" x="0">600</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,-1)"><tspan y="6" x="0">800</tspan></text></g></g><g></g><g transform="translate(49,10)"></g><g></g><g></g><clipPath id="AmChartsEl-19"><rect x="-1" y="-1" width="945" height="238" rx="0" ry="0" stroke-width="0"></rect></clipPath></svg>
                          <a
                            href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 54px; top: 15px;">JS chart by amCharts</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-xl-4">
              <div class="card bg-c-blue">
                <div class="card-header borderless">
                  <h5 class="text-white">Statistics</h5>
                </div>
                <div class="card-block">
                  <div id="Statistics-sale" class="last-week-sales" style="height: 300px; overflow: hidden; text-align: left;">
                    <div style="position: relative;" class="amcharts-main-div">
                      <div style="overflow: hidden; position: relative; text-align: left; width: 456px; height: 300px; padding: 0px; touch-action: auto;"
                        class="amcharts-chart-div"><svg version="1.1" style="position: absolute; width: 456px; height: 300px; top: 0.0999756px; left: -0.333374px;"><desc>JavaScript chart by amCharts 3.21.5</desc><defs><filter id="shadow" width="150%" height="150%"><feOffset result="offOut" in="SourceAlpha" dx="2" dy="2"></feOffset><feGaussianBlur result="blurOut" in="offOut" stdDeviation="10"></feGaussianBlur><feColorMatrix result="blurOut" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0"></feColorMatrix><feBlend in="SourceGraphic" in2="blurOut" mode="normal"></feBlend></filter></defs><g><path cs="100,100" d="M0.5,0.5 L455.5,0.5 L455.5,299.5 L0.5,299.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-bg"></path><path cs="100,100" d="M0.5,0.5 L455.5,0.5 L455.5,269.5 L0.5,269.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-plot-area" transform="translate(0,10)"></path></g><g><g class="amcharts-category-axis" transform="translate(0,10)"></g><g class="amcharts-value-axis value-axis-valueAxisAuto0_1575671249129" transform="translate(0,10)" visibility="visible"></g></g><g transform="translate(0,10)" clip-path="url(#AmChartsEl-33)"><g visibility="hidden"><g transform="translate(0,0)" visibility="hidden"><rect x="0.5" y="0.5" width="152" height="269" rx="0" ry="0" stroke-width="1" fill="#fff" stroke="#fff" fill-opacity="1" stroke-opacity="1" class="amcharts-cursor-fill" transform="translate(-77,0)"></rect></g></g></g><g></g><g></g><g></g><g><g transform="translate(0,10)" class="amcharts-graph-line amcharts-graph-g3"><g></g><g clip-path="url(#AmChartsEl-35)"><path cs="100,100" d="M76.5,121.55 L228.5,161.9 L379.5,135 M0,0 L0,0" fill="none" stroke-width="3" stroke-opacity="1" stroke="#FFFFFF" stroke-linejoin="round" class="amcharts-graph-stroke"></path></g><clipPath id="AmChartsEl-35"><rect x="0" y="0" width="455" height="269" rx="0" ry="0" stroke-width="0"></rect></clipPath><g></g></g></g><g></g><g><path cs="100,100" d="M0.5,269.5 L455.5,269.5 L455.5,269.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(0,10)" class="amcharts-axis-zero-grid-valueAxisAuto0_1575671249129 amcharts-axis-zero-grid"></path><g class="amcharts-category-axis"><path cs="100,100" d="M0.5,0.5 L455.5,0.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(0,279)" class="amcharts-axis-line"></path></g><g class="amcharts-value-axis value-axis-valueAxisAuto0_1575671249129"><path cs="100,100" d="M0.5,0.5 L0.5,269.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(0,10)" class="amcharts-axis-line" visibility="visible"></path></g></g><g><g transform="translate(0,10)" style="pointer-events: none;" clip-path="url(#AmChartsEl-34)"><path cs="100,100" d="M0.5,0.5 L455.5,0.5 L455.5,0.5" fill="none" stroke-width="1" stroke="#fff" class="amcharts-cursor-line amcharts-cursor-line-horizontal" visibility="hidden"></path></g><clipPath id="AmChartsEl-34"><rect x="0" y="0" width="455" height="269" rx="0" ry="0" stroke-width="0"></rect></clipPath></g><g></g><g><g transform="translate(0,10)" class="amcharts-graph-line amcharts-graph-g3"><circle r="4" cx="0" cy="0" fill="#04A5F5" stroke="#fff" fill-opacity="1" stroke-width="3" stroke-opacity="3" transform="translate(76,121)" aria-label="Bicycles 2001 55" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#04A5F5" stroke="#fff" fill-opacity="1" stroke-width="3" stroke-opacity="3" transform="translate(228,161)" aria-label="Bicycles 2002 40" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#04A5F5" stroke="#fff" fill-opacity="1" stroke-width="3" stroke-opacity="3" transform="translate(379,135)" aria-label="Bicycles 2003 50" class="amcharts-graph-bullet"></circle></g></g><g><g></g></g><g><g class="amcharts-category-axis" transform="translate(0,10)" visibility="visible"><text y="8" fill="#fff" font-family="Verdana" font-size="15px" opacity="1" text-anchor="middle" transform="translate(76.04109589201845,255.5)" class="amcharts-axis-label"><tspan y="8" x="0">2001</tspan></text><text y="8" fill="#fff" font-family="Verdana" font-size="15px" opacity="1" text-anchor="middle" transform="translate(228.04109589201846,255.5)" class="amcharts-axis-label"><tspan y="8" x="0">2002</tspan></text><text y="8" fill="#fff" font-family="Verdana" font-size="15px" opacity="1" text-anchor="middle" transform="translate(379.04109589201846,255.5)" class="amcharts-axis-label"><tspan y="8" x="0">2003</tspan></text></g><g class="amcharts-value-axis value-axis-valueAxisAuto0_1575671249129" transform="translate(0,10)" visibility="visible"><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="end" transform="translate(-12,269)" class="amcharts-axis-label"><tspan y="0" x="0">0</tspan></text><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="end" transform="translate(-12,215)" class="amcharts-axis-label"><tspan y="0" x="0">20</tspan></text><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="end" transform="translate(-12,161)" class="amcharts-axis-label"><tspan y="0" x="0">40</tspan></text><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="end" transform="translate(-12,108)" class="amcharts-axis-label"><tspan y="0" x="0">60</tspan></text><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="end" transform="translate(-12,54)" class="amcharts-axis-label"><tspan y="0" x="0">80</tspan></text><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="end" transform="translate(-12,0)" class="amcharts-axis-label"><tspan y="0" x="0">100</tspan></text></g></g><g></g><g transform="translate(0,10)"></g><g></g><g></g><clipPath id="AmChartsEl-33"><rect x="-1" y="-1" width="457" height="271" rx="0" ry="0" stroke-width="0"></rect></clipPath></svg>
                        <a
                          href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 5px; top: 15px;">JS chart by amCharts</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-header">
                  <h5>Transactions</h5><span class="d-block pt-2">Jun 23 - Jul 23</span>
                  <div class="card-header-right">
                    <div class="btn-group card-option"><button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></button>
                      <ul
                        class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                        <li
                          class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                          <li
                            class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                            </ul>
                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-6">
                      <h3 class="f-w-300 mb-0 float-left">$ 59,48</h3>
                    </div>
                    <div class="col-6">
                      <div id="transactions" class="float-right" style="height: 90px; width: 80px; margin: 0px auto; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 90px;" width="80"
                          height="90"></canvas>
                        <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                          <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; max-width: 16px; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 1px; text-align: center;">0.0</div>
                            <div style="position: absolute; max-width: 16px; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 34px; text-align: center;">2.5</div>
                            <div style="position: absolute; max-width: 16px; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 66px; text-align: center;">5.0</div>
                          </div>
                          <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">0</div>
                            <div style="position: absolute; top: 54px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">20</div>
                            <div style="position: absolute; top: 18px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">40</div>
                          </div>
                        </div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 90px;" width="80"
                          height="90"></canvas></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-header">
                  <h5>Transactions</h5><span class="d-block pt-2">June - July</span>
                  <div class="card-header-right">
                    <div class="btn-group card-option"><button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></button>
                      <ul
                        class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                        <li
                          class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                          <li
                            class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                            </ul>
                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="row">
                    <div class="col-6">
                      <div id="transactions1" style="height: 45px; width: 80px; margin: 0px auto; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 45px;" width="80"
                          height="45"></canvas>
                        <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                          <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; max-width: 16px; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 1px; text-align: center;">0.0</div>
                            <div style="position: absolute; max-width: 16px; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 34px; text-align: center;">2.5</div>
                            <div style="position: absolute; max-width: 16px; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 66px; text-align: center;">5.0</div>
                          </div>
                          <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">0</div>
                            <div style="position: absolute; top: 23px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">25</div>
                            <div style="position: absolute; top: 0px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">50</div>
                          </div>
                        </div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 45px;" width="80"
                          height="45"></canvas></div>
                      <h3 class="f-w-300 pt-3 mb-0 text-center">$ 80,48</h3>
                    </div>
                    <div class="col-6">
                      <div id="transactions2" style="height: 45px; width: 80px; margin: 0px auto; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 45px;" width="80"
                          height="45"></canvas>
                        <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                          <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; max-width: 16px; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 1px; text-align: center;">0.0</div>
                            <div style="position: absolute; max-width: 16px; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 34px; text-align: center;">2.5</div>
                            <div style="position: absolute; max-width: 16px; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 66px; text-align: center;">5.0</div>
                          </div>
                          <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">0</div>
                            <div style="position: absolute; top: 23px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">25</div>
                            <div style="position: absolute; top: 0px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">50</div>
                          </div>
                        </div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 45px;" width="80"
                          height="45"></canvas></div>
                      <h3 class="f-w-300 pt-3 mb-0 text-center">$ 40,27</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-xl-4">
              <div class="card">
                <div class="card-header">
                  <h5>Transactions</h5><span class="d-block pt-2">Jun 23 - Jul 23</span>
                  <div class="card-header-right">
                    <div class="btn-group card-option"><button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></button>
                      <ul
                        class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                        <li
                          class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                          <li
                            class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                            </ul>
                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-6">
                      <div id="transactions3" class="float-left" style="height: 90px; width: 80px; margin: 0px auto; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 90px;" width="80"
                          height="90"></canvas>
                        <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                          <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; max-width: 16px; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 1px; text-align: center;">0.0</div>
                            <div style="position: absolute; max-width: 16px; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 34px; text-align: center;">2.5</div>
                            <div style="position: absolute; max-width: 16px; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 66px; text-align: center;">5.0</div>
                          </div>
                          <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">0</div>
                            <div style="position: absolute; top: 54px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">20</div>
                            <div style="position: absolute; top: 18px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">40</div>
                          </div>
                        </div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 90px;" width="80"
                          height="90"></canvas></div>
                    </div>
                    <div class="col-6">
                      <h3 class="f-w-300 mb-0 float-right">$ 59,48</h3>
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
</div>