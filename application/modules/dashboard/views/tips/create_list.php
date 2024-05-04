<script src="<?php echo base_url() ?>assets/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<!-- <script src="<?php echo base_url() ?>assets/ck/ckeditor5/ckeditor.js" type="text/javascript"></script>  -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/Bootstrap-4-Tag-Input/tagsinput.css">
<script src="<?php echo base_url() ?>assets/plugins/Bootstrap-4-Tag-Input/tagsinput.js" type="text/javascript"></script>


<div class="card mb-4">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h6 class="fs-17 font-weight-600 mb-0">Create Listing</h6>
            </div>
        </div>
    </div>

    <div class="card-body">

        <?php
        include('common_file/array_file.php');
        $home_page = (isset($home_page)) ? $home_page : 0;
        $other_position = (isset($other_position)) ? $other_position : 1;
      
        echo form_open_multipart('dashboard/addtips/store_list');
        ?>

        <div class="row">

            <div class="col-md-12 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Website Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Website Name" name="website_name" id="website_name" required>
                </div>
            </div>

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Bonus Code <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Bonus Code" name="bonus_code" id="bonus_code" required>
                </div>
            </div>

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Percentage Payout <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="percentage_payout" id="percentage_payout" required>
                </div>
            </div>

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Payout Speed <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="payout_speed" id="payout_speed" required>
                </div>
            </div>

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Number of games<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="number_of_games" id="number_of_games" required>
                </div>
            </div>

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Max Jackpot<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="max_jackpot" id="max_jackpot" required>
                </div>
            </div>

            <div class="col-md-4 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Compatiable With<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="compatible_with" id="compatible_with" required>
                </div>
            </div>

            <div class="col-md-12 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Language<span class="text-danger">*</span></label>
                    <input type="text" data-role="tagsinput" value="Bangla, German, Greek, English, Spanish, Finnish, French, Hindi, Creation" class="form-control" name="languade" id="language" required>

                </div>
            </div>

            <div class="col-md-12 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Banking Option<span class="text-danger">*</span></label>

                    <input name="available_banking_options" data-role="tagsinput" value="Visa,Master,Skrill" id="available_games" class="form-control" required />

                </div>
            </div>

            <div class="col-md-12 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Available Games<span class="text-danger">*</span></label>
                    <input name="available_games" data-role="tagsinput" value="7 Slots,Blackjack,Roulette,Baccarat" id="available_games" class="form-control" required />
                </div>
            </div>

            <div class="col-md-6 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Reviewer Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="reviewer_name" id="reviewer_name" required>
                </div>
            </div>

            <div class="col-md-6 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Date<span class="text-danger">*</span></label>
                    <input type="text" class="form-control datepicker1" name="date" id="date" value="<?php echo date("Y-m-d") ?>" required />
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label class="font-weight-600"> About </label>
                    <textarea class="form-control" id="details" placeholder="about" name="about" rows="10" cols="80" required></textarea>

                </div>
            </div>


            <div class="col-md-12 pr-md-1">
                <div class="form-group" id="bankingOptionsContainer">
                    <label class="font-weight-600">positive Aspects<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" name="positive_aspects[]" class="form-control" placeholder="Type Positive Aspects" required>
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
                <div class="form-group" id="negativeAspects">
                    <label class="font-weight-600">Negative Aspects<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" name="negative_aspects[]" class="form-control" placeholder="Type Negative Aspects" required>
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
                    <input type="text" name="software_rating" class="form-control" required>

                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="font-weight-600"> Software And Games Collection Details </label>
                    <input type="text" name="software_games_collection" class="form-control" required>

                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <label class="font-weight-600"> Banking Option Ratings </label>
                    <input type="text" name="banking_options_rating" class="form-control" required>

                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="font-weight-600"> Banking Option Details </label>
                    <input type="text" name="banking_options_details" class="form-control" required>

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="font-weight-600"> Security Fairness Ratings </label>
                    <input type="text" name="security_fairness_ratings" class="form-control" required>

                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="font-weight-600"> Security Fairness Details </label>
                    <input type="text" name="security_fairness_details" class="form-control" required>

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="font-weight-600"> Mobile Casino Ratings </label>
                    <input type="text" name="mobile_casino_ratings" class="form-control" required>

                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="font-weight-600"> Mobile Casino Details </label>
                    <input type="text" name="mobile_casino_details" class="form-control" required>

                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <label class="font-weight-600">Bonus Promotions Rating</label>
                    <input type="text" name="bonus_promotions_rating" class="form-control" required>

                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label class="font-weight-600"> Bonus Promotions Details </label>
                    <input type="text" name="bonus_promotions_details" class="form-control" required>

                </div>
            </div>





        </div>


        <div class="row">

            <div class="col-md-6 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Mobile App Screen Website Redirect Image<span class="text-danger">*</span></label>
                    <input type="file" name="mobile_app_screens_upload" id="image_file" class="form-control-file" accept="image/*" onchange="validateImageFile(event)" required>
                    <small class="form-text text-muted">Accepted formats: JPEG, PNG, GIF, etc.</small>
                    <div id="imagePreview" class="mt-2 col-md-4 "></div>
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
                    <input type="text" name="mobile_app_url" class="form-control" required>

                </div>
            </div>


            <div class="col-md-6 pr-md-1">
                <div class="form-group">
                    <label class="font-weight-600">Listing Image Upload<span class="text-danger">*</span></label>
                    <input type="file" name="image_upload" id="image_file" class="form-control-file" accept="image/*" onchange="validateImageView(event)" required>
                    <small class="form-text text-muted">Accepted formats: JPEG, PNG, GIF, etc.</small>
                    <div id="imageOverview" class="mt-2 col-md-4 "></div>
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
                    <input type="text" name="welcome_bonus" class="form-control" required>

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="font-weight-600">Win Rate</label>
                    <input type="text" name="win_rate" class="form-control" required>

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="font-weight-600">Payout</label>
                    <input type="text" name="payout" class="form-control" required>

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="font-weight-600">Rating</label>
                    <input type="text" name="rating" class="form-control" required>

                </div>
            </div>

           <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-600">Website Url</label>
                    <input type="text" name="website_url" class="form-control" required>

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-600">Color</label>
                    <input type="color" name="color" class="form-control" required>

                </div>
            </div>
        </div>





       
       


       


        


      

        <input type="hidden" id="base_url" name="base_url" value="<?php echo base_url() ?>">
        <input type="hidden" id="savestatus" name="savestatus" value="">



        <div class="row">
            <div class="col-md-2">
                <button type="submit" class="btn btn-md btn-success float-right">Create Listing</button>
            </div>
        </div>

        <?php echo form_close(); ?>

    </div>
</div>


<script src="<?php echo base_url() ?>assets/dist/js/ck.js"></script>