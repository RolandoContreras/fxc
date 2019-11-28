  <section class="pcoded-main-container">
    <div class="pcoded-wrapper">
      <div class="pcoded-content">
        <div class="pcoded-inner-content">
          <div class="page-header">
            <div class="page-block">
              <div class="row align-items-center">
                <div class="col-md-12">
                  <div class="page-header-title">
                    <h5 class="m-b-10">Listado</h5>
                  </div>
                  <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="<?php echo site_url().'course';?>"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item"><a>Videos Todos</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="main-body">
            <div class="page-wrapper">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-header">
                      <h5>Marketing y redes sociales - vídeos</h5>
                    </div>
                    <div class="card">
                      <div class="row">
                        <?php 
                        foreach ($obj_videos_mkt as $value) { ?>
                            <div class="col-lg-4 col-sm-6">
                              <div class="thumbnail mb-4">
                                <div class="thumb">
                                  <div class="embed-responsive embed-responsive-4by3 hei-300"> 
                                      <iframe width="560" height="315" src="<?php echo $value->video;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  </div>
                                </div>
                                <div class="card Design-sprint theme-bg2">
                                    <div class="card-header borderless">
                                        <h5 class="text-white"><?php echo str_to_mayusculas($value->name);?></h5> 
                                        <span class="d-block text-white mt-2"><?php echo str_to_first_capital($value->summary);?></span> 
                                    </div>
                                </div>
                              </div>
                            </div>
                        <?php } ?>  
                    </div>
                  </div>
                </div>
                    
                  <div class="card">
                    <div class="card-header">
                      <h5>Forex e Inversiones - vídeos</h5>
                    </div>
                    <div class="card">
                      <div class="row">
                        <?php foreach ($obj_videos_fx as $value) { ?>
                            <div class="col-lg-4 col-sm-6">
                              <div class="thumbnail mb-4">
                                <div class="thumb">
                                  <div class="embed-responsive embed-responsive-4by3 hei-300"> 
                                      <iframe width="560" height="315" src="<?php echo $value->video;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  </div>
                                </div>
                                <div class="card Design-sprint theme-bg2">
                                    <div class="card-header borderless">
                                        <h5 class="text-white"><?php echo str_to_mayusculas($value->name);?></h5> 
                                        <span class="d-block text-white mt-2"><?php echo str_to_first_capital($value->summary);?></span> 
                                    </div>
                                </div>
                              </div>
                            </div>
                        <?php } ?>     
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    