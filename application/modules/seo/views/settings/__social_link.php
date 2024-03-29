
                 <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 font-weight-600 mb-0"><?php echo makeString(['social','link'])?> </h6>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">


                        <?php echo form_open('seo/seo_controller/social_link_save');?>

                               
                                    <div class="row form-group">
                                        <div class="col-sm-2"><label>  <?php echo display('facebook')?> </label></div>
                                        <div class="col-sm-10">
                                            <input type="text" name="fb" class="form-control" id="" value="<?php echo html_escape(@$s_link->fb)?>">
                                        </div>
                                    </div> 

                                     <div class="row form-group">
                                            <div class="col-sm-2"><label><?php echo display('twitter')?></label></div>
                                            <div class="col-sm-10">
                                                <input type="text" name="tw" class="form-control" id="" value=" <?php echo html_escape(@$s_link->tw)?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-2"><label><?php echo display('linkedin')?></label></div>
                                            <div class="col-sm-10">
                                                <input type="text" name="linkd" class="form-control" id="" value="<?php echo html_escape(@$s_link->linkd)?>">
                                            </div>
                                        </div>

                                        
                                        <div class="row form-group">
                                            <div class="col-sm-2"><label><?php echo display('pinterest')?></label></div>
                                            <div class="col-sm-10">
                                                <input type="text" name="pin" class="form-control" id="" value="<?php echo html_escape(@$s_link->pin)?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-2"><label><?php echo display('vimeo')?></label></div>
                                            <div class="col-sm-10">
                                                <input type="text" name="vimo" class="form-control" id="" value="<?php echo html_escape(@$s_link->vimo)?>">
                                            </div>
                                        </div> 
                                        <div class="row form-group">
                                            <div class="col-sm-2"><label><?php echo display('youtube')?></label></div>
                                            <div class="col-sm-10">
                                                <input type="text" name="youtube" class="form-control" id="" value="<?php echo html_escape(@$s_link->youtube)?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-2"><label><?php echo display('flickr')?></label></div>
                                            <div class="col-sm-10">
                                                <input type="text" name="flickr" class="form-control" id="" value="<?php echo html_escape(@$s_link->flickr)?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-2"><label><?php echo display('vk')?></label></div>
                                            <div class="col-sm-10">
                                                <input type="text" name="vk" class="form-control" id="" value="<?php echo html_escape(@$s_link->vk)?>">
                                            </div>
                                        </div> 

                                        <div class="row form-group">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-sm btn-success"> <?php echo display('update')?></button>
                                            </div>
                                        </div> 


                        <?php echo form_close();?>


                    </div>
                </div>
           