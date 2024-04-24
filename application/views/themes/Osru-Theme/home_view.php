<?php 
   
    $ascurl = base_url().'application/views/themes/'.html_escape($default_theme).'/web-assets';
    
   


?>
<main>
    <!-- Slider section -->
    <section class="section-padding">
      <div class="custom-container">
        <div class="mb-5 flex justify-between items-center">
          <h1 class="section-heading">Latest Score</h1>
          <select name="games" id="games"
            class="py-3 px-6 rounded-lg border border-[#D8DCE3] text-xs lg:text-base font-semibold outline-none">
            <option value="cricket">Cricket</option>
            <option value="football">Football</option>
          </select>
        </div>
        <div class="banner-slider" id="scrollport">


          <div class="slider-item min-w-[276px] lg:min-w-[350px] py-3 lg:py-5 px-4 lg:px-6 bg-secondary rounded-xl">
            <div class="flex justify-between items-start gap-2">
              <div>
                <h4 class="text-[10px] lg:text-[11px] leading-[14px] text-white">
                  Test 3 of 5(tied 1:1) Day 3 Session 1
                </h4>

              </div>
              <div class="shrink-0 rounded  px-1.5  text-[10px]  text-white flex  items-center">
                <i class="fa-regular fa-circle-dot"></i>
                <span>Live</span>
              </div>
            </div>

            <div class="my-5  gap-2 lg:gap-4 ">
              <div class="shrink-0 flex justify-between my-4 items-center gap-3">
                <div class="flex justify-start items-center">
                  <img src="<?php echo $ascurl?>/images/global/srilanka-flag.png" alt="Srilanka flag"
                    class="w-7 lg:h-7 lg:w-12 lg:h-12 rounded-full" />
                  <h6 class="text-[10px] lg:text-sm text-[#F1F5F9] uppercase">SRI</h6>
                </div>

                <div>

                  <p class="mt-.5 text-xs  text-white ">169/7 (41.4)</p>
                </div>
              </div>



              <div class="shrink-0 flex justify-between items-center gap-3">
                <div class="flex justify-start items-center">
                  <img src="<?php echo $ascurl?>/images/global/zim-flag.png" alt="Srilanka flag"
                    class="w-7 lg:h-7 lg:w-12 lg:h-12 rounded-full" />
                  <h6 class="text-[10px] lg:text-sm text-[#F1F5F9] uppercase">Zim</h6>
                </div>

                <div>

                  <p class="mt-.5 text-xs  text-white ">169/7 (41.4)</p>
                </div>
              </div>
            </div>

            <p class="text-[10px] lg:text-[11px] leading-[15px] text-primary">
              Sri Lanka need 40 runs in 50 balls at 4.8 rpo
            </p>
          </div>

          <div class="slider-item min-w-[276px] lg:min-w-[350px] py-3 lg:py-5 px-4 lg:px-6 bg-secondary rounded-xl">
            <div class="flex justify-between items-start gap-2">
              <div>
                <h4 class="text-[10px] lg:text-[11px] leading-[14px] text-white">
                  Test 3 of 5(tied 1:1) Day 3 Session 1
                </h4>

              </div>
              <div class="shrink-0 rounded  px-1.5  text-[10px]  text-white flex  items-center">
                <i class="fa-regular fa-circle-dot"></i>
                <span>Live</span>
              </div>
            </div>

            <div class="my-5  gap-2 lg:gap-4 ">
              <div class="shrink-0 flex justify-between my-4 items-center gap-3">
                <div class="flex justify-start items-center">
                  <img src="<?php echo $ascurl?>/images/global/srilanka-flag.png" alt="Srilanka flag"
                    class="w-7 lg:h-7 lg:w-12 lg:h-12 rounded-full" />
                  <h6 class="text-[10px] lg:text-sm text-[#F1F5F9] uppercase">SRI</h6>
                </div>

                <div>

                  <p class="mt-.5 text-xs  text-white ">169/7 (41.4)</p>
                </div>
              </div>



              <div class="shrink-0 flex justify-between items-center gap-3">
                <div class="flex justify-start items-center">
                  <img src="<?php echo $ascurl?>/images/global/zim-flag.png" alt="Srilanka flag"
                    class="w-7 lg:h-7 lg:w-12 lg:h-12 rounded-full" />
                  <h6 class="text-[10px] lg:text-sm text-[#F1F5F9] uppercase">Zim</h6>
                </div>

                <div>

                  <p class="mt-.5 text-xs  text-white ">169/7 (41.4)</p>
                </div>
              </div>
            </div>

            <p class="text-[10px] lg:text-[11px] leading-[15px] text-primary">
              Sri Lanka need 40 runs in 50 balls at 4.8 rpo
            </p>
          </div>


        </div>
        <!--<div class="progress-bar-container mt-4 hidden lg:block">-->
        <!--  <div class="progress-bar" style="width: 0"></div>-->
        <!--</div>-->
      </div>
    </section>

    <!-- Advertisement -->
    <section class="px-7 lg:px-0">
      <div class="custom-container">
        <div class="rounded-xl h-[90px] grid place-content-center text-center">
          <a href="http://"><img width="100%" src="<?php echo $ascurl?>ploads/Advertizement/0ab0d3e1768795bbd1a4895c6187bdaa.png"
              alt=""></a>
        </div>
      </div>
    </section>

   


    <!-- Cricket -->
    <section class="section-padding">
      <div class="custom-container">
        <h1 class="mb-5 section-heading">ক্রিকেট</h1>

        <div class="flex flex-col lg:flex-row gap-5 lg:gap-7">
          <div class="lg:w-[66%]">
            <article
              class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
              <img
                src="<?php echo $ascurl?>/uploads/2023-11-19T172113Z_983293843_UP1EJBJ1C7AXN_RTRMADP_3_CRICKET-WORLDCUP-IND-AUS-1703363199.webp"
                alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
              <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white">বাংলাদেশের ব্যাটিং ব্যর্থতার পর সাড়ে
                চারশ পেরিয়ে শ্রীলঙ্কার লিড</h3>
              <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                <p>১৫ মিনিট আগে</p>
              </div>
            </article>
          </div>


          <div class="lg:w-[33%] space-y-1 lg:space-y-1 border rounded">

            <div class="mt-4 pl-4 space-y-0">
              <h1 class="text-lg font-bold text-blue-800">সর্বশেষ সংবাদ</h1>
            </div>
            <hr>
            <div class="news-card-small flex justify-between items-start space-x-0 space-y-0">

              <div class="">
                <span
                  class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full">১</span>
              </div>
              <div class="news-card-small-content px-3 py-0">
                <h4 class="news-small-heading text-sm font-extrabold">
                  <a
                    href="./pages/India-v-Bangladesh---ICC-Men-s-T20-World-Cup.html">বাংলাদেশের
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
                <span
                  class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full">২</span>
              </div>
              <div class="news-card-small-content px-3 py-0">
                <h4 class="news-small-heading text-sm font-extrabold">
                  <a
                    href="./pages/India-v-Bangladesh---ICC-Men-s-T20-World-Cup.html">বাংলাদেশের
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
                <span
                  class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full">৩</span>
              </div>
              <div class="news-card-small-content px-3 py-0">
                <h4 class="news-small-heading text-sm font-extrabold">
                  <a
                    href="./pages/India-v-Bangladesh---ICC-Men-s-T20-World-Cup.html">বাংলাদেশের
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
                <span
                  class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full">৪</span>
              </div>
              <div class="news-card-small-content px-3 py-0">
                <h4 class="news-small-heading text-sm font-extrabold">
                  <a
                    href="./pages/India-v-Bangladesh---ICC-Men-s-T20-World-Cup.html">বাংলাদেশের
                    ব্যাটিং ব্যর্থতার পর সাড়ে চারশ পেরিয়ে শ্রীলঙ্কার লিড..</a>
                </h4>
                <div class="flex justify-between items-center  text-slate-400">
                  <span class=" text-sm ">১২ মিনিট আগে</span>
                </div>

              </div>
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
            <article
              class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
              <img
                src="<?php echo $ascurl?>/uploads/2023-11-19T172113Z_983293843_UP1EJBJ1C7AXN_RTRMADP_3_CRICKET-WORLDCUP-IND-AUS-1703363199.webp"
                alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
              <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white">বাংলাদেশের ব্যাটিং ব্যর্থতার পর সাড়ে
                চারশ পেরিয়ে শ্রীলঙ্কার লিড</h3>
              <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                <p>১৫ মিনিট আগে</p>
              </div>
            </article>
          </div>

          <div class="lg:w-[33%]">
            <article
              class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">

              <div class="absolute inset-0 bg-blue-900 flex items-center justify-center">
                <h2 class=" text-center text-white">Adds</h2>
              </div>

            </article>
          </div>


          <div class="lg:w-[33%]">
            <article
              class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
              <img
                src="<?php echo $ascurl?>/uploads/2023-11-19T172113Z_983293843_UP1EJBJ1C7AXN_RTRMADP_3_CRICKET-WORLDCUP-IND-AUS-1703363199.webp"
                alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
              <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white">বাংলাদেশের ব্যাটিং ব্যর্থতার পর সাড়ে
                চারশ পেরিয়ে শ্রীলঙ্কার লিড</h3>
              <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                <p>১৫ মিনিট আগে</p>
              </div>
            </article>
          </div>

          <!-- <div class="lg:w-[66%] space-y-4">
            <div class="flex flex-col lg:flex-row gap-6">
              <div class="space-y-4">
                <div class="news-card-small">
                  <div class="small-img">
                    <img src="<?php echo $ascurl?>ploads/image-5.png" alt="poster" />
                  </div>
                  <div class="news-card-small-content px-3 py-4">
                    <h4 class="news-small-heading">
                      <a
                        href="news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html">Underdog
                        Triumphs in Stunning Upset, Rewriting the Script in Unforgettable Football Matchup</a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="news-tag">News</p>
                      <a
                        onclick="shareContent('Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html')">
                        <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="news-card-small">
                  <div class="small-img">
                    <img src="<?php echo $ascurl?>ploads/image-5.png" alt="poster" />
                  </div>
                  <div class="news-card-small-content px-3 py-4">
                    <h4 class="news-small-heading">
                      <a
                        href="news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html">Underdog
                        Triumphs in Stunning Upset, Rewriting the Script in Unforgettable Football Matchup</a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="news-tag">News</p>
                      <a
                        onclick="shareContent('Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html')">
                        <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="news-card-small">
                  <div class="small-img">
                    <img src="<?php echo $ascurl?>ploads/image-5.png" alt="poster" />
                  </div>
                  <div class="news-card-small-content px-3 py-4">
                    <h4 class="news-small-heading">
                      <a
                        href="news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html">Underdog
                        Triumphs in Stunning Upset, Rewriting the Script in Unforgettable Football Matchup</a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="news-tag">News</p>
                      <a
                        onclick="shareContent('Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html')">
                        <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div> -->


        </div>

        <!-- <div class="space-y-4">
                <div class="news-card-small">
                  <div class="small-img">
                    <img src="<?php echo $ascurl?>ploads/image-5.png" alt="poster" />
                  </div>
                  <div class="news-card-small-content px-3 py-4">
                    <h4 class="news-small-heading">
                      <a
                        href="news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html">Underdog
                        Triumphs in Stunning Upset, Rewriting the Script in Unforgettable Football Matchup</a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="news-tag">News</p>
                      <a
                        onclick="shareContent('Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html')">
                        <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="news-card-small">
                  <div class="small-img">
                    <img src="<?php echo $ascurl?>ploads/image-5.png" alt="poster" />
                  </div>
                  <div class="news-card-small-content px-3 py-4">
                    <h4 class="news-small-heading">
                      <a
                        href="news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html">Underdog
                        Triumphs in Stunning Upset, Rewriting the Script in Unforgettable Football Matchup</a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="news-tag">News</p>
                      <a
                        onclick="shareContent('Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html')">
                        <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="news-card-small">
                  <div class="small-img">
                    <img src="<?php echo $ascurl?>ploads/image-5.png" alt="poster" />
                  </div>
                  <div class="news-card-small-content px-3 py-4">
                    <h4 class="news-small-heading">
                      <a
                        href="news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html">Underdog
                        Triumphs in Stunning Upset, Rewriting the Script in Unforgettable Football Matchup</a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="news-tag">News</p>
                      <a
                        onclick="shareContent('Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html')">
                        <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div>
              </div> -->



      </div>
      





     
    </section>



    <!-- Football -->
    <section class="section-padding">
      <div class="custom-container">
        <h1 class="mb-5 section-heading">ফুটবল</h1>

        <div class="flex flex-col lg:flex-row gap-5 lg:gap-7">
          <div class="lg:w-[66%]">
            <article
              class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
              <img
                src="<?php echo $ascurl?>/uploads/depositphotos_604478050-stock-photo-harry-kane-tottenham-hotspur-looks.jpg"
                alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
              <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white">বাংলাদেশের ব্যাটিং ব্যর্থতার পর সাড়ে
                চারশ পেরিয়ে শ্রীলঙ্কার লিড</h3>
              <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                <p>১৫ মিনিট আগে</p>
              </div>
            </article>
          </div>


          <div class="lg:w-[33%] space-y-1 lg:space-y-1 border rounded">

            <div class="mt-4 pl-4 space-y-0">
              <h1 class="text-lg font-bold text-blue-800">সর্বশেষ সংবাদ</h1>
            </div>
            <hr>
            <div class="news-card-small flex justify-between items-start space-x-0 space-y-0">

              <div class="">
                <span
                  class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full">১</span>
              </div>
              <div class="news-card-small-content px-3 py-0">
                <h4 class="news-small-heading text-sm font-extrabold">
                  <a
                    href="./pages/football_details.html">বাংলাদেশের
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
                <span
                  class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full">২</span>
              </div>
              <div class="news-card-small-content px-3 py-0">
                <h4 class="news-small-heading text-sm font-extrabold">
                  <a
                    href="./pages/details_page.html">বাংলাদেশের
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
                <span
                  class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full">৩</span>
              </div>
              <div class="news-card-small-content px-3 py-0">
                <h4 class="news-small-heading text-sm font-extrabold">
                  <a
                    href="./pages/football_details.html">বাংলাদেশের
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
                <span
                  class="inline-flex items-center justify-center h-12 w-12 p-4 text-lg font-bold leading-none text-white bg-blue-900 rounded-full">৪</span>
              </div>
              <div class="news-card-small-content px-3 py-0">
                <h4 class="news-small-heading text-sm font-extrabold">
                  <a
                    href="./pages/India-v-Bangladesh---ICC-Men-s-T20-World-Cup.html">বাংলাদেশের
                    ব্যাটিং ব্যর্থতার পর সাড়ে চারশ পেরিয়ে শ্রীলঙ্কার লিড..</a>
                </h4>
                <div class="flex justify-between items-center  text-slate-400">
                  <span class=" text-sm ">১২ মিনিট আগে</span>
                </div>

              </div>
            </div>



          </div>
        </div>
      </div>
    </section>

    <!-- Football -->
    <section class="mb-6">
      
      <div class="custom-container">
        <!-- <h1 class="mb-5 section-heading">Football</h1> -->
        <div class="flex flex-col lg:flex-row gap-5 lg:gap-7">

          <div class="lg:w-[33%]">
            <article
              class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
              <img
                src="<?php echo $ascurl?>/uploads/depositphotos_604478050-stock-photo-harry-kane-tottenham-hotspur-looks.jpg"
                alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
              <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white">বাংলাদেশের ব্যাটিং ব্যর্থতার পর সাড়ে
                চারশ পেরিয়ে শ্রীলঙ্কার লিড</h3>
              <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                <p>১৫ মিনিট আগে</p>
              </div>
            </article>
          </div>

         


          <div class="lg:w-[32%]">
            <article
              class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
              <img
                src="<?php echo $ascurl?>/uploads/depositphotos_604478050-stock-photo-harry-kane-tottenham-hotspur-looks.jpg"
                alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
              <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white">বাংলাদেশের ব্যাটিং ব্যর্থতার পর সাড়ে
                চারশ পেরিয়ে শ্রীলঙ্কার লিড</h3>
              <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                <p>১৫ মিনিট আগে</p>
              </div>
            </article>
          </div>

          <!-- <div class="lg:w-[66%] space-y-4">
            <div class="flex flex-col lg:flex-row gap-6">
              <div class="space-y-4">
                <div class="news-card-small">
                  <div class="small-img">
                    <img src="<?php echo $ascurl?>ploads/image-5.png" alt="poster" />
                  </div>
                  <div class="news-card-small-content px-3 py-4">
                    <h4 class="news-small-heading">
                      <a
                        href="news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html">Underdog
                        Triumphs in Stunning Upset, Rewriting the Script in Unforgettable Football Matchup</a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="news-tag">News</p>
                      <a
                        onclick="shareContent('Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html')">
                        <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="news-card-small">
                  <div class="small-img">
                    <img src="<?php echo $ascurl?>ploads/image-5.png" alt="poster" />
                  </div>
                  <div class="news-card-small-content px-3 py-4">
                    <h4 class="news-small-heading">
                      <a
                        href="news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html">Underdog
                        Triumphs in Stunning Upset, Rewriting the Script in Unforgettable Football Matchup</a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="news-tag">News</p>
                      <a
                        onclick="shareContent('Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html')">
                        <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="news-card-small">
                  <div class="small-img">
                    <img src="<?php echo $ascurl?>ploads/image-5.png" alt="poster" />
                  </div>
                  <div class="news-card-small-content px-3 py-4">
                    <h4 class="news-small-heading">
                      <a
                        href="news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html">Underdog
                        Triumphs in Stunning Upset, Rewriting the Script in Unforgettable Football Matchup</a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="news-tag">News</p>
                      <a
                        onclick="shareContent('Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html')">
                        <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div> -->


        </div>

        <!-- <div class="space-y-4">
                <div class="news-card-small">
                  <div class="small-img">
                    <img src="<?php echo $ascurl?>ploads/image-5.png" alt="poster" />
                  </div>
                  <div class="news-card-small-content px-3 py-4">
                    <h4 class="news-small-heading">
                      <a
                        href="news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html">Underdog
                        Triumphs in Stunning Upset, Rewriting the Script in Unforgettable Football Matchup</a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="news-tag">News</p>
                      <a
                        onclick="shareContent('Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html')">
                        <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="news-card-small">
                  <div class="small-img">
                    <img src="<?php echo $ascurl?>ploads/image-5.png" alt="poster" />
                  </div>
                  <div class="news-card-small-content px-3 py-4">
                    <h4 class="news-small-heading">
                      <a
                        href="news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html">Underdog
                        Triumphs in Stunning Upset, Rewriting the Script in Unforgettable Football Matchup</a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="news-tag">News</p>
                      <a
                        onclick="shareContent('Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html')">
                        <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="news-card-small">
                  <div class="small-img">
                    <img src="<?php echo $ascurl?>ploads/image-5.png" alt="poster" />
                  </div>
                  <div class="news-card-small-content px-3 py-4">
                    <h4 class="news-small-heading">
                      <a
                        href="news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html">Underdog
                        Triumphs in Stunning Upset, Rewriting the Script in Unforgettable Football Matchup</a>
                    </h4>
                    <div class="flex justify-between items-center">
                      <p class="news-tag">News</p>
                      <a
                        onclick="shareContent('Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html')">
                        <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                      </a>
                    </div>
                  </div>
                </div>
              </div> -->



      </div>
    </section>




    <!-- Advertisement -->
    <section class="px-7 lg:px-0">
      <div class="custom-container">
        <div class="rounded-xl h-[90px] grid place-content-center text-center">
          <h4 class="text-primary text-xl font-semibold"><a href="http://"><img width="100%"
                src="<?php echo $ascurl?>/uploads/Advertizement/0ab0d3e1768795bbd1a4895c6187bdaa.png" alt=""></a></h4>
        </div>
      </div>
    </section>



    <section class="mb-3 mt-3">
      <div class="custom-container">
        <h1 class="mb-5 section-heading">Popular Games</h1>

        <div class="flex flex-col lg:flex-row gap-5 lg:gap-7">
          <div class="lg:w-[66%]">
            <div class="">
              <div class="big-img ">
                <img src="<?php echo $ascurl?>/uploads/game-1.png " alt="poster" class="h-full w-full rounded-t-xl" />
              </div>
              <div class="px-3 py-4">

                </a>
              </div>
            </div>
          </div>


          <div class="lg:w-[33%]">
            <div class="news-card-big">
              <div class="big-img ">
                <img src="<?php echo $ascurl?>/uploads/game-2.png" alt="poster" class="h-full w-full rounded-t-xl" />
              </div>
              <!-- <div class="px-3 py-4">
                <h4 class="news-big-heading">
                  <a
                    href="news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html">Underdog
                    Triumphs in Stunning Upset, Rewriting the Script in Unforgettable Football Matchup</a>
                </h4>
                <div class="flex justify-between items-center">
                  <p class="news-tag">News</p>
                  <a
                    onclick="shareContent('Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup','news-details/football/Underdog-Triumphs-in-Stunning-Upset--Rewriting-the-Script-in-Unforgettable-Football-Matchup.html')">
                    <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                  </a>
                </div>
              </div> -->
            </div>
          </div>


          <!-- <div class="lg:w-[33%] space-y-4 lg:space-y-9 border redious">

            <div class="mt-8 pl-4">
              <h1 class="text-7xl font-bold"> Latest news</h1> 
            </div>

            <div class="news-card-small">
              <div class="small-img">
                <img
                      src="<?php echo $ascurl?>ploads/depositphotos_604478050-stock-photo-harry-kane-tottenham-hotspur-looks.jpg"
                      alt="poster"
                    />
              </div>
              <div class="news-card-small-content px-3 py-4">
                <h4 class="news-small-heading">
                  <a
                    href="./pages/India-v-Bangladesh---ICC-Men-s-T20-World-Cup.html">'Shocked'
                    Pogba vows to fight 'incorrect' four-year doping ban</a>
                </h4>
                <div class="flex justify-between items-center">
                  <p class="news-tag">20/03/2024</p>
                </div>
              </div>
            </div>

            <div class="divider"></div>




            <div class="news-card-small">
              <div class="small-img">
                <img src="<?php echo $ascurl?>ploads/depositphotos_604478050-stock-photo-harry-kane-tottenham-hotspur-looks.jpg"
                  alt="poster" />
              </div>
              <div class="news-card-small-content px-3 py-4">
                <h4 class="news-small-heading">
                  <a
                    href="./pages/India-v-Bangladesh---ICC-Men-s-T20-World-Cup.html">'Shocked'
                    Pogba vows to fight 'incorrect' four-year doping ban</a>
                </h4>
                <div class="flex justify-between items-center">
                  <p class="news-tag">20/03/2024</p>
                </div>
              </div>
            </div>
            <div class="news-card-small">
              <div class="small-img">
                    <img
                      src="<?php echo $ascurl?>ploads/depositphotos_604478050-stock-photo-harry-kane-tottenham-hotspur-looks.jpg"
                      alt="poster"
                    />
                  </div>
              <div class="news-card-small-content px-3 py-4">
                <h4 class="news-small-heading">
                  <a
                    href="./pages/India-v-Bangladesh---ICC-Men-s-T20-World-Cup.html">'Shocked'
                    Pogba vows to fight 'incorrect' four-year doping ban</a>
                </h4>
                <div class="flex justify-between items-center">
                  <p class="news-tag">20/03/2024</p>
                </div>
              </div>
            </div>


            <div class="news-card-small">
              <div class="small-img">
                <img src="<?php echo $ascurl?>ploads/depositphotos_604478050-stock-photo-harry-kane-tottenham-hotspur-looks.jpg"
                  alt="poster" />
              </div>
              <div class="news-card-small-content px-3 py-4">
                <h4 class="news-small-heading">
                  <a
                    href="./pages/India-v-Bangladesh---ICC-Men-s-T20-World-Cup.html">'Shocked'
                    Pogba vows to fight 'incorrect' four-year doping ban</a>
                </h4>
                <div class="flex justify-between items-center">
                  <p class="news-tag">20/03/2024</p>
                </div>
              </div>
            </div>


                    
            <div class="news-card-small">
               <div class="small-img">
                <img src="<?php echo $ascurl?>ploads/depositphotos_604478050-stock-photo-harry-kane-tottenham-hotspur-looks.jpg"
                  alt="poster" /> 
              </div> 
              <div class="news-card-small-content px-3 py-4">
                <h4 class="news-small-heading">
                  <a
                    href="./pages/India-v-Bangladesh---ICC-Men-s-T20-World-Cup.html">'Shocked'
                    Pogba vows to fight 'incorrect' four-year doping ban</a>
                </h4>
                <div class="flex justify-between items-center">
                  <p class="news-tag">20/03/2024</p>
                </div>
              </div>
            </div> -->

        </div>







      </div>
      </div>
    </section>

    <!-- Kabaddi section -->
    <section class="mb-4 ">
      <div class="custom-container">
        <!-- <h1 class="mb-5 section-heading">Kabaddi</h1> -->
        <div class="grid lg:grid-cols-3 gap-4 lg:gap-6">
          <div class="">
            <div class="big-img ">
              <img src="<?php echo $ascurl?>/uploads/game-3.png" alt="poster" class="h-full w-full rounded-t-xl" />
            </div>
            <!-- <div class="px-3 py-4">
              <h4 class="news-big-heading">
                <a href="news-details/kabadi/Palani-Tuskers-Clinch-Yuva-Kabaddi-Series-Winter-Edition.html">Palani
                  Tuskers Clinch Yuva Kabaddi Series Winter Edition</a>
              </h4>
              <div class="flex justify-between items-center">
                <p class="news-tag">News</p>
                <a
                  onclick="shareContent('Palani-Tuskers-Clinch-Yuva-Kabaddi-Series-Winter-Edition','Palani-Tuskers-Clinch-Yuva-Kabaddi-Series-Winter-Edition','news-details/kabadi/Palani-Tuskers-Clinch-Yuva-Kabaddi-Series-Winter-Edition.html')">
                  <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                </a>
              </div>
            </div> -->
          </div>

          <div class="">
            <div class="big-img">
              <img src="<?php echo $ascurl?>/uploads/game-4.png" alt="poster" class="h-full w-full rounded-t-xl" />
            </div>
            <!-- <div class="px-3 py-4">
              <h4 class="news-big-heading">
                <a href="news-details/kabadi/Palani-Tuskers-Clinch-Yuva-Kabaddi-Series-Winter-Edition.html">Palani
                  Tuskers Clinch Yuva Kabaddi Series Winter Edition</a>
              </h4>
              <div class="flex justify-between items-center">
                <p class="news-tag">News</p>
                <a
                  onclick="shareContent('Palani-Tuskers-Clinch-Yuva-Kabaddi-Series-Winter-Edition','Palani-Tuskers-Clinch-Yuva-Kabaddi-Series-Winter-Edition','news-details/kabadi/Palani-Tuskers-Clinch-Yuva-Kabaddi-Series-Winter-Edition.html')">
                  <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                </a>
              </div>
            </div> -->
          </div>

          <div class="news-card-big">
            <div class="big-img ">
              <img src="<?php echo $ascurl?>/uploads/game-5.png" alt="poster" class="h-full w-full rounded-t-xl" />
            </div>
            <!-- <div class="px-3 py-4">
              <h4 class="news-big-heading">
                <a href="news-details/kabadi/Palani-Tuskers-Clinch-Yuva-Kabaddi-Series-Winter-Edition.html">Palani
                  Tuskers Clinch Yuva Kabaddi Series Winter Edition</a>
              </h4>
              <div class="flex justify-between items-center">
                <p class="news-tag">News</p>
                <a
                  onclick="shareContent('Palani-Tuskers-Clinch-Yuva-Kabaddi-Series-Winter-Edition','Palani-Tuskers-Clinch-Yuva-Kabaddi-Series-Winter-Edition','news-details/kabadi/Palani-Tuskers-Clinch-Yuva-Kabaddi-Series-Winter-Edition.html')">
                  <img src="<?php echo $ascurl?>/images/global/share.png" alt="share icon" />
                </a>
              </div>
            </div> -->
          </div>

        </div>
      </div>
    </section>





  </main>

     <!-- <script>
    $(document).ready(function () {

      function cricketApi(value = "cricket", api_key = "bceef824f4c10d86c261825f0900a5c2bc25fbe10af2f123849c08e5a9b13397") {
        console.log(value);
        // document.addEventListener('DOMContentLoaded', function() {
        const apiUrl = `https://apiv2.allsportsapi.com/${value}/?met=Livescore&APIkey=${api_key}`; // Replace with your API URL

        // Fetch data from the API
        fetch(apiUrl)
          .then(response => {
            // Check if the response is successful
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            // Parse JSON data from the response
            return response.json();
          })
          .then(data => {
            // Append data to HTML
            // const container = document.getElementById('match_list');
            var allMatch = data.result;
            //console.log(allMatch);

            //data.forEach(allMatch => {
            //     const div = document.createElement('div');
            // div.textContent = item.title;
            // container.appendChild(div);
            //});

            var html = '';
            for (var i = 0; i < allMatch.length; i++) {

              if (value == 'cricket') {
                var league_name = allMatch[i].league_name;
                var event_home_team = allMatch[i].event_home_team;
                var event_home_team_logo = allMatch[i].event_home_team_logo;
                var event_away_team = allMatch[i].event_away_team;
                var event_away_team_logo = allMatch[i].event_away_team_logo;
                var event_date_start = allMatch[i].event_date_start;
                var event_date_stop = allMatch[i].event_date_stop;
                var event_status_info = allMatch[i].event_status_info;
                var event_toss = allMatch[i].event_toss;
                var event_home_final_result = allMatch[i].event_home_final_result;
                var event_away_final_result = allMatch[i].event_away_final_result;

                if (event_home_final_result == '') {
                  event_home_final_result = '--';
                }
                if (event_away_final_result == '') {
                  event_away_final_result = '--';
                }
                if (event_date_start == event_date_stop) {
                  var event_date = event_date_start
                } else {
                  var event_date = event_date_start + '-' + event_date_stop;
                }
              }
              if (value == 'football') {
                var league_name = allMatch[i].league_name;
                var event_home_team = allMatch[i].event_home_team;
                var event_home_team_logo = allMatch[i].home_team_logo;
                var event_away_team = allMatch[i].event_away_team;
                var event_away_team_logo = allMatch[i].away_team_logo;
                var event_date = allMatch[i].event_date;
                var event_status_info = 'Final Result: ' + allMatch[i].event_final_result;
                var event_toss = allMatch[i].event_toss;
                var event_home_final_result = allMatch[i].event_home_final_result ? allMatch[i].event_home_final_result : '';
                var event_away_final_result = allMatch[i].event_away_final_result ? allMatch[i].event_away_final_result : '';

                if (event_home_final_result == '') {
                  event_home_final_result = '--';
                }
                if (event_away_final_result == '') {
                  event_away_final_result = '--';
                }
              }

              html += `<div class="slider-item min-w-[276px] lg:min-w-[350px] py-3 lg:py-5 px-4 lg:px-6 bg-secondary rounded-xl">
                  <div class="flex justify-between items-start gap-2">
                    <div>
                      <h4 class="text-[10px] lg:text-[11px] leading-[14px] text-white">
                      ${league_name}
                      </h4>
                      <p class="mt-.5 text-[10px] lg:text-[11px] leading-[11px] text-white font-semibold">${event_date}</p>
                    </div>
                    <div
                      class="shrink-0 rounded py-1 px-1.5 bg-primary/25 text-[10px] text-primary flex gap-1.5 items-center"
                    >
                      <i class="fa-regular fa-circle-dot"></i>
                      <span>Live</span>
                    </div>
                  </div>

                  <div class="my-5 flex justify-between items-start gap-2 lg:gap-4">
                    <div class="shrink-0 flex items-center gap-3">
                      <img src="${event_home_team_logo}" class="w-7 lg:h-7 lg:w-12 lg:h-12 rounded-full"/>
                      <div>
                        <h6 class="text-[10px] lg:text-[11px] leading-4 text-[#F1F5F9] uppercase">${event_home_team}</h6>
                        <p class="mt-.5 text-xs text-white font-semibold">${event_home_final_result}</p>
                      </div>
                    </div>

                    <div class="shrink-0 text-primary text-xs lg:text-sm font-medium">VS</div>

                    <div class="shrink-0 flex items-center gap-3">
                      <img
                        src="${event_away_team_logo}"
                        alt="Srilanka flag"
                        class="w-7 lg:h-7 lg:w-12 lg:h-12 rounded-full"
                      />
                      <div>
                        <h6 class="text-[10px] lg:text-[11px] leading-4 text-[#F1F5F9] uppercase">${event_away_team}</h6>
                        <p class="mt-.5 text-xs text-white font-semibold">${event_away_final_result}</p>
                      </div>
                    </div>
                  </div>

                  <p class="text-[10px] lg:text-[11px] leading-[15px] text-primary">
                    ${event_status_info}
                  </p>
                </div>`;

              $(".banner-slider").html(html);
            }
          })
          .catch(error => {
            html = `<div class="min-w-[276px] lg:min-w-[350px] py-3 lg:py-5 px-4 lg:px-6 bg-secondary rounded-xl">
            <div class="flex justify-between items-start gap-2">
              <div>
                <h4 class="text-[10px] lg:text-[15px] leading-[18px] font-bold text-white">
                  Zimbabwe Tour of Sri Lanka, 2024
                </h4>
                <p class="lg:mt-1.5 text-[10px] lg:text-sm text-white">2nd ODi | 08 Jan 2024</p>
              </div>
              <div
                class="shrink-0 rounded py-1 px-1.5 bg-primary/25 text-xs lg:text-sm text-primary flex gap-1.5 items-center"
              >
                <i class="fa-regular fa-circle-dot"></i>
                <span>Live</span>
              </div>
            </div>

            <div class="my-5 flex justify-between items-start gap-2 lg:gap-4">
              <div class="shrink-0 flex items-center gap-3">
                <img
                  src="./images/global/srilanka-flag.png"
                  alt="Srilanka flag"
                  class="w-7 lg:w-auto"
                />
                <div>
                  <h6 class="text-[10px] lg:text-sm text-[#F1F5F9] uppercase">SRI LANKA</h6>
                  <p class="mt-.5 text-xs lg:text-base text-white font-semibold">169/7 (41.4)</p>
                </div>
              </div>

              <div class="shrink-0 text-primary text-xs lg:text-2xl font-medium">VS</div>

              <div class="shrink-0 flex items-center gap-3">
                <img
                  src="./images/global/zim-flag.png"
                  alt="Srilanka flag"
                  class="w-7 lg:w-auto"
                />
                <div>
                  <h6 class="text-[10px] lg:text-sm text-[#F1F5F9] uppercase">SRI LANKA</h6>
                  <p class="mt-.5 text-xs lg:text-base text-white font-semibold">169/7 (41.4)</p>
                </div>
              </div>
            </div>

            <p class="text-[11px] lg:text-[15px] leading-[18px] text-primary font-semibold">
              Sri Lanka need 40 runs in 50 balls at 4.8 rpo
            </p>
          </div>`;


            $(".banner-slider").html(html);
          });
        // });

        const scrollport = document.getElementById('scrollport');
        let isDown = false;
        let startX;
        let scrollLeft;

        scrollport.addEventListener('mousedown', (e) => {
          isDown = true;
          startX = e.pageX - scrollport.offsetLeft;
          scrollLeft = scrollport.scrollLeft;
        });

        scrollport.addEventListener('mouseleave', () => {
          isDown = false;
        });

        scrollport.addEventListener('mouseup', () => {
          isDown = false;
        });

        scrollport.addEventListener('mousemove', (e) => {
          if (!isDown) return;
          e.preventDefault();
          const x = e.pageX - scrollport.offsetLeft;
          const walk = (x - startX) * 2; // Adjust scrolling speed here
          scrollport.scrollLeft = scrollLeft - walk;
        });

      }

      cricketApi();

      // Call the function every 5 seconds
      intervalId = setInterval(function () {
        cricketApi();
      }, 5000);

      $("#games").change(function () {
        var selectedValue = $(this).val();
        clearInterval(intervalId);
        if (selectedValue == 'cricket') {
          cricketApi(selectedValue, 'bceef824f4c10d86c261825f0900a5c2bc25fbe10af2f123849c08e5a9b13397');
          intervalId = setInterval(function () {
            cricketApi(selectedValue, 'bceef824f4c10d86c261825f0900a5c2bc25fbe10af2f123849c08e5a9b13397');
          }, 5000);
        }
        if (selectedValue == 'football') {
          cricketApi(selectedValue, 'bceef824f4c10d86c261825f0900a5c2bc25fbe10af2f123849c08e5a9b13397');
          intervalId = setInterval(function () {
            cricketApi(selectedValue, 'bceef824f4c10d86c261825f0900a5c2bc25fbe10af2f123849c08e5a9b13397');
          }, 5000);
        }
      });
    });


  </script> -->
</body>

<!-- Mirrored from raudexpress.com/news/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Mar 2024 16:17:42 GMT -->

</html>