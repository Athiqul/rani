
<div class="card mb-4">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h6 class="fs-17 font-weight-600 mb-0"><?php echo (!empty($title)?$title:null) ?></h6>
            </div>
            <div class="text-right">
                <div class="actions">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">

        <div class="">
                    <table class="datatable table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('role_name') ?></th>
                                <th><?php echo display('description') ?></th>
                                <th><?php echo display('action') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($role)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($role as $value) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $value->role_name; ?></td>
                                <td><?php echo $value->role_description; ?></td>
                                <td>
                                    <a href="<?php echo base_url("dashboard/role/view/$value->role_id") ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="<?php echo base_url("dashboard/role/edit_role/$value->role_id") ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="<?php echo base_url("dashboard/role/delete/$value->role_id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>

                
    </div>
</div>



