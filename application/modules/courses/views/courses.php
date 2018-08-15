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
                        <li><a href="<?php echo base_url('courses/course_add');?>">Add New</a></li>
                      </ul>

                      <!-- Dropdown Structure -->

                  </div>

                  <div class="tab-inn">
                      <div class="table-responsive table-desi">

                          <!-- <div class="title_section"><h4>Microsoft</h4></div> -->
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>Courses</th>
                                      <th>Certification</th>
                                      <th>Exam</th>
                                      <th>Vendor</th>
                                      <th>Sector</th>
                                      <th>Module</th>
                                      <th>Status</th>
                                      <th>View</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php $x=1; foreach ($content as $con): ?>
                                  <tr>
                                      <td><a href="#"><span class="list-enq-name"><?php echo $con->title;?></span></a></td>
                                      
                                      <td>
                                        <?php 
                                          $a=1; 
                                          foreach ($ce_list as $c): 
                                            if($con->certification == $c->id) 
                                              echo $c->short;
                                            $a++;
                                          endforeach 
                                        ?> 
                                      </td>

                                      <td><?php echo $con->exam;?></td>
                                      <td>
                                        <?php 
                                          $b=1; 
                                          foreach ($v_list as $v): 
                                            if($con->vendor == $v->id) 
                                              echo $v->short;
                                            $b++;
                                          endforeach 
                                        ?>
                                      </td>

                                      <td>
                                        <?php 
                                          $c=1; 
                                          foreach ($s_list as $s): 
                                            if($con->sector == $s->id) 
                                              echo $s->sector;
                                            $c++;
                                          endforeach 
                                        ?>
                                      <td><?php echo $con->module;?>  <a class="modal-trigger move-side" href="<?php echo base_url('courses/course_outline/'.$con->id);?>"><i class="fa fa-list-ul" aria-hidden="true"></i></a></td>
                                      <td><?php echo ($con->status == 1) ? 'Active' : 'Inactive' ;?></td>

                                      <td>
                                        <a href="<?php echo base_url('courses/course_view/'.$con->id);?>">
                                          <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                      </td>

                                      <td>
                                        <a href="<?php echo base_url('courses/course_edit/'.$con->id);?>">
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
                                            <a href="<?php echo base_url('courses/course_remove/'.$con->id);?>" class="modal-action modal-close waves-effect waves-green btn-flat modal-red">Agree</a>
                                          </div>
                                        </div>
                                      </td>

                                  </tr>

                                  
                                <?php $x++; endforeach ?>
                                
                                
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>