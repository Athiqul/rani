<?php 
    $orgDate = date("Y-m-d");  
    $newDate = date("l, d M, Y", strtotime($orgDate)); 

    $CI =& get_instance();
    $CI->load->model('settings');
    $ot = json_decode($CI->settings->get_previous_settings('settings', 115));


?>
    <!-- /.End of Sign up  Sing in -->
    <div class="main-content animsition">
        <div class="top-header dark">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-md-5">
                        <ul class="top-socia-share">
                            <li>
                                <span class="headre-weather"><i class="fa fa-calendar-check-o"></i>&nbsp; <?php echo $newDate;?></span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-7">
                        <div class="header-nav">
                            <ul>
                                <?php if($ot->contact_status=='1'){ ?>
                                    <li><a href="<?php echo base_url();?>contact/index"><?php echo display('contact')?></a></li>
                                <?php } ?>
                                
                                <?php if($this->session->userdata('user_type')==5){?>
                                    <li><a href="<?php echo base_url();?>users/user_profile"> <?php echo display('my_profile')?> </a></li>
                                    <li><a href="<?php echo base_url();?>signout/index"> <?php echo display('logout')?> </a></li>
                                <?php } else{ ?>
                                    <?php if(@$ot->reg_status=='1'){?>
                                        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#user-modal2"><?php echo display('login')?>/<?php echo display('registration')?></a></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


         <div class="w-full space-y-1 lg:space-y-1 border rounded">

                        <div class="mt-4 pl-4 space-y-0">
                            <h1 class="text-lg font-bold text-blue-800">সর্বশেষ সংবাদ</h1>
                        </div>
                        <hr>
                        <div class="news-card-small flex justify-between items-start space-x-0 space-y-0">

                            <div class="">
                                <span class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full">১</span>
                            </div>
                            <div class="news-card-small-content px-3 py-0">
                                <h4 class="news-small-heading text-sm font-extrabold">
                                    <a href="/pages/india-v-bangladesh---icc-men-s-t20-world-cup">বাংলাদেশের
                                        ব্যাটিং ব্যর্থতার পর সাড়ে চারশ পেরিয়ে শ্রীলঙ্কার লিড..</a>
                                </h4>
                                <div class="flex justify-between items-center  text-slate-400">
                                    <span class=" text-sm ">১২ মিনিট আগে</span>
                                </div>
                                <hr class="mt-2">
                            </div>
                        </div>






                        <div class="news-card-small flex justify-between items-start space-x-0 space-y-0">

                            <div class="">
                                <span class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full">২</span>
                            </div>
                            <div class="news-card-small-content px-3 py-0">
                                <h4 class="news-small-heading text-sm font-extrabold">
                                    <a href="/pages/india-v-bangladesh---icc-men-s-t20-world-cup">বাংলাদেশের
                                        ব্যাটিং ব্যর্থতার পর সাড়ে চারশ পেরিয়ে শ্রীলঙ্কার লিড..</a>
                                </h4>
                                <div class="flex justify-between items-center  text-slate-400">
                                    <span class=" text-sm ">১২ মিনিট আগে</span>
                                </div>
                                <hr class="mt-1">
                            </div>
                        </div>

                        <div class="news-card-small flex justify-between items-start space-x-0 space-y-0">

                            <div class="">
                                <span class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full">৩</span>
                            </div>
                            <div class="news-card-small-content px-3 py-0">
                                <h4 class="news-small-heading text-sm font-extrabold">
                                    <a href="/pages/india-v-bangladesh---icc-men-s-t20-world-cup">বাংলাদেশের
                                        ব্যাটিং ব্যর্থতার পর সাড়ে চারশ পেরিয়ে শ্রীলঙ্কার লিড..</a>
                                </h4>
                                <div class="flex justify-between items-center  text-slate-400">
                                    <span class=" text-sm ">১২ মিনিট আগে</span>
                                </div>
                                <hr class="mt-1">
                            </div>
                        </div>

                        <div class="news-card-small flex justify-between items-start space-x-0 space-y-0">

                            <div class="">
                                <span class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full">৪</span>
                            </div>
                            <div class="news-card-small-content px-3 py-0">
                                <h4 class="news-small-heading text-sm font-extrabold">
                                    <a href="/pages/india-v-bangladesh---icc-men-s-t20-world-cup">বাংলাদেশের
                                        ব্যাটিং ব্যর্থতার পর সাড়ে চারশ পেরিয়ে শ্রীলঙ্কার লিড..</a>
                                </h4>
                                <div class="flex justify-between items-center  text-slate-400">
                                    <span class=" text-sm ">১২ মিনিট আগে</span>
                                </div>

                            </div>
                        </div>



                    </div>