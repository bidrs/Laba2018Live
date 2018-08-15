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
                        <li><a href="<?php echo base_url('courses/cat_lists/cat_add');?>">Add New</a></li>
                      </ul>

                      <!-- Dropdown Structure -->

                  </div>
                  <div class="tab-inn">
                      <div class="table-responsive table-desi">
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>Category Title</th>
                                      <th>Tagline</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php $x=1; foreach ($content as $con): ?>
                                  <tr>
                                      <td><a href="#"><span class="list-enq-name"><?php echo $con->sector;?></span></a>
                                      </td>
                                      <td><?php echo $con->tagline;?></td>

                                      <td>
                                        <a href="<?php echo base_url('courses/cat_edit/'.$con->id);?>">
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
                                            <a href="<?php echo base_url('courses/cat_remove/'.$con->id);?>" class="modal-action modal-close waves-effect waves-green btn-flat modal-red">Agree</a>
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