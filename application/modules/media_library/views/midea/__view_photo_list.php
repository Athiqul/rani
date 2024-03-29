
<?php
    $atts = array(
        'width' => '300',
        'height' => '150',
        'scrollbars' => 'yes',
        'status' => 'yes',
        'resizable' => 'yes',
        'screenx' => '500',
        'screeny' => '100'
    );

    $user_type = $this->session->userdata('user_type');
?>    




                <div class="card mb-4">

                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="fs-17 font-weight-600 mb-0"><?php echo makeString(['photo','list'])?></h6>
                        </div>
                    </div>

                    <div class="card-body">

                        

                            <?php
                                @$attt = array('method' => 'get' );
                                echo form_open('media_library/media_controller/photo_list',$attt);
                            ?>

                                <div class="form-group">
                                    <label class="font-weight-600"><?php echo display('search')?></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" id="search" placeholder="<?php echo display('search')?>">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="submit"><?php echo display('search')?></button>
                                        </div>
                                    </div>
                                </div>

                            <?php echo form_close();?>


                            <div class="table-responsive">
                                <table class="table table-bordered table-hover medias-top">
                                    <tr>
                                        <th>Sl</th>
                                        <th><?php echo display('photo')?></th>
                                        <th><?php echo display('photo_name')?></th>
                                        <th><?php echo makeString(['image','url'])?></th>
                                        <?php if (@$user_type != 1) { ?> <th colspan="3"><?php echo display('action')?></th><?php } ?>
                                    </tr>

                                    <?php
                                        $sl = 1;
                                        foreach ($query as $row) {
                                            $imgurl = ($row['image_base_url']?$row['image_base_url']:base_url());
                                    ?>
                                        <tr>
                                            <th><?php echo $sl; ?></th>
                                            <td><img src="<?php echo $imgurl . 'uploads/thumb/' . html_escape(@$row['actual_image_name']); ?>" width="42" height="30" /></td>
                                            <td><?php echo html_escape($row['picture_name']); ?></td>
                                            <td><input type="text" value="<?php echo $imgurl . 'uploads/' . html_escape(@$row['actual_image_name']); ?>" onClick="this.setSelectionRange(0, this.value.length)" /></td>

                                            <?php if ($user_type != 1) { ?>
                                                
                                                <th><a onclick="delete_cnf('<?php echo base_url(); ?>media_library/media_controller/delete/<?php echo html_escape($row['id']); ?>')" href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></li></a></th>
                                                
                                            <?php } ?>
                                        </tr>
                                    <?php
                                        $sl++;
                                    }
                                    ?>
                                </table>    
                            </div>
                        <?php echo htmlspecialchars_decode($links); ?>

                    </div>
                </div>
            