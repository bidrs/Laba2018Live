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
          <form action="<?php echo base_url('courses/vendor_certification_edited/'.$content->id);?>" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <input id="c_title" type="text" class="validate" name="title" maxlength="150" required placeholder="eg: Microsoft Certified Solutions Associate" value="<?php echo $content->title;?>">
                <label for="c_title">Certification Title</label>
              </div>
              <div class="input-field col s12">
                <input id="abbre" type="text" class="validate" name="short" maxlength="60" required placeholder="eg: MCSA" value="<?php echo $content->short;?>">
                <label for="abbre">Abbreviation</label>
              </div>
              <div class="input-field col s12">
                <textarea id="textarea2" class="materialize-textarea" name="content"><?php echo $content->content;?></textarea>
                <label for="textarea2">Short Description of Certification</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <select name="vendor">
                  <option value="" disabled selected>Choose Vendor Technology</option>

                  <?php $x=1; foreach($v_select as $v): ?>
                    <option value="<?php echo $v->id;?>" <?php echo ($v->id == $content->vendor_id) ? 'selected' : '';?>><?php echo $v->short;?></option>
                  <?php $x++; endforeach ?>

                </select>
                <label>Choose Vendor Technology</label>
              </div>
              
            </div>
            
            <div class="row">
              <div class="input-field col s12">
                <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
              </div>
            </div>
          </form>
        </div>
        
    </div>
</div>