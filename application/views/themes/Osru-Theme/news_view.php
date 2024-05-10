<?php
if (isset($ads) && is_array(@$ads)) {
    extract($ads);
}
$bu = base_url();
include('common_file/function.php');
$ascurl = base_url() . 'application/views/themes/' . html_escape($default_theme) . '/web-assets';
$CI = &get_instance();
$CI->load->model('settings');
$ot = json_decode($CI->settings->get_previous_settings('settings', 115));
if ($photo) {
    $reporterImg = base_url() . $photo;
} else {
    $reporterImg = $ascurl . '/images/avatar1.jpg';
}

?>

<?php
$imgurl = ($image_base_url ? $image_base_url : base_url());
$img_url = $imgurl . 'uploads/' . $image;
$ext = explode(".", @$file_name);
$ext = end($ext);
?>

<link href="<?php echo $ascurl; ?>/css/audio.css?<?php echo version() ?>" rel="stylesheet">


<main>




    <!-- Advertisement -->
    <section class="px-7 lg:px-0 mt-10 lg:mt-4 mb-10">
        <div class="custom-container">
            <div class="bg-[#E6E2E0] rounded-xl h-[90px] grid place-content-center text-center">
                <h4 class="text-black text-xl font-semibold">ADS</h4>
            </div>
        </div>
    </section>

    <!-- Breadcrumbs -->
    <section>
        <div class="custom-container">
            <ul>
                <li class="flex items-center gap-4">
                    <span class="text-[#444D56] font-medium"><a href="#">Home</a></span>
                    <span class="text-[#73738C] font-semibold"> &gt;Cricket </span>
                    <span class="text-[#73738C] font-medium">&gt;News</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- News section -->
    <!-- Cricket -->
    <section>
        <div class="custom-container">
            <div class="main py-10 px-0 flex lg:flex-row flex-col gap-3">
                <div class="left_part lg:w-4/6">
                    <h1 class="font-extrabold text-2xl py-5"><?php echo htmlspecialchars_decode(strip_tags($title)); ?></h1>
                    <p class="text-sm text-slate-500 font-medium"><?php echo htmlspecialchars_decode(strip_tags($stitle)); ?></p>
                    <p class="text-sm text-slate-500 font-medium mt-2"> <?php
                                                                        $strtime = strtotime($post_date);
                                                                        $converted_date = convertDate(date('l, d M, Y', $strtime));
                                                                        echo $converted_date; ?></p>


                    <div class="w-full lg:h-[600px] py-5">
                        <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
                            <img src="<?php echo html_escape($img_url) ?>" alt="<?php echo htmlspecialchars_decode(strip_tags($image_alt)); ?>" class="absolute inset-0 h-full w-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
                            <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white"><?php echo htmlspecialchars_decode(strip_tags($image_title)); ?></h3>
                            <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                                <p>
                                    <?php
                                    $strtime = strtotime($post_date);
                                    $converted_date = convertDate(date('l, d M, Y', $strtime));
                                    echo $converted_date; ?>
                                </p>
                            </div>
                        </article>
                    </div>

                    <div class="desc  text-pretty ">
                        <?php echo htmlspecialchars_decode($news); ?>
                    </div>


                </div>
                <div class="right_part lg:w-2/6 flex flex-col gap-2">
                    <div class="advertise lg:h-1/2 h-[250px] py-5 px-3 bg-[#E6E2E0] border rounded flex justify-center items-center">
                        <p>Advertisement</p>
                    </div>

                    <div class="w-full space-y-1 lg:space-y-1 border rounded">

                        <div class="mt-4 pl-4 space-y-0">
                            <h1 class="text-lg font-bold text-blue-800">সর্বশেষ সংবাদ</h1>
                        </div>
                        <hr>
                        <?php foreach ($latest_news as $key => $item) : ?>
                            <div class="news-card-small flex justify-between items-start space-x-0 space-y-0">

                                <div class="">
                                    <span class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full"><?php

                                                                                                                                                                            $data = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '১০', '১১', '১২'];



                                                                                                                                                                            echo $data[++$key];

                                                                                                                                                                            ?></span>
                                </div>
                                <div class="news-card-small-content px-3 py-0">
                                    <h4 class="news-small-heading text-sm font-extrabold">
                                        <a href="<?= base_url() . $item->encode_title ?>"><?= $item->title ?></a>
                                    </h4>
                                    <div class="flex justify-between items-center  text-slate-400">
                                        <span class=" text-sm "><?php
                                                                $strtime = strtotime($item->post_date);
                                                                $converted_date = convertDate(date('l, d M, Y', $strtime));
                                                                echo $converted_date; ?>
                                        </span>
                                    </div>
                                    <hr class="mt-2">
                                </div>
                            </div>
                        <?php endforeach ?>










                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="custom-container">
            <h1 class="mb-5 section-heading">ক্রিকেট</h1>

            <div class="flex flex-col lg:flex-row gap-5 lg:gap-7">
                <div class="lg:w-[66%]">
                    <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
                        <img src="<?php echo html_escape(base_url() . 'uploads/' . $latest_news[0]->image) ?>" alt="University of Southern California" class="absolute inset-0 h-full  w-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
                        <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white"><?php echo $latest_news[0]->title ?></h3>
                        <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                            <p><?php
                                $strtime = strtotime($latest_news[0]->post_date);
                                $converted_date = convertDate(date('l, d M, Y', $strtime));
                                echo $converted_date; ?></p>
                        </div>
                    </article>
                </div>


                <div class="lg:w-[33%] space-y-1 lg:space-y-1 border rounded">

                    <div class="mt-4 pl-4 space-y-0">
                        <h1 class="text-lg font-bold text-blue-800">সর্বশেষ সংবাদ</h1>
                    </div>
                    <hr>
                    <div class="w-full space-y-1 lg:space-y-1 border rounded">

                        <div class="mt-4 pl-4 space-y-0">
                            <h1 class="text-lg font-bold text-blue-800">সর্বশেষ সংবাদ</h1>
                        </div>
                        <hr>
                        <?php foreach ($latest_news as $key => $item) : ?>
                            <div class="news-card-small flex justify-between items-start space-x-0 space-y-0">

                                <div class="">
                                    <span class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full"><?php

                                                                                                                                                                            $data = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '১০', '১১', '১২'];



                                                                                                                                                                            echo $data[++$key];

                                                                                                                                                                            ?></span>
                                </div>
                                <div class="news-card-small-content px-3 py-0">
                                    <h4 class="news-small-heading text-sm font-extrabold">
                                        <a href="<?= base_url() . $item->encode_title ?>"><?= $item->title ?></a>
                                    </h4>
                                    <div class="flex justify-between items-center  text-slate-400">
                                        <span class=" text-sm "><?php
                                                                $strtime = strtotime($item->post_date);
                                                                $converted_date = convertDate(date('l, d M, Y', $strtime));
                                                                echo $converted_date; ?>
                                        </span>
                                    </div>
                                    <hr class="mt-2">
                                </div>
                            </div>
                        <?php endforeach ?>










                    </div>



                </div>
            </div>
        </div>
    </section>

    <!-- Criket section -->
    <section>
        <div class="custom-container">
            <!-- <h1 class="mb-5 section-heading">Football</h1> -->
            <div class="flex flex-col lg:flex-row gap-5 lg:gap-7">

                <div class="lg:w-[33%]">
                    <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
                        <img src="../uploads/2023-11-19T172113Z_983293843_UP1EJBJ1C7AXN_RTRMADP_3_CRICKET-WORLDCUP-IND-AUS-1703363199.webp" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
                        <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white">বাংলাদেশের ব্যাটিং ব্যর্থতার পর সাড়ে
                            চারশ পেরিয়ে শ্রীলঙ্কার লিড</h3>
                        <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                            <p>১৫ মিনিট আগে</p>
                        </div>
                    </article>
                </div>

                <div class="lg:w-[33%]">
                    <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">

                        <div class="absolute inset-0 bg-blue-900 flex items-center justify-center">
                            <h2 class=" text-center text-white">Adds</h2>
                        </div>

                    </article>
                </div>


                <div class="lg:w-[33%]">
                    <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
                        <img src="../uploads/2023-11-19T172113Z_983293843_UP1EJBJ1C7AXN_RTRMADP_3_CRICKET-WORLDCUP-IND-AUS-1703363199.webp" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
                        <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white">বাংলাদেশের ব্যাটিং ব্যর্থতার পর সাড়ে
                            চারশ পেরিয়ে শ্রীলঙ্কার লিড</h3>
                        <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                            <p>১৫ মিনিট আগে</p>
                        </div>
                    </article>
                </div>




            </div>




        </div>







    </section>

    <!-- Videos section -->
    <section class="section-padding">
        <div class="custom-container">
            <div class="grid lg:grid-cols-3 gap-7">
                <div class="lg:col-span-2">
                    <h2 class="mb-8 text-black text-xl lg:text-3xl font-semibold">Cricket Videos</h2>
                    <div class="grid lg:grid-cols-3 gap-4 lg:gap-5">
                        <div class="video-modal">
                            <div id="video-modal-open0" class="h-[305px] relative">
                                <iframe class="h-full" width="100%" src="https://www.youtube.com/embed/zqxV0ken2jg?si=wgS0P1_jhwaWuP0L" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share" allowfullscreen="">
                                </iframe>
                                <div class="absolute inset-0 w-full h-full z-50 bg-transparent cursor-pointer"></div>
                            </div>
                            <h5 class="mt-3 text-base lg:text-lg font-medium text-black">Cricket Fever Grips the Nation: Spectacular Matches and Thrilling Moments Await</h5>
                            <dialog class="w-full lg:w-1/2 relative bg-transparent">
                                <div class="flex justify-end">
                                    <button autofocus="" class="mb-5 outline-none bg-white w-8 h-8 rounded-full text-danger text-lg font-semibold text-center">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                                <div>
                                    <iframe class="modal-video" width="100%" src="https://www.youtube.com/embed/zqxV0ken2jg?si=wgS0P1_jhwaWuP0L" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="">
                                    </iframe>
                                </div>
                            </dialog>
                        </div>
                        <div class="video-modal">
                            <div id="video-modal-open1" class="h-[305px] relative">
                                <iframe class="h-full" width="100%" src="https://www.youtube.com/embed/IEDmqlKUFO0?si=xShnngmuyZIU61MZ" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share" allowfullscreen="">
                                </iframe>
                                <div class="absolute inset-0 w-full h-full z-50 bg-transparent cursor-pointer"></div>
                            </div>
                            <h5 class="mt-3 text-base lg:text-lg font-medium text-black">How Gaming Affects Your Mental Health</h5>
                            <dialog class="w-full lg:w-1/2 relative bg-transparent">
                                <div class="flex justify-end">
                                    <button autofocus="" class="mb-5 outline-none bg-white w-8 h-8 rounded-full text-danger text-lg font-semibold text-center">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                                <div>
                                    <iframe class="modal-video" width="100%" src="https://www.youtube.com/embed/IEDmqlKUFO0?si=xShnngmuyZIU61MZ" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="">
                                    </iframe>
                                </div>
                            </dialog>
                        </div>
                        <div class="video-modal">
                            <div id="video-modal-open2" class="h-[305px] relative">
                                <iframe class="h-full" width="100%" src="https://www.youtube.com/embed/Uc_x9tD68NY?si=uC8txRCT4whozFqr" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share" allowfullscreen="">
                                </iframe>
                                <div class="absolute inset-0 w-full h-full z-50 bg-transparent cursor-pointer"></div>
                            </div>
                            <h5 class="mt-3 text-base lg:text-lg font-medium text-black">India v Bangladesh - ICC Men's T20 World Cup</h5>
                            <dialog class="w-full lg:w-1/2 relative bg-transparent">
                                <div class="flex justify-end">
                                    <button autofocus="" class="mb-5 outline-none bg-white w-8 h-8 rounded-full text-danger text-lg font-semibold text-center">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                                <div>
                                    <iframe class="modal-video" width="100%" src="https://www.youtube.com/embed/Uc_x9tD68NY?si=uC8txRCT4whozFqr" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="">
                                    </iframe>
                                </div>
                            </dialog>
                        </div>

                    </div>
                </div>

                <div class="w-[300px] h-[500px] lg:h-[600px] m-auto">
                    <div class="h-full bg-secondary rounded-xl grid place-content-center text-center">
                        <h4 class="text-primary text-xl lg:text-4xl font-semibold">Ads</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About section -->
    <section class="mb-10 lg:mb-20">
        <div class="custom-container">
            <div class="grid lg:grid-cols-3">
                <div class="col-span-2 space-y-4 lg:space-y-5">
                    <h3 class="text-sm lg:text-base text-[#342F31]">About Cricket</h3>
                    <h5 class="text-base lg:text-xl font-semibold text-[#342F31]">Live Cricket Score</h5>
                    <p class="text-sm lg:text-base text-[#342F31]">
                        Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <h5 class="text-base lg:text-xl font-semibold text-[#342F31]">Today's Cricket Match Live Score</h5>
                    <p class="text-sm lg:text-base text-[#342F31]">
                        Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <h5 class="text-base lg:text-xl font-semibold text-[#342F31]">Women's Cricket Live Score</h5>
                    <p class="text-sm lg:text-base text-[#342F31]">
                        Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <script src="<?php echo base_url().'application/views/themes/'.html_escape($default_theme).'/web-assets'?> /jquery-3.6.4.min.js"></script>
   
    <script src="<?php echo base_url().'application/views/themes/'.html_escape($default_theme).'/web-assets'?> /videoModal.js"></script>


</main>