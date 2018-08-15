  <div class="row">
    <div class="container">
      <ul class="bread">
        <li><a href="#">All Courses</a></li>
        <li class="active"><a href="#"><?php echo 'Courses of '.$category->sector;?></a></li>
      </ul>
    </div>
  </div>
</div>
<!-- Course Details -->
<div class="container site-content sidebar-right">
  <div class="row">
    <div id="main" class="col-md-9 pull-left">
      <article>
              <div class="entry-content">
                <h2><?php echo 'Courses of '.$category->sector;?></h2>

                <div class="course-grid-12" id="course-specific">
                  <div class="course-cat-title">
                    <div class="course-cat-block">
                      <div class="course-cat-list">
                        <ul>
                          <?php $x=1; foreach($course as $c) :?>
                          <li>
                            <div class="entry-blocked">
                              <div class="course-grid-12">
                                <h4><a href="<?php echo base_url('front/courses/'.$c->id);?>"><?php echo $c->title;?></a></h4>
                                <div class="entry-block-inner">
                                  <ul>
                                    <li>Duration: <span><?php echo (is_numeric($c->duration)) ? $c->duration.' '.'Hours' : $c->duration;?></span></li>
                                    <li>Level: <span><?php echo $c->level == 1 ? 'Beginner' : ($c->level == 2 ? 'Intermediate' : 'Expert'); ?></span></li>
                                  </ul>
                                  <p><?php echo word_limiter($c->content,32);?></p>
                                </div>

                                <span><a href="<?php echo base_url('front/courses/'.$c->id);?>" class="btn-1 entry-btn-3d">VIEW COURSE</a></span>
                                <span><a href="#myModal<?php echo $c->id;?>" class="enquire btn-1 entry-btn-3d" data-toggle="modal">ENQUIRE NOW</a></span>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal<?php echo $c->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header entry-blue">
                                        <label class="modal-title" id="exampleModalLabel">ENQUIRE NOW</label>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="enquiry-form entry-getintouch">
                                          <form class="form-horizontal" action="#" method="POST">
                                            <label><span>Course:</span> <?php echo $c->title;?></label>
                                            <small class="entry-label-orange">   * Required Field</small>
                                            <div class="form-body">
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Name</label>
                                                <div class="col-md-9">
                                                  <input class="entry-control" placeholder="Name *" type="text" name="name">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Email</label>
                                                <div class="col-md-9">
                                                  <input class="entry-control" placeholder="Email *" type="email" name="email">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Mobile No.</label>
                                                <div class="col-md-9">
                                                  <div class="input-group">
                                                    <span class="input-group-addon">
                                                      977
                                                    </span>
                                                    <input class="entry-control no-spinners" placeholder="Mobile *" type="number" name="mobile">
                                                  </div>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Remarks</label>
                                                <div class="col-md-9">
                                                  <textarea placeholder="Remarks *" class="entry-control" cols="9"></textarea>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Security Code</label>
                                                <div class="col-md-3">
                                                  <input class="entry-control" placeholder="Code *" type="text" name="code"><span id="encrypt"><?php echo random_string('alnum', 6); ?></span>
                                                </div>
                                              </div>
                                             
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button class="btn entry-btn-3d" type="submit">Submit</button>
                                        <button type="button" class="btn entry-btn-3d entry-orange" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>
                              
                              <!-- <div class="clearfix"></div> -->
                            </div>
                          <li>
                          <?php $x++; endforeach ?>
                          <!-- <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Implementing and Managing Windows 10</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Supporting and Troubleshooting Windows 10</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Installing and Configuring Windows 10 Training & Certification Course</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li> -->
                        </ul>
                      </div>
                    </div>

                   <!--  <div class="course-cat-block">
                      <h5>Microsoft Windows 8</h5>
                      <div class="course-cat-list">
                        <ul>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Configuring Windows 8</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Implementing a Desktop Infrastructure Training & Certification Course</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Supporting Windows 8.1 Training & Certification Course</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Configuring and Troubleshooting a Windows Sever 2008 Network Infrastructure</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                        </ul>
                      </div>
                    </div>

                    <div class="course-cat-block">
                      <h5>Microsoft Windows 2012</h5>
                      <div class="course-cat-list">
                        <ul>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Storage and High Availability with Windows Server Training & Certification Course</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Deploying and Migrating Windows Servers</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Windows Server 2012 R2</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                          <li>
                            <div class="cclist-block">
                              <div class="course-grid-9 pull-left">
                              <a href="#">
                                <p>Server Infrastructure On server 2012 R2 Training & Certification Course</p>
                              </a>
                              </div>
                              <div class="course-grid-3 pull-right">
                              <span><a href="#">VIEW COURSE</a></span>
                              <span><a href="#" class="enquire">ENQUIRE NOW</a></span>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          <li>
                        </ul>
                      </div>
                    </div>
 -->

                  </div>
                </div>

                
              </div>


            </article>

    </div>

    