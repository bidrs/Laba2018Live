<div class="sb2-2">
  <div class="sb2-2-2">
      <ul>
          <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
          </li>
          <li class="active-bre"><a href="#"> <?php echo $title.' '.ucfirst($content->title);?></a>
          </li>
      </ul>
  </div>
  <?php $mainId = $this->uri->segment(3); $pagId = $this->uri->segment(4);?>
  <div class="sb2-2-3">
      <div class="row">
          <div class="col-md-12">
              <div class="box-inn-sp">
                  <div class="inn-title">
                      <h4><?php echo $title.' '.ucfirst($content->title);?></h4> 
                      <!-- <p>Vendors Technology</p> -->
                      <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                      <ul id="dr-users" class="dropdown-content">
                        <li><a href="#modalAdd">Add New</a></li>
                      </ul>
                      <div id="modalAdd" class="modal modal-delete-width">
                          <div class="modal-header edit-modal-header-blue">
                            <h4>Add Section</h4>
                          </div>
                          <form id="check" method="post" action="<?php echo base_url('courses/course_outline_add');?>">
                          <div class="modal-content">
                            <br>
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="list" type="text" class="validate" name="list" maxlength="100">
                                <label>Module / Chapter / Title</label>
                              </div>
                              <div class="input-field col s12 custom-bg-i">
                                <label>List / Content</label>
                                <textarea class="ckeditor" name="sub_list"></textarea>
                              </div>
                              <input type="hidden" value="<?php echo $mainId;?>" name="id"> 
                            </div>
                          </div>
                          <div class="modal-footer">
                            <a class="modal-action modal-close waves-effect waves-green btn-flat modal-close-btn">Close</a>
                            <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat modal-blue" value="submit">Submit</button>
                          </div>
                          </form>
                        </div>
                      <!-- Dropdown Structure -->

                  </div>

                  <div class="tab-inn">
                      <div class="table-responsive table-desi">

                          <!-- <div class="title_section"><h4>Microsoft</h4></div> -->
                          <?php if(! empty($chapter)) { ?>
                          <table class="table table-hover table-list">
                              <thead>
                                  <tr>
                                      <th>Module</th>
                                      <th>Module Content</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                  </tr>
                              </thead>
                              <tbody>

                                
                                <?php $x=1; foreach ($chapter as $con){ ?>
                                  <tr>
                                      <td><a href="#"><span class="list-enq-name"><?php echo ucfirst($con->title);?></span></a></td>
                                      <td><?php echo $con->content;?></td>

                                      <td>
                                        <a href="#modalEdit<?php echo $con->id;?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                      </td>

                                      <td>
                                        <a class="modal-trigger" href="#modal<?php echo $con->id;?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        <div id="modal<?php echo $con->id;?>" class="modal modal-delete-width">
                                          <div class="modal-content">
                                            <h4>Are Sure Want to Delete ?</h4>
                                          </div>
                                          <form method="post" action="<?php echo base_url('courses/course_outline_delete/'.$con->id);?>">
                                            <input type="hidden" value="<?php echo $mainId;?>" name="main_id">
                                          <div class="modal-footer">
                                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat modal-close-btn">Close</a>
                                            <button type="submit" value="submit" class="modal-action modal-close waves-effect waves-green btn-flat modal-red">Agree</button>
                                          </div>
                                          </form>
                                        </div>
                                      </td>

                                  <div id="modalEdit<?php echo $con->id;?>" class="modal modal-delete-width">
                                    <div class="modal-header edit-modal-header-green">
                                      <h4>Edit Section</h4>
                                    </div>
                                    <form id="check" method="post" action="<?php echo base_url('courses/course_outline_edit/'.$con->id);?>">
                                    <div class="modal-content">
                                      <br>
                                      <div class="row">
                                        <div class="input-field col s12">
                                          <input id="list" type="text" class="validate" name="list" maxlength="100" value="<?php echo $con->title;?>">
                                          <label>Module / Chapter / Title</label>
                                        </div>
                                        <div class="input-field col s12 custom-bg-i">
                                          <label>List / Content</label>
                                          <textarea class="ckeditor" name="sub_list"><?php echo $con->content;?></textarea>
                                        </div>
                                        <input type="hidden" value="<?php echo $mainId ;?>" name="main_id"> 
                                        <input type="hidden" value="<?php echo $pagId;?>" name="pagination_id">
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat modal-close-btn">Close</a>
                                      <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat modal-green" value="submit">Update</button>
                                    </div>
                                    </form>
                                  </div>

                                  </tr>
                                <?php $x++; } ?>
                                

                              </tbody>

                          </table>
                          <?php } else { echo "<h4>No Content Available. Please Add if Available! Thank You</h4>"; }  ?>

                          <?php if (isset($links)) { ?>
               
                                    <?php echo $links; ?>
                                   
                                <?php } ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>