<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover bg-white m-0 card-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Website</th>
                        <th>Bonus Code</th>
                        <th>Reviewer Name</th>
                        <th>Welcome Bonus</th>
                        <th>Win Rate</th>
                        <th>Payout</th>
                        <th>Rating</th>
                        <th width="100">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($newslists)) : ?>
                        <?php $sl = 1; ?>
                        <?php foreach ($newslists as $row) : ?>
                            
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td>
                                    <?php if ($row['image_upload']) : ?>
                                        <?php $imageLink = base_url('uploads/' . $row['image_upload']); ?>
                                        <img src="<?php echo html_escape($imageLink); ?>" width="60">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo html_escape($row['website_name']); ?></td>
                                <td>
                                    <span class="badge badge-success mr-1">
                                        <?php echo html_escape(ucwords($row['bonus_code'])); ?>
                                    </span>
                                </td>
                                <td><?php echo html_escape($row['reviewer_name']); ?></td>
                                <td><?php echo html_escape($row['welcome_bonus']); ?></td>
                                <td><?php echo html_escape($row['win_rate']); ?></td>
                                <td><?php echo html_escape($row['payout']); ?></td>
                                <td><?php echo html_escape($row['rating']); ?></td>
                                <td>
                                    
                                        <a href="<?php echo base_url('dashboard/addtips/edit_list/' . html_escape($row['id'])); ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                  
                                        
                                    
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="10">
                                <div class="alert alert-danger" role="alert">
                                    <span class="close" data-dismiss="alert">×</span>
                                    <h4 class="alert-heading">Posts not found</h4>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <br>
    </div>
</div>
