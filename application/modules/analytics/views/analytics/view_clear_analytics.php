

                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 font-weight-600 mb-0"><?php echo makeString(['clear','analytics','data'])?></h6>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="row">

                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <a  class="btn btn-warning btn-success m-b-5 cache_modal" href="<?php echo base_url();?>analytics/user_analytics/delete">
                                  <i class="fa fa-trash"></i> <?php echo makeString(['clear','data'])?>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">

                                <?php $an = json_decode(@$status);?>                           
                                <?php if(@$an->user_analytics=='active'){ ?>

                                    <a href="<?php echo base_url();?>analytics/user_analytics/analytics_status/<?php echo @$an->user_analytics?>" class="btn btn-labeled btn-success m-b-5" >
                                        <span class="btn-label"><i class="fa fa-check"></i></span><?php echo makeString(['desable','analytics'])?>  
                                    </a>

                                <?php } else { ?>

                                    <a href="<?php echo base_url();?>analytics/user_analytics/analytics_status/<?php echo @$an->user_analytics?>" class="btn btn-labeled btn-danger m-b-5" >
                                        <span class="btn-label"><i class="fa fa-times"></i></span><?php echo makeString(['enable','analytics'])?>  
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
        


                    </div>
                </div>
            