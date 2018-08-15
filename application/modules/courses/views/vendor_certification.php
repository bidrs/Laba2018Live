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
                      <!-- <p>Vendors Technology</p> -->
                      <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                      <ul id="dr-users" class="dropdown-content">
                        <li><a href="<?php echo base_url('courses/vendor_certification/vendor_certification_add');?>">Add New</a></li>
                      </ul>

                      <!-- Dropdown Structure -->

                  </div>

                  <div class="tab-inn">
                      <div class="table-responsive table-desi">

                          <?php $x=1; foreach($v_list as $v) : ?>
                          <div class="title_section">
                              <h4><?php echo $v->vendor.' ' ;?>
                                <small style="color: #113546; font-weight: bold"><?php echo '('.$v->short.')';?></small>
                              </h4>
                          </div>
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>Certification</th>
                                      <th>Abbreviation</th>
                                      <th>Content</th>
                                      <th>Courses</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php $y=1; foreach ($ce_list as $con): 
                                  if($con->vendor_id == $v->id) {
                                ?>
                                  <tr>
                                      <td><a href="#"><span class="list-enq-name"><?php echo $con->title;?></span></a></td>
                                      <td><?php echo $con->short;?></td>

                                      <?php if(! empty($con->content)) { ?>
                                      <td>
                                        <a class="modal-trigger" href="#contentModal<?php echo $con->id;?>" style="text-decoration: underline;">view content</a>
                                          <div id="contentModal<?php echo $con->id;?>" class="modal modal-delete-width">
                                            <div class="modal-content">
                                              <p><?php echo $con->content;?></p>
                                            </div>
                                            <div class="modal-footer">
                                              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat modal-close-btn">Close</a>
                                            </div>
                                          </div>
                                      </td>
                                      <?php } else { ?> 
                                      <td>N/A</td>
                                      <?php } ?>

                                      <td>
                                        <a href="<?php echo base_url('courses/cat_edit/'.$con->id);?>">
                                          <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                      </td>
                                      <td>
                                        <a href="<?php echo base_url('courses/vendor_certification_edit/'.$con->id);?>">
                                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                      </td>
                                      <td>
                                        <a class="modal-trigger" href="#modal<?php echo $con->id;?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        <div id="modal<?php echo $con->id;?>" class="modal modal-delete-width">
                                          <div class="modal-content">
                                            <h4>Are Sure Want to Delete ?</h4>
                                          </div>
                                          <div class="modal-footer">
                                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat modal-close-btn">Close</a>
                                            <a href="<?php echo base_url('courses/vendor_certification_remove/'.$con->id);?>" class="modal-action modal-close waves-effect waves-green btn-flat modal-red">Agree</a>
                                          </div>
                                        </div>
                                      </td>

                                  </tr>

                                  
                                <?php } $y++; endforeach ?>
                                
                                
                              </tbody>
                          </table>
                          <br>
                          <?php $x++; endforeach ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>