<div id="logo" class="pull-left">
  <a href="<?php echo base_url();?>" <?php $link = $this->uri->segment(1); echo ($link == 'index' || $link == '') ? 'class="smallimg"' : '';?>><img src="<?php echo base_url();?>assets/front/images/logo-laba.png" alt="" title="" /></img></a>
</div>

<nav id="nav-menu-container">
  <ul class="nav-menu pull-right">
    <li class="<?php if($this->uri->segment(1) == '') echo "menu-active"; ?>"><a href="<?php echo base_url();?>">Home</a></li>
    <li class="menu-has-children <?php if($this->uri->segment(2) == 'about'    || 
                                          $this->uri->segment(2) == 'whylaba'  ||
                                          $this->uri->segment(2) == 'achievement'  ||
                                          $this->uri->segment(2) == 'quality'  ||
                                          $this->uri->segment(2) == 'training' || 
                                          $this->uri->segment(2) == 'opportunity' ||
                                          $this->uri->segment(2) == 'health'
                                          ) echo "menu-active"; ?>">
      <a href="<?php echo base_url('front/about');?>">About Us</a>
      <ul>
        <li><a href="<?php echo base_url('front/whylaba')?>">Why LABA</a></li>
        <li><a href="<?php echo base_url('front/achievement')?>">Achievements and Milestones</a></li>
        <!-- <li class="menu-has-children"><a href="#">Franchising Opportunities</a>
          <ul>
            <li><a href="#">Why franchising in IT Industry?</a></li>
            <li><a href="#">Why choose LABA?</a></li>
            <li><a href="#">Franchisee Pre-requisite</a></li>
            <li><a href="#">Investment Required</a></li>
            <li><a href="#">Franchising Process</a></li>
            <li><a href="#">LABA Operation Cycle</a></li>
            <li><a href="#">Request for Consideration</a></li>
          </ul>
        </li> -->
        <li><a href="<?php echo base_url('front/quality')?>">Quality Approach</a></li>
        <li><a href="<?php echo base_url('front/training')?>">Training Approach</a></li>
        <li class="menu-has-children"><a href="#">Quality Assurance</a>
          <ul>
            <li><a href="<?php echo base_url('front/opportunity')?>">Equal Opportunities and Diversity</a></li>
            <li><a href="<?php echo base_url('front/health')?>">Health and Safety</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="menu-has-children <?php if($this->uri->segment(2) == 'courses' || $this->uri->segment(2) == 'allvendor') echo "menu-active"; ?>"><a href="#courses">Courses</a>
      <ul>
        <!-- <li class="menu-has-children"><a href="course_page.php">All Certifications</a> -->
          <!-- <ul>
            <li><a href="course_specific.php">1</a></li>
          </ul> -->
        </li>
        <li class="menu-has-children"><a href="#">All Vendors</a>
          <ul>
            <?php $x=1; foreach ($v_list as $v) { 
              if($x <= 6) { ?>

              <li class="menu-has-children"><a href="#"><?php echo $v->short ;?></a>
                <ul>
                <?php $y=1; foreach ($ce_list as $c): 
                  if($v->id == $c->vendor_id) { ?>
                    <li><a href="<?php echo base_url('front/courses/certification/'.$c->id);?>"><?php echo $c->short;?></a></li>
                <?php $y++; } endforeach ?>

                </ul>
              </li>

            <?php } else { ?>

              <li><a href="<?php echo base_url('front/allvendor');?>">View All</a></li>

            <?php break; } ?>
              
            <?php $x++; } ?>
          </ul>
        </li>

        <li class="menu-has-children"><a href="#">Categories</a>
          <ul>

            <?php $z=1; foreach($s_list as $s):   // FETCHING DATA OF SECTOR WITH LIMIT 6 AND MATCHING ID WITH COURSE TO FETCH RELATIVE COURSE
              // if($z <= 6) { 
            ?>
              <li class="menu-has-children"><a href="#"><?php echo $s->sector;?></a>
                <ul>
                  <?php $zz=1; foreach($content as $con): 
                    if($s->id == $con->sector) {
                  ?>
                    <li><a href="<?php echo base_url('front/courses/'.$con->id);?>"><?php echo $con->title;?></a></li>
                  <?php $zz++; } endforeach ?>

                </ul>
              </li>
<!-- 
            <?php# } else { ?>

              <li><a href="#">View More</a></li>

            <?php# break; } ?> -->
              
            <?php $z++; endforeach ?>

            
          </ul>
        </li>
        <li>
          <a href="http://technology.labanepal.com/" target="_blank">MCP</a>
        </li>
      </ul>
    </li>
    <li><a href="http://labanepal.net/development/" target="_blank">Development</a></li>
    <li class="menu-has-children <?php if($this->uri->segment(2) == 'events') echo "menu-active"; ?>"><a href="#">Event</a>
      <ul>
        <li><a href="<?php echo base_url('front/events');?>">Global Cyber Security Summit 2018</a></li>
      </ul>
    </li>
    <li class="menu-has-children <?php if($this->uri->segment(2) == 'services') echo "menu-active"; ?>"><a href="#">Services</a>
      <ul>
        <li><a href="<?php echo base_url('front/services/1');?>">IT Training</a></li>
        <li><a href="<?php echo base_url('front/services/2');?>">Development</a></li>
        <li><a href="<?php echo base_url('front/services/3');?>">Room Rental</a></li>
        <li><a href="<?php echo base_url('front/services/4');?>">Online Testing</a></li>
        <!-- <li><a href="#">IT Setup</a></li> -->
      </ul>
    </li>
    <!-- <li><a href="<?php echo base_url('front/services')?>"></a></li> -->
    <!-- <li><a href="#gallery">Gallery</a></li> -->
    <!-- <li class="<?php if($this->uri->segment(2) == 'news') echo "menu-active"; ?>"><a href="<?php echo base_url('front/news')?>">News Update</a></li> -->
    <!-- <li class="<?php if($this->uri->segment(2) == 'events') echo "menu-active"; ?>"><a href="<?php echo base_url('front/events')?>">Events</a></li> -->
    <!-- <li class="<?php if($this->uri->segment(2) == 'career') echo "menu-active"; ?>"><a href="<?php echo base_url('front/career')?>">Career</a></li> -->
    <li class="<?php if($this->uri->segment(2) == 'contact') echo "menu-active"; ?>"><a href="<?php echo base_url('front/contact')?>">Contact Us</a></li>
  </ul>
</nav><!-- #nav-menu-container -->