<div id="sidebar" class="col-md-3">
  <div class="sidebar-type">
    <aside id="running-classes">
      <div class="running-classes-inner scroll-wrapper">
        <h3>New Class Details</h3>
        <div class="scrollbar-inner running-classes-content">
          <ul>
            <li>
              <span><a href="#">ISO 27001:2013 Lead Auditor</a></span>
              <p>
                <i class="fa fa-calendar-o"></i> Starts: <span class="sidebar-new-class">February</span> <br> 
                <i class="fa fa-clock-o"></i> Time: <span class="sidebar-new-class">5 Full Days</span></p>
            </li>
            <li>
              <span><a href="#">Oracle 11g</a></span>
              <p>
                <i class="fa fa-calendar-o"></i> Starts: <span class="sidebar-new-class">February</span> <br> 
                <i class="fa fa-clock-o"></i> Time: <span class="sidebar-new-class">Morning</span></p>
            </li>
            <li>
              <span><a href="#">SharePoint 2013</a></span>
              <p>
               <i class="fa fa-calendar-o"></i> Starts: <span class="sidebar-new-class">February</span> <br> 
                <i class="fa fa-clock-o"></i> Time: <span class="sidebar-new-class">Morning</span></p>
            </li>
            <li>
              <span><a href="#">COBIT Foundation</a></span>
              <p>
               <i class="fa fa-calendar-o"></i> Starts: <span class="sidebar-new-class">23 Feb - 25 Feb</span> <br> 
                <i class="fa fa-clock-o"></i> Time: <span class="sidebar-new-class">Morning</span></p>
            </li>
            <li>
              <span><a href="#">ITIL Foundation</a></span>
              <p>
                <i class="fa fa-calendar-o"></i> Starts: <span class="sidebar-new-class">18 Feb - 20 Feb</span> <br> 
                <i class="fa fa-clock-o"></i> Time: <span class="sidebar-new-class">Morning</span></p>
            </li>
            <li>
              <span><a href="#">Python</a></span>
              <p>
                <i class="fa fa-calendar-o"></i> Starts: <span class="sidebar-new-class">February</span> <br> 
                <i class="fa fa-clock-o"></i> Time: <span class="sidebar-new-class">Morning</span></p>
            </li>
            <li>
              <span><a href="#">CEH V9</a></span>
              <p>
               <i class="fa fa-calendar-o"></i> Starts: <span class="sidebar-new-class">2 February</span> <br> 
                <i class="fa fa-clock-o"></i> Time: <span class="sidebar-new-class">5:30pm - 7:30pm</span></p>
            </li>
            <li>
              <span><a href="#">CISA</a></span>
              <p>
               <i class="fa fa-calendar-o"></i> Starts: <span class="sidebar-new-class">March</span> <br> 
                <i class="fa fa-clock-o"></i> Time: <span class="sidebar-new-class">5 Full Days</span></p>
            </li>
            <li>
              <span><a href="#">CCNA RS</a></span>
              <p>
               <i class="fa fa-calendar-o"></i> Starts: <span class="sidebar-new-class">March</span> <br> 
                <i class="fa fa-clock-o"></i> Time: <span class="sidebar-new-class">Morning / Evening</span></p>
            </li>
            <li>
              <span><a href="#">VM Ware 6.5</a></span>
              <p>
               <i class="fa fa-calendar-o"></i> Starts: <span class="sidebar-new-class">March</span> <br> 
                <i class="fa fa-clock-o"></i> Time: <span class="sidebar-new-class">5 Full Days</span></p>
            </li>
          </ul>
        </div>
      </div>
    </aside>
        
    <aside id="relate-course">
      <div class="relate-course-inner">
        <h3>Popular Courses</h3>
        <div class="relate-course-content">


          <?php $p = 1; foreach ($content as $po) : 
              if($p <= 4) {?>
          <div class="mt-element-ribbon bg-color">
            <div class="ribbon uppercase">Microsoft</div>
            <div class="ribbon-content clearfix">
              <div class="relate-content">
                <label>
                  <span class="stitle">Level:</span>
                  <span class="scaption"><?php echo $po->level == 1 ? 'Beginner' : ($po->level == 2 ? 'Intermediate' : 'Expert');?></span>
                </label>
                <h5><a href="<?php echo base_url('front/courses/'.$po->id);?>"><?php echo $po->title;?></a></h5>
                <!-- <p>Reviews (8)</p> -->
              </div>
            </div>
          </div>
          <?php } $p++; endforeach ?>


        </div>
      </div>
    </aside>
  </div>
</div>