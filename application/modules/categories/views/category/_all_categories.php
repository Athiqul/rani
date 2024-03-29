
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 font-weight-600 mb-0"><?php echo display('category_list');?></h6>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
     
                       <div class="table-responsive" id="table">
                        <?php echo form_open_multipart('categories/category/save_category_positions');?>

                        <table class="table table-bordered table-striped table-hover bg-white m-0 card-table">
                     
                            <thead>
                                <tr>
                                    <th>#sl </th>
                                    <th><?php echo display('category_name'); ?></th>
                                    <th><?php echo display('slug'); ?></th>
                                    <th><?php echo display('category_image'); ?></th>
                                    <th><?php echo display('action'); ?></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $sl=1; 
                                foreach ($all_categories as  $category) {?>
                                <tr>
                                  <td><?php echo $sl++; ?></td>
                                  <td ><?php echo html_escape($category->category_name); ?></td>
                                  <td ><?php echo html_escape($category->slug); ?></td>
                                  <td width="20%"><img src="<?php echo base_url($category->category_imgae);?>" width="40%">
                                    
                                    <?php if($this->permission->check_label('category_list')->update()->access()):?>
                                        <?php if($category->img_status==1){?>
                                        <a class="btn btn-sm btn-danger" onclick="imgStatus(<?php echo html_escape($category->category_id);?>)">
                                        <i class="hvr-buzz-out far fa-times-circle"></i></a>
                                        <?php }else{?>
                                        <a class="btn btn-sm btn-success" onclick="imgStatus(<?php echo html_escape($category->category_id);?>)">
                                        <i class="hvr-buzz-out far fa-check-circle"></i>
                                         </a>
                                        <?php }?>
                                    <?php endif?>

                                  </td>

                                    <td>
                                        <?php if($this->permission->check_label('category_list')->update()->access()):?>
                                        <a href="<?php echo base_url(); ?>categories/category/update_view/<?php echo html_escape($category->category_id);?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                        <?php endif?>

                                        <?php if($this->permission->check_label('category_list')->delete()->access()):?>
                                            <a  onclick="return confirm('<?php echo display('do_you_want_to_delete_this')?>')"  href="<?php echo base_url(); ?>categories/category/delete/<?php echo html_escape($category->category_id);?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        <?php endif?>
                                    </td>
                                </tr>
                                <?php }?>
                             </tbody>

                            </table>
                        <?php echo form_close();?>

                       </div>

                       <input type="hidden" id="base_url" value="<?php echo base_url()?>">

                     </div>
                </div>
            