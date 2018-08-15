  <div class="row">
    <div class="container">
      <ul class="bread">
        <li><a href="#">All Courses</a></li>
        <li class="active"><a href="#"><?php echo $course->title;?></a></li>
      </ul>
    </div>
  </div>
</div>
<!-- Course Details -->
<div class="container site-content sidebar-right">
  <div class="row">
    <div id="main" class="col-md-9 pull-left">
     <!--  <article>
        <div class="entry-content">
          <h2><?#php echo $certification->short.' '.'Certification Course';?></h2>
          <p><?#php echo $certification->content;?></p>

          <div class="entry-content-inner entry-top-space entry-list-style-square">
          	<h3><?#php echo $certification->short; ?> Course</h3>
          	<ul>
          		<?#php $x=1; foreach($courses as $co): ?>
          			<li><a href="<?#php echo base_url('front/courses/'.$co->id);?>"><?#php echo $co->title;?></a><?#php echo (!empty($co->content)) ? ' - '.$co->content : ' ';?></li>
          		<?#php $x++; endforeach ?>
          	</ul>
          </div>
        </div>
      </article> -->

      <article>
        <div class="entry-content">
          <h2><?php echo $course->title;?></h2>
          <div class="course-meta">
            <div class="course-certification">
              <label>Certification</label>
              <div class="value">
                <span class="course-link"><a href="<?php echo base_url('front/vendor/'.$course->vendor);?>"><?php $x=1; foreach($v_list as $v): if($v->id == $course->vendor) {echo $v->short; $x++; } endforeach?></a></span>
              </div>  
            </div>
            <div class="course-level">
              <label>Level</label>
              <div class="value">
                <span><?php echo $level = $course->level == 1 ? 'Beginner' : ($course->level == 2 ? 'Intermediate' : 'Expert'); ?></span>
              </div>  
            </div>
            <div class="course-categories">
              <label>Categories</label>
              <div class="value">
                <span class="course-link"><a href="<?php echo base_url('front/category/'.$course->sector);?>"><?php $z=1; foreach($s_list as $s): if($s->id == $course->sector) {echo $s->sector; $z++; } endforeach?></a></span>
              </div>   
            </div>
          </div>

          <div class="course-summary">
            <div class="course-content-summary">
              <ul  class="nav nav-pills">
                <li class="thim-col-4 active">
                  <a href="#1a" data-toggle="tab">
                    <i class="fa fa-bookmark"></i>
                    <span>Description</span>
                  </a>
                </li>
                <li class="thim-col-4">
                  <a href="#2a" data-toggle="tab"><i class="fa fa-cube"></i><span>Course Outline</span></a>
                </li>

                <li class="thim-col-4">
                  <a href="#3a" data-toggle="tab"><i class="fa fa-microphone"></i><span>Enquiry</span></a>
                </li>
                
                
               
              </ul>

              <div class="tab-content clearfix">
                <div class="tab-pane active" id="1a">
                  <div class="tab-course-content tab-course-list">
                    <!-- <figure>
                      <img src="<?php echo base_url();?>assets/images/partner/microsoft-logo1.jpg">
                    </figure> -->

                    <h4>COURSE DESCRIPTION</h4>
                      <p><?php echo $course->content;?></p>

                      <!-- <h4>Skills gained / Objectives</h4>
                      <?php echo $course->objective;?>

                      <h4>Who can benefits ?</h4>
                      <?php echo $course->benefit;?> -->
                  </div>

                  <div class="course-feature">
                    <h4>COURSE INFORMATION</h4>    
                    <ul>
                      <li class="lectures-feature">
                        <i class="fa fa-files-o"></i>
                        <span class="label">Modules</span>
                        <span class="value"><?php echo $course->module;?></span>
                      </li>
                      <!-- <li class="quizzes-feature">
                        <i class="fa fa-puzzle-piece"></i>
                        <span class="label">Quizzes</span>
                        <span class="value">1</span>
                      </li> -->
                      <li class="duration-feature">
                        <i class="fa fa-clock-o"></i>
                        <span class="label">Duration</span>
                        <span class="value"><?php echo (is_numeric($course->duration)) ? $course->duration.' '.'Hours' : $course->duration;?></span>
                      </li>
                      <li class="skill-feature">
                        <i class="fa fa-level-up"></i>
                        <span class="label">Skill level</span>
                        <span class="value"><?php echo $level; ?></span>
                      </li>
                      <!-- <li class="language-feature">
                        <i class="fa fa-language"></i>
                        <span class="label">Language</span>
                        <span class="value">English</span>
                      </li> -->
                      <!-- <li class="students-feature">
                        <i class="fa fa-users"></i>
                        <span class="label">Students</span>
                        <span class="value">198</span>
                      </li> -->
                      <!-- <li class="assessments-feature">
                        <i class="fa fa-check-square-o"></i>
                        <span class="label">Assessments</span>
                        <span class="value">Self</span>
                      </li> -->
                    </ul>
                  </div>

                  <div class="clearfix"></div>
                  <div class="tab-course-list">

                    <?php if(! empty($course->objective)) { ?>
                    <h4 class="tab-course-list-top-space">Skills gained / Objectives</h4>
                      <?php echo $course->objective;?>
                    <?php } ?>

                    <?php if(! empty($course->benefit)) { ?>
                    <h4 class="tab-course-list-top-space">Who can benefits ?</h4>
                      <?php echo $course->benefit;?>
                    <?php } ?>

                    <?php if(! empty($course->prerequisities)) { ?>
                    <h4 class="tab-course-list-top-space">Prerequisites</h4>
                      <?php echo $course->prerequisities;?>
                    <?php } ?>
                  </div>

                  <!-- <ul class="course-social-share">
                    <li class="heading">Share:</li>
                    <li>
                      <div class="facebook-social">
                        <a target="_blank" class="facebook" href="#" title="Facebook">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="googleplus-social">
                        <a target="_blank" class="googleplus" href="#" title="Google Plus" onclick="javascript:window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;">
                          <i class="fa fa-google"></i>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="twitter-social">
                        <a target="_blank" class="twitter" href="#" title="Twitter">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </div>
                    </li>
                  </ul> -->


                </div>
                <div class="tab-pane" id="2a">
                  <div class="panel-group" id="accordion">
                    <?php $w=1; foreach($outline as $o): ?>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a class="accordion-toggle <?php echo ($w==1) ? '' : 'collapsed';?> <?php echo (!empty($o->content)) ? ' ' : 'cursor-hide';?>" data-toggle="collapse" href="#collapse<?php echo $w;?>">
                              <?php echo $o->title;?>
                            </a>
                            <!-- <span class="pull-right">0/1</span> -->
                          </h4>
                        </div>
                        <?php if(!empty($o->content)) { ?>
                        <div id="collapse<?php echo $w;?>" class="panel-collapse collapse <?php echo ($w==1) ? 'in' : '';?>">
                          <div class="panel-body">
                            <?php echo $o->content;?>
                          </div>
                        </div>
                        <?php } ?>
                      </div>

                    <?php $w++; endforeach ?>

                  </div>
                </div>

                <div class="tab-pane" id="3a">
                  <div class="enquiry-form entry-getintouch">
                    <h3>Please Contact Us To Enquiry on this Course</h3>
                    <p>+977 01 4102721, 4102722, 4102723</p>
                    <!-- <form class="form-horizontal" action="#" method="POST">
                      <label class="form-label">* Required Field</label>
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
                            <textarea placeholder="Remarks *" class="entry-control" cols="10"></textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label">Security Code</label>
                          <div class="col-md-2">
                            <input class="entry-control" placeholder="Code *" type="text" name="code"><span id="encrypt"><?php echo random_string('alnum', 6); ?></span>
                            <br/>
                            <button class="btn entry-btn-3d addspace" type="submit">Submit</button>
                          </div>
                        </div>
                      </div>
                    </form> -->
                    <h3>OR</h3>
                    <h3>Visit Our Office</h3>
                    <p>Opposite Singhadurbar East Gate, Anamnagar, Kathmandu, Nepal</p>
                    <p></p>
                    <p>Opening Time: 10:00 am - 5:00 pm </p>
                  </div>
                </div>
                <!-- <div class="tab-pane" id="4a">
                  <h3>We use css to change the background color of the content to be equal to the tab</h3>
                </div> -->
              </div>

              
            </div>


          </div>

          
        </div>

        <!-- <div class="available-class">
          <div class="available-class-inner">
            <h3>Class Schedule</h3>
            <label>August</label>
            <ul>
              <li>
                <div class="month-session">
                  <label class="month-session-date">
                    <span>17</span>
                    <span>Aug</span>
                    <span>2017</span>
                  </label>
                  <span class="month-session-time">
                    <span><i class="fa fa-clock-o"></i> 7:00 - 9:00</span>
                    <span><i class="fa fa-clock-o"></i> 7:00 - 9:00</span>
                  </span>
                </div>
              </li>
            </ul>
          </div>
        </div> -->

      </article>

    </div>

    