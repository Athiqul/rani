<script src="<?php echo base_url() ?>assets/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<!-- <script src="<?php echo base_url() ?>assets/ck/ckeditor5/ckeditor.js" type="text/javascript"></script>  -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/Bootstrap-4-Tag-Input/tagsinput.css">
<script src="<?php echo base_url() ?>assets/plugins/Bootstrap-4-Tag-Input/tagsinput.js" type="text/javascript"></script>


<div class="card mb-4">

<?php echo validation_errors('<div class="error">', '</div>'); ?>

    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h6 class="fs-17 font-weight-600 mb-0">Update Listing of <?php echo $review['website_name']?></h6>
            </div>
        </div>
    </div>

    <div class="card-body">

        <?php
        include('common_file/array_file.php');
        $home_page = (isset($home_page)) ? $home_page : 0;
        $other_position = (isset($other_position)) ? $other_position : 1;
      
       
        ?>

<form action="<?php echo base_url('dashboard/addtips/update_list/'.$review['id'])?>" method="POST" enctype="multipart/form-data">
        <div class="row">

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Website Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?php echo set_value('website_name',$review['website_name']); ?>" placeholder="Website Name" name="website_name" id="website_name" required>
                </div>
            </div>

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Owner <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?php echo set_value('owner',$review['owner']); ?>" placeholder="Owner Name" name="owner" id="owner" required>
                </div>
            </div>


            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Founding Date<span class="text-danger">*</span></label>
                    <input type="date" class="form-control" value="<?php echo set_value('founding_date',$review['founding_date']); ?>" placeholder="Founding Date" name="founding_date" id="founding_date" required>
                </div>
            </div>

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Bonus Code <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?php echo set_value('bonus_code',$review['bonus_code']); ?>" placeholder="Bonus Code" name="bonus_code" id="bonus_code" required>
                </div>
            </div>

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Percentage Payout <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?php echo set_value('percentage_payout',$review['percentage_payout']); ?>" name="percentage_payout" id="percentage_payout" required>
                </div>
            </div>

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Payout Speed <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="payout_speed" value="<?php echo set_value('payout_speed',$review['payout_speed']); ?>  " id="payout_speed" required>
                </div>
            </div>

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Number of games<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="number_of_games" value="<?php echo set_value('number_of_games',$review['number_of_games']); ?>"  id="number_of_games" required>
                </div>
            </div>

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Max Jackpot<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?php echo set_value('max_jackpot',$review['max_jackpot']); ?>"  name="max_jackpot" id="max_jackpot" required>
                </div>
            </div>

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Compatiable With<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?php echo set_value('compatible_with',$review['compatible_with']); ?>" name="compatible_with" id="compatible_with" required>
                </div>
            </div>

            <div class="col-md-12 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Language<span class="text-danger">*</span></label>
                    <input type="text" data-role="tagsinput" value="<?php echo set_value('language',$review['language']); ?>" class="form-control" name="language" id="language" required>

                </div>
            </div>

            <div class="col-md-12 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Banking Option<span class="text-danger">*</span></label>

                    <input name="available_banking_options" value="<?php echo set_value('available_banking_options',$review['available_banking_options']); ?>"  data-role="tagsinput"  id="available_games" class="form-control" required />

                </div>
            </div>

            <div class="col-md-12 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Available Games<span class="text-danger">*</span></label>
                    <input name="available_games" data-role="tagsinput"  value="<?php echo set_value('available_games',$review['available_games']); ?>"  id="available_games" class="form-control" required />
                </div>
            </div>

            <div class="col-md-6 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Reviewer Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?php echo  set_value('reviewer_name',$review['reviewer_name']); ?>" name="reviewer_name" id="reviewer_name" required>
                </div>
            </div>

            <div class="col-md-6 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Date<span class="text-danger">*</span></label>
                    <input type="text" class="form-control datepicker1" name="date" id="date" value="<?php echo  set_value('date',$review['date']); ?>" required />
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label class="font-weight-600"> About </label>
                    <textarea class="form-control" id="details"  name="about" rows="10" cols="80"><?php echo htmlspecialchars_decode( set_value('about',$review['about'])); ?></textarea>

                </div>
            </div>


            <div class="col-md-12 pr-md-1">
            <?php if (!empty($positive_aspects)) : ?>
        <?php foreach ($positive_aspects as $positive) : ?>
            <div class="form-group" >
                    <label class="font-weight-600">positive Aspects<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" name="positive_aspects[]" value="<?php echo $positive['description']?>" class="form-control" placeholder="Type Positive Aspects" required>
                       
                    </div>
                </div>

                <?php endforeach; ?>
                <?php endif; ?>

                <div class="form-group" id="bankingOptionsContainer">
                   
                    <div class="input-group">
                        <input type="text" name="positive_aspects[]" class="form-control" placeholder="Type Positive Aspects" >
                        <div class="input-group-append">
                            <button type="button" class="btn btn-success" onclick="addMoreInput()">Add More</button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                function addMoreInput() {
                    var newInput = '<div class="input-group mt-2">' +
                        '<input type="text" name="postitive_aspects[]" class="form-control" placeholder="Type Positive Aspects" required>' +
                        '<div class="input-group-append">' +
                        '<button type="button" class="btn btn-danger" onclick="removeInput(this)">Remove</button>' +
                        '</div>' +
                        '</div>';

                    $('#bankingOptionsContainer').append(newInput);
                }

                function removeInput(button) {
                    $(button).closest('.input-group').remove();
                }
            </script>

            <div class="col-md-12 pr-md-1">

            <?php if (!empty($negative_aspects)) : ?>
        <?php foreach ($negative_aspects as $negative) : ?>
            <div class="form-group" >
                    <label class="font-weight-600">Negative Aspects<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" name="positive_aspects[]" value="<?php echo $negative['description']?>" class="form-control" placeholder="Type Positive Aspects" required>
                       
                    </div>
                </div>

                <?php endforeach; ?>
                <?php endif; ?>
                <div class="form-group" id="negativeAspects">
                    
                    <div class="input-group">
                        <input type="text" name="negative_aspects[]" class="form-control" placeholder="Type Negative Aspects" >
                        <div class="input-group-append">
                            <button type="button" class="btn btn-success" onclick="addMoreNegativeInput()">Add More</button>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                function addMoreNegativeInput() {
                    var newInput = '<div class="input-group mt-2">' +
                        '<input type="text" name="negative_aspects[]" class="form-control" placeholder="Type Negative Aspects" required>' +
                        '<div class="input-group-append">' +
                        '<button type="button" class="btn btn-danger" onclick="removeNegativeInput(this)">Remove</button>' +
                        '</div>' +
                        '</div>';

                    $('#negativeAspects').append(newInput);
                }

                function removeNegativeInput(button) {
                    $(button).closest('.input-group').remove();
                }
            </script>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="font-weight-600"> Software And Games Collection Rating </label>
                    <input type="text" name="software_rating" value="<?php echo set_value('software_rating',$review['software_rating']); ?>" class="form-control" required>

                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="font-weight-600"> Software And Games Collection Details </label>
                    <input type="text" name="software_games_collection" value="<?php echo set_value('software_games_collection',$review['software_games_collection']); ?>" class="form-control" required>

                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <label class="font-weight-600"> Banking Option Ratings </label>
                    <input type="text" name="banking_options_rating" value="<?php echo set_value('banking_options_rating',$review['banking_options_rating']); ?>" class="form-control" required>

                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="font-weight-600"> Banking Option Details </label>
                    <input type="text" name="banking_options_details" value="<?php echo set_value('banking_options_details',$review['banking_options_details']); ?>" class="form-control" required>

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="font-weight-600"> Security Fairness Ratings </label>
                    <input type="text" name="security_fairness_rating" value="<?php echo set_value('security_fairness_rating',$review['security_fairness_rating']); ?>" class="form-control" required>

                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="font-weight-600"> Security Fairness Details </label>
                    <input type="text" name="security_fairness_details" value="<?php echo set_value('security_fairness_details',$review['security_fairness_details']); ?>" class="form-control" required>

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="font-weight-600"> Mobile Casino Ratings </label>
                    <input type="text" name="mobile_casino_rating" value="<?php echo set_value('mobile_casino_rating',$review['mobile_casino_rating']); ?>" class="form-control" required>

                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="font-weight-600"> Mobile Casino Details </label>
                    <input type="text" name="mobile_casino_details" value="<?php echo set_value('mobile_casino_details',$review['mobile_casino_details']); ?> " class="form-control" required>

                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <label class="font-weight-600">Bonus Promotions Rating</label>
                    <input type="text"  value="<?php echo set_value('bonus_promotions_rating',$review['bonus_promotions_rating']); ?> "  name="bonus_promotions_rating" class="form-control" required>

                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="font-weight-600"> Bonus Promotions Details </label>
                    <input type="text" name="bonus_promotions_details"  value="<?php echo set_value('bonus_promotions_details',$review['bonus_promotions_details']); ?> "   class="form-control" required>

                </div>
            </div>





        </div>


        <div class="row">

            <div class="col-md-6 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Mobile App Screen Website Redirect Image<span class="text-danger">*</span></label>
                    <input type="file" name="mobile_app_screens_upload" id="image_file" class="form-control-file" accept="image/*" onchange="validateImageFile(event)" >
                    <small class="form-text text-muted">Accepted formats: JPEG, PNG, GIF, etc.</small>
                    <div id="imagePreview" class="mt-2 col-md-4 ">
                        <img src="  <?php echo base_url('uploads/' . $review['mobile_app_screens_upload']); ?>" height="200px" alt="">
                    </div>
                </div>
            </div>


            <script>
                function validateImageFile(event) {
                    const file = event.target.files[0];

                    if (file) {
                        const fileType = file.type.toLowerCase();
                        const allowedExtensions = ['image/jpeg', 'image/png', 'image/gif'];

                        if (allowedExtensions.includes(fileType)) {
                            // Valid image file selected, show preview
                            const reader = new FileReader();

                            reader.onload = function(e) {
                                const imgElement = document.createElement('img');
                                imgElement.src = e.target.result;
                                imgElement.style.maxWidth = '100%';
                                imgElement.style.height = '200px';
                                document.getElementById('imagePreview').innerHTML = ''; // Clear previous preview
                                document.getElementById('imagePreview').appendChild(imgElement);
                            };

                            reader.readAsDataURL(file);
                        } else {
                            // Invalid file type selected, reset input field
                            event.target.value = '';
                            document.getElementById('imagePreview').innerHTML = '<p class="text-danger">Please select a valid image file (JPEG, PNG, GIF).</p>';
                        }
                    }
                }
            </script>


            <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-600"> Redirect Image Website Name </label>
                    <input type="text" name="mobile_app_url"  value="<?php echo set_value('mobile_app_url',$review['mobile_app_url']); ?> "   class="form-control" required>

                </div>
            </div>


            <div class="col-md-6 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Listing Image Upload<span class="text-danger">*</span></label>
                    <input type="file" name="image_upload" id="image_file" class="form-control-file" accept="image/*" onchange="validateImageView(event)">
                    <small class="form-text text-muted">Accepted formats: JPEG, PNG, GIF, etc.</small>
                    <div id="imageOverview" class="mt-2 col-md-4 ">
                    <div id="imagePreview" class="mt-2 col-md-4 ">
                        <img src="  <?php echo base_url('uploads/' . $review['image_upload']); ?>" height="200px" alt="">
                    </div>
                    </div>
                </div>
            </div>


            <script>
                function validateImageView(event) {
                    const file = event.target.files[0];

                    if (file) {
                        const fileType = file.type.toLowerCase();
                        const allowedExtensions = ['image/jpeg', 'image/png', 'image/gif'];

                        if (allowedExtensions.includes(fileType)) {
                            // Valid image file selected, show preview
                            const reader = new FileReader();

                            reader.onload = function(e) {
                                const imgElement = document.createElement('img');
                                imgElement.src = e.target.result;
                                imgElement.style.maxWidth = '100%';
                                imgElement.style.height = '200px';
                                document.getElementById('imageOverview').innerHTML = ''; // Clear previous preview
                                document.getElementById('imageOverview').appendChild(imgElement);
                            };

                            reader.readAsDataURL(file);
                        } else {
                            // Invalid file type selected, reset input field
                            event.target.value = '';
                            document.getElementById('imageOverview').innerHTML = '<p class="text-danger">Please select a valid image file (JPEG, PNG, GIF).</p>';
                        }
                    }
                }
            </script>


            <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-600">Welcome Bonus</label>
                    <input type="text" name="welcome_bonus" value="<?php echo set_value('welcome_bonus',$review['welcome_bonus']); ?> "   class="form-control" required>

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="font-weight-600">Win Rate</label>
                    <input type="text" name="win_rate" class="form-control" value="<?php echo set_value('win_rate',$review['win_rate']); ?> " required>

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="font-weight-600">Payout</label>
                    <input type="text" name="payout" class="form-control" value="<?php echo set_value('payout',$review['payout']); ?>" required>

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="font-weight-600">Rating</label>
                    <input type="text" name="rating" class="form-control" value="<?php echo set_value('rating',$review['rating']); ?>" required>

                </div>
            </div>

           <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-600">Website Url</label>
                    <input type="text" name="website_url" value="<?php echo set_value('website_url',$review['website_url']); ?>" class="form-control" required>

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-600">Color</label>
                    <input type="color" name="color" value="<?php echo set_value('color',$review['color']); ?>" class="form-control" required>

                </div>
            </div>
        </div>





       
       


       


        


      

        <input type="hidden" id="base_url" name="base_url" value="<?php echo base_url() ?>">
        <input type="hidden" id="savestatus" name="savestatus" value="">



        <div class="row">
            <div class="col-md-2">
                <button type="submit" class="btn btn-md btn-success float-right">Update</button>
            </div>
        </div>

        <?php echo form_close(); ?>

    </div>
</div>


<script src="<?php echo base_url() ?>assets/dist/js/ck.js"></script>