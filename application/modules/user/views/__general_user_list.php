
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 font-weight-600 mb-0"><?php echo makeString(['general','user'])?></h6>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                         <table class="table table-bordered table-hover">
                            <tr class="t_bg">
                                <th><?php echo display('sl')?></th>
                                <th><?php echo display('picture')?></th>
                                <th><?php echo display('full_name')?></th>
                                <th><?php echo display('email')?></th>
                                <th><?php echo display('address')?></th>
                                <th> In Time</th>
                                <th><?php echo display('action')?></th>
                            </tr>

                        <?php
                            $sl = 1;
                            foreach ($query as $user_list) {

                                if(!empty($user_list['photo'])){
                                    $img = base_url() . $user_list['photo'];
                                }else{
                                    $img = base_url('uploads/user/demo-pic.png');
                                }
                 
                        ?>
                                <tr>
                                    <th><?php echo $sl; ?></th>
                                    <th>
                                    <img src="<?php echo @$img; ?>" width="50"></th>

                                    <td> <?php echo html_escape($user_list['name']);?></td>
                                    <td><?php echo html_escape($user_list['email']);?></td>
                                    <td> <?php echo html_escape($user_list['address_one']); ?></td>
                                    <td><?php echo 'In:' .  html_escape($user_list['login_time']);?></td>
                                    <td>
                                        <?php if($this->permission->check_label('user_list')->delete()->access()):?>
                                        <a href="<?php echo base_url()?>user/users/delete_user/<?php echo html_escape($user_list['id']);?>" onclick="return confirm('<?php echo display('do_you_want_to_delete_this')?>')" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i></a>
                                        <?php endif;?>
                                    </td>
                                
                                </tr>
                            <?php
                                $sl++;
                                }
                            ?>
                        </table>
                    </div>
                     </div>
                </div>
            