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
          <form action="<?php echo base_url('courses/cat_upload');?>" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <input id="list-cat" type="text" class="validate" name="sector" maxlength="100" required placeholder="eg: IT Security">
                <label for="list-cat">Category Title</label>
              </div>
              <div class="input-field col s12">
                <textarea id="textarea2" class="materialize-textarea" name="tagline"></textarea>
                <label for="textarea2">Tagline / Short Brief:</label>
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