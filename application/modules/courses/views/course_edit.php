<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> <?php echo $title;?></a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog sb2-2-1">
        <h2><?php echo $title;?></h2>

        <div class="bor">
          <form action="<?php echo base_url('courses/course_edited/'.$content->id);?>" method="POST">
            <!-- <div class="pull-right">
              <h4 id="status">Step 1 of 2</h4>
            </div> -->
            <!-- One "tab" for each step in the form: -->
            <div id="tab1">
              <h3>Course Details: <small id="asterix">* (Mandatory)</small></h3><br>
              <div class="row">
                <div class="input-field col s12">
                  <input id="c_title" type="text" class="validate" name="title" maxlength="80" required placeholder="eg: Java SE 7 Certified Programmers" value="<?php echo $content->title;?>">
                  <label for="c_title">Course Title <small id="asterix">*</small></label>
                </div>
                <div class="input-field col s12">
                  <textarea id="textarea2" class="materialize-textarea" name="content"><?php echo $content->content;?></textarea>
                  <label for="textarea2">Course Description <small id="asterix">*</small></label>
                </div>
              </div>


              <div class="row">
                <div class="input-field col s4">
                  <select name="vendor">
                    <option value="" disabled selected>Choose Vendor Technology</option>

                    <?php $x=1; foreach($v_list as $v): ?>
                      <option value="<?php echo $v->id;?>" <?php echo ($content->vendor == $v->id) ? 'selected' : 'unselected';?>><?php echo $v->short;?></option>
                    <?php $x++; endforeach ?>

                  </select>
                  <label>Choose Vendor Technology</label>
                </div>

                <div class="input-field col s4">
                  <select name="certification">
                    <option value="" disabled selected>Choose Certification</option>

                    <?php $y=1; foreach($ce_list as $c): ?>
                      <option value="<?php echo $c->id;?>" <?php echo ($content->certification == $c->id) ? 'selected' : 'unselected';?>><?php echo $c->short;?></option>
                    <?php $y++; endforeach ?>

                  </select>
                  <label>Choose Certification</label>
                </div>

                <div class="input-field col s4">
                  <select name="sector">
                    <option value="" disabled selected>Choose Category</option>

                    <?php $z=1; foreach($s_list as $s): ?>
                      <option value="<?php echo $s->id;?>" <?php echo ($content->sector == $s->id) ? 'selected' : 'unselected';?>><?php echo $s->sector;?></option>
                    <?php $z++; endforeach ?>

                  </select>
                  <label>Choose Category</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s4">
                  <input id="c_time" type="number" class="validate" name="duration" maxlength="10" required placeholder="eg: 20" value="<?php echo $content->duration;?>">
                  <label for="c_time">Course Duration <small>(Hours)</small></label>
                </div>

                <div class="input-field col s4">
                  <select name="level">
                    <option value="" disabled selected>Choose Level</option>
                    <option value="1" <?php echo ($content->level == 1) ? 'selected' : 'unselected';?>>Beginner</option>
                    <option value="2" <?php echo ($content->level == 2) ? 'selected' : 'unselected';?>>Intermediate</option>
                    <option value="3" <?php echo ($content->level == 3) ? 'selected' : 'unselected';?>>Expert</option>
                  </select>
                  <label>Choose Level</label>
                </div>

                <div class="input-field col s4">
                  <input id="c_exam" type="text" class="validate" name="exam" maxlength="25" value="<?php echo $content->exam;?>">
                  <label>Exam</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s4">
                  <label>Who Can Benefits?</label>
                  <textarea class="area" name="benefit"><?php echo $content->benefit;?></textarea>
                </div>

                <div class="input-field col s4">
                  <label>Objectives</label>
                  <textarea class="area" name="objective"><?php echo $content->objective;?></textarea>
                </div>

                <div class="input-field col s4">
                  <label>Prerequisites</label>
                  <textarea class="area" name="pre"><?php echo $content->prerequisities;?></textarea>
                </div>
              </div>

              <input type="hidden" name="module" value="<?php echo count($chapter);?>">

              <button type="submit" id="nextBtn" class="waves-effect waves-light btn-large" value="submit">Submit</button>
            </div>



            <!-- <div id="tab2">
              <h3>Course Outlines / Chapters:</h3>

              <div class="row">
                <div id="row_d">
                  <div class="input-field col s5">
                    <input id="list" type="text" class="validate" name="list[]" maxlength="100">
                    <label>Module / Chapter / Title</label>
                  </div>
                  <div class="input-field col s5">
                    <label class="pos_top">List / Content</label>
                    <textarea class="materialnote1" name="sub_list[]"></textarea>
                  </div>
                  <div class="input-field col s2">
                    <button type="button" id="addBtn" class="waves-effect waves-light btn-large" value="Add More">Add More</button>
                  </div>
                </div>
              </div> -->

              <!-- <button type="button" id="nextBtn" onclick="processPhase()" class="waves-effect waves-light btn-large" value="Previous">Previous</button>
              <button type="button" id="submitBtn" onclick="processPhaseSubmit()" class="waves-effect waves-light btn-large" value="Submit">Submit</button>
            </div> -->
          </form>

        </div>
        
    </div>
</div>