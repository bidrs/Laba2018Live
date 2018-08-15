<div class="sb2-2">
  <div class="sb2-2-2">
      <ul>
          <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
          </li>
          <li class="active-bre"><a href="#"> <?php echo $title;?></a>
          </li>
      </ul>
  </div>
  <div class="sb2-2-3">
      <div class="row">
          <div class="col-md-12">
              <div class="box-inn-sp">
                  <div class="inn-title">
                      <h4><?php echo $title;?></h4>
                  </div>

                  <div class="tab-inn">
                    <div class="view-page">
                      <div class="view-page-title">
                        <h3><?php echo $content->title;?></h3>
                        <p><?php echo $content->content;?></p>
                      </div>

                      <div class="view-page-brief">
                        <h4>Skills gained / Objectives :</h4>
                        <?php echo $content->objective;?>
                      </div>

                      <div class="view-page-brief">
                        <h4>Who can benefit ?</h4>
                        <?php echo $content->benefit;?>
                      </div>

                      <div class="view-page-brief">
                        <h4>Course Duration:  <span> <?php echo $content->duration;?> Hours</span></h4>
                      </div>

                      <div class="view-page-brief">
                        <h4>Prerequisities :</h4>
                        <?php echo $content->prerequisities;?>
                      </div>

                      <div class="view-page-brief">
                        <h4>Course Outline :</h4>
                        
                        <div class="view-page-outline">
                          
                          <?php $x=1; foreach($chapter as $c): ?>
                          <div class="view-page-module">
                            <h5><?php echo $c->title;?></h5>
                            <div class="view-page-module-content">
                              <?php echo $c->content;?>
                            </div>
                          </div>
                          <?php $x++; endforeach ?>

                        </div>
                      </div>

                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>