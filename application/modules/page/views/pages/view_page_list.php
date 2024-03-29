

                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 font-weight-600 mb-0"><?php echo display('page_list');?></h6>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                        <?php echo form_open_multipart('page/category/save_category_positions');?>

                        <table class="table table-bordered table-striped table-hover bg-white m-0 card-table">
                         
                          <thead>
                               <tr>
                                <th><?php echo display('sl')?> </th>
                                <th><?php echo display('title'); ?></th>
                                <th><?php echo display('writer'); ?></th>
                                <th><?php echo display('date'); ?></th>
                                <th><?php echo display('status'); ?></th>
                                <th><?php echo display('action'); ?></th>
                              </tr>
                          </thead>
                         <tbody>
                           <?php
                           $s=1;
                           foreach ($page_info as  $page_value) { ?>
                            <tr>
                              <td><?php echo $s++;?></td>
                              <td><?php echo html_escape($page_value->title);?></td>
                              <td><?php  echo html_escape($page_value->name);?></td> 
                              <td><?php  echo html_escape($page_value->publish_date);?></td> 
                              <td>
                                <?php if($this->permission->check_label('page_list')->update()->access()):?>

                                <?php  
                                  if($page_value->status==1){?>
                                      <a  class="btn btn-success w-100p mb-2 mr-1 rounded-pill text-white" href="<?php echo base_url(); ?>page/page_controller/unpublishd/<?php echo html_escape($page_value->page_id);?>"><?php echo display('unpublish')?></a>
                                  <?php }else{?> 
                                  <a  class="btn btn-warning w-100p mb-2 rounded-pill text-white" href="<?php echo base_url(); ?>page/page_controller/publishd/<?php echo html_escape($page_value->page_id);?>"><?php echo display('publish')?></a>
                                    <?php }?>
                                <?php endif?>
                               </td> 

                              <td>

                                <?php if($this->permission->check_label('page_list')->update()->access()):?>
                                <a href="<?php echo base_url(); ?>page/page_controller/edit_page/<?php echo html_escape($page_value->page_id);?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                <?php endif?>

                                <?php if($this->permission->check_label('page_list')->delete()->access()):?>
                                <a  onclick="return confirm('<?php echo display('do_you_want_to_delete_this')?>')"  href="<?php echo base_url(); ?>page/page_controller/delete_page/<?php echo html_escape($page_value->page_id);?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                <?php endif?>

                              </td> 
                             
                            </tr>
                           <?php }?>
                         </tbody>
                        </table>

                        <?php echo form_close();?>
                       </div>
                     </div>
                </div>
           