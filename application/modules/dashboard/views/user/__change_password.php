

                <div class="card mb-4">


                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 font-weight-600 mb-0"><?php echo display('password_change')?></h6>
                            </div>
                        </div>
                    </div>

                        <?php echo form_open_multipart('dashboard/profile/save_change');?>


                            <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-weight-600">Old Password<span class="text-danger">*</span></label>
                                                <input type="password" name="old_password" class="form-control" required="1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-weight-600"><?php echo display('new_password')?><span class="text-danger">*</span></label>
                                                <input type="password" name="new_password" class="form-control" required="1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-weight-600"> <?php echo display('confirm_password')?><span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" name="confirm_password" required="1">
                                            </div>
                                        </div>                
                                    </div>

                                    <button type="submit" class="btn  btn-primary"><?php echo makeString(['save','change'])?></button>
                                    
                            </div>
                        <?php echo form_close()?>
                </div>
            