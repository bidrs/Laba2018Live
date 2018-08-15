  <div class="row">
    <div class="container">
      <ul class="bread">
        <li><a href="<?php echo base_url();?>">Home</a></li>
        <li class="active"><a href="#">Courses of All Brands</a></li>
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
          <h2>Courses of All Brands</h2>

          <div class="course-grid-12" id="course-specific">
            <div class="course-cat-title">
              <div class="course-cat-block">
                <div class="course-cat-list">
                  <div id="course-archive" class="course-grid">


                    <?php $x=1; foreach($v_list as $v): ?> <!--RETRIEVING ALL DATA OF VENDOR -->
                    <div id="course-id" class="course-grid-3 course-pad">
                      <div class="course-item">
                        <div class="course-thumbnail">
                          <img src="<?php echo base_url('assets/cpanel/images/vendor/'.$v->image);?>">
                        </div>
                        <div class="course-content custom-cc">
                          <h4 class="course-title">
                            <a href="<?php echo base_url('front/vendor/'.$v->id);?>"><?php echo $v->short;?></a>
                          </h4>
                          <ul>
                            <!-- RETRIEVING ALL DATA OF COURSE -->
                            <?php $y=1; foreach($content as $c):  
                                          if(($y <= 4) AND ($v->id == $c->vendor)) { ?>
                              <li><a href="<?php echo base_url('front/courses/'.$c->id);?>"><?php echo $c->title;?></a></li>
                            <?php $y++; } endforeach ?>
                          </ul>
                          <span><?php if(count($c) > 4) { ?><a href="<?php echo base_url('front/vendor/'.$v->id);?>" class="btn-1 entry-btn-3d">VIEW ALL</a><?php } ?></span>
                        </div>
                      </div>
                    </div>
                    <?php $x++; endforeach ?>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
    </div>

    