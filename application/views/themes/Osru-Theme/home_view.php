<?php

$ascurl = base_url() . 'application/views/themes/' . html_escape($default_theme) . '/web-assets';





?>
<?php
    $this->load->helper('text');
    $bu = base_url();
    if (isset($ads) && is_array($ads)) {
        extract($ads);
    }
?>
<main>
  <!-- Slider section -->
  <section class="section-padding">
    <div class="custom-container">
      <div class="mb-5 flex justify-between items-center">
        <h1 class="section-heading">Latest Score</h1>
        <select name="games" id="games" class="py-3 px-6 rounded-lg border border-[#D8DCE3] text-xs lg:text-base font-semibold outline-none">
          <option value="cricket">Cricket</option>
          <option value="football">Football</option>
        </select>
      </div>
      <div class="banner-slider" id="scrollport">


        


      </div>
      <!--<div class="progress-bar-container mt-4 hidden lg:block">-->
      <!--  <div class="progress-bar" style="width: 0"></div>-->
      <!--</div>-->
    </div>
  </section>

  <!-- Advertisement -->
  <section class="px-7 lg:px-0 ">
    <div class="custom-container">
      <div class="rounded-xl h-[90px] grid place-content-center text-center">
      <?php echo @$home_15;?>
      </div>
    </div>
  </section>




  <!-- Cricket -->
  <?php if (count($cricket_news) > 0) : ?>
    <section class="section-padding">
      <div class="custom-container">
        <h1 class="mb-5 section-heading">ক্রিকেট</h1>

        <div class="flex flex-col lg:flex-row gap-5 lg:gap-7">
          <div class="lg:w-[66%]">
            <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
              <img src="<?php echo base_url() . 'uploads/' . $cricket_news[0]->image ?>" alt="<?php echo $cricket_news[0]->image_alt ?>" class="absolute inset-0 h-full w-full object-cover" style="height: 500px;">
              <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
              <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white"><?php echo $cricket_news[0]->image_title ?></h3>
              <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                <p><?php
                    $strtime = strtotime($cricket_news[0]->post_date);
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
            <?php foreach ($cricket_news as $key => $item) : ?>
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
    </section>

    <!-- Criket section -->
    <section>
      <div class="custom-container">
        <!-- <h1 class="mb-5 section-heading">Football</h1> -->
        <div class="flex flex-col lg:flex-row gap-5 lg:gap-7">

          <?php if (count($cricket_news) > 1) : ?>

            <div class="lg:w-[33%]">
              <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
                <img src="<?php echo base_url() . 'uploads/' . $cricket_news[1]->image ?>" alt="<?php echo $cricket_news[1]->$image_alt ?>" class="absolute inset-0 h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
                <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white"><?php echo $cricket_news[1]->$image_title ?></h3>
                <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                  <p><?php
                      $strtime = strtotime($cricket_news[1]->post_date);
                      $converted_date = convertDate(date('l, d M, Y', $strtime));
                      echo $converted_date; ?></p>
                </div>
              </article>
            </div>

          <?php endif ?>

          <div class="lg:w-[33%]">
            <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">

              <div class="absolute inset-0 bg-blue-900 flex items-center justify-center">
              <?php echo @$home_12;?>
              </div>

            </article>
          </div>

          <?php if (count($cricket_news) > 2) : ?>
            <div class="lg:w-[33%]">
              <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
                <img src="<?php echo base_url() . 'uploads/' . $cricket_news[2]->image ?>" alt="<?php echo $cricket_news[2]->$image_alt ?>" class="absolute inset-0 h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
                <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white"><?php echo $cricket_news[2]->$image_title ?></h3>
                <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                  <p><?php
                      $strtime = strtotime($cricket_news[2]->post_date);
                      $converted_date = convertDate(date('l, d M, Y', $strtime));
                      echo $converted_date; ?></p>
                </div>
              </article>
            </div>

          <?php endif ?>




        </div>




      </div>







    </section>


  <?php endif ?>





  <!-- Football -->
  <?php if (count($football_news) > 0) : ?>
    <section class="section-padding">
      <div class="custom-container">
        <h1 class="mb-5 section-heading">ফুটবল</h1>

        <div class="flex flex-col lg:flex-row gap-5 lg:gap-7">
          <div class="lg:w-[66%]">
            <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
              <img src="<?php echo base_url() . 'uploads/' . $football_news[0]->image ?>" alt="<?php echo $football_news[0]->image_alt ?>" class="absolute inset-0 h-full w-full object-cover" style="height: 500px;">
              <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
              <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white"><?php echo $football_news[0]->image_title ?></h3>
              <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                <p><?php
                    $strtime = strtotime($football_news[0]->post_date);
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
            <?php foreach ($football_news as $key => $item) : ?>
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
    </section>

    <!-- Football -->
    <section class="mb-6">

      <div class="custom-container">
        <!-- <h1 class="mb-5 section-heading">Football</h1> -->
        <div class="flex flex-col lg:flex-row gap-5 lg:gap-7">

          <?php if (count($football_news) > 1) : ?>

            <div class="lg:w-[33%]">
              <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
                <img src="<?php echo base_url() . 'uploads/' . $football_news[1]->image ?>" alt="<?php echo $football_news[1]->$image_alt ?>" class="absolute inset-0 h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
                <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white"><?php echo $football_news[1]->$image_title ?></h3>
                <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                  <p><?php
                      $strtime = strtotime($football_news[1]->post_date);
                      $converted_date = convertDate(date('l, d M, Y', $strtime));
                      echo $converted_date; ?></p>
                </div>
              </article>
            </div>

          <?php endif ?>

          <div class="lg:w-[33%]">
            <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">

              <div class="absolute inset-0 bg-blue-900 flex items-center justify-center">
              <?php echo @$home_13;?>
              </div>

            </article>
          </div>

          <?php if (count($football_news) > 2) : ?>
            <div class="lg:w-[33%]">
              <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
                <img src="<?php echo base_url() . 'uploads/' . $football_news[2]->image ?>" alt="<?php echo $football_news[2]->$image_alt ?>" class="absolute inset-0 h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
                <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white"><?php echo $football_news[2]->$image_title ?></h3>
                <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                  <p><?php
                      $strtime = strtotime($football_news[2]->post_date);
                      $converted_date = convertDate(date('l, d M, Y', $strtime));
                      echo $converted_date; ?></p>
                </div>
              </article>
            </div>

          <?php endif ?>



        </div>





      </div>
    </section>
  <?php endif ?>

  <!-- Football -->





  <!-- Advertisement -->
  <section class="px-7 lg:px-0">
    <div class="custom-container">
      <div class="rounded-xl h-[90px] grid place-content-center text-center">
      <?php echo @$home_14;?>
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
              <img src="<?php echo $ascurl ?>/uploads/game-1.png " alt="poster" class="h-full w-full rounded-t-xl" />
            </div>
            <div class="px-3 py-4">

              </a>
            </div>
          </div>
        </div>


        <div class="lg:w-[33%]">
          <div class="news-card-big">
            <div class="big-img ">
              <img src="<?php echo $ascurl ?>/uploads/game-2.png" alt="poster" class="h-full w-full rounded-t-xl" />
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
                    <img src="<?php echo $ascurl ?>/images/global/share.png" alt="share icon" />
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
                      src="<?php echo $ascurl ?>ploads/depositphotos_604478050-stock-photo-harry-kane-tottenham-hotspur-looks.jpg"
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
                <img src="<?php echo $ascurl ?>ploads/depositphotos_604478050-stock-photo-harry-kane-tottenham-hotspur-looks.jpg"
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
                      src="<?php echo $ascurl ?>ploads/depositphotos_604478050-stock-photo-harry-kane-tottenham-hotspur-looks.jpg"
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
                <img src="<?php echo $ascurl ?>ploads/depositphotos_604478050-stock-photo-harry-kane-tottenham-hotspur-looks.jpg"
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
                <img src="<?php echo $ascurl ?>ploads/depositphotos_604478050-stock-photo-harry-kane-tottenham-hotspur-looks.jpg"
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
            <img src="<?php echo $ascurl ?>/uploads/game-3.png" alt="poster" class="h-full w-full rounded-t-xl" />
          </div>
          
        </div>

        <div class="">
          <div class="big-img">
            <img src="<?php echo $ascurl ?>/uploads/game-4.png" alt="poster" class="h-full w-full rounded-t-xl" />
          </div>
         
        </div>

        <div class="news-card-big">
          <div class="big-img ">
            <img src="<?php echo $ascurl ?>/uploads/game-5.png" alt="poster" class="h-full w-full rounded-t-xl" />
          </div>
          
        </div>

      </div>
    </div>
  </section>





</main>
<script src="<?php echo base_url().'application/views/themes/'.html_escape($default_theme).'/web-assets'?>/jquery-3.6.4.min.js"></script>
  <script src="src/videoModal.js"></script>
<script>
    $(document).ready(function () {

      function cricketApi(value = "cricket", api_key = "5634c65d7237edbb397ea03d46ab835e9498c0cd6a7db1e83a3738752f27e5f9") {
        //console.log(value);
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
          
            var allMatch = data.result;
            

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
                var event_name=allMatch[i].league_name;
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

              html += `<div class="slider-item min-w-[276px] lg:min-w-[350px] py-3 lg:py-5 px-4 lg:px-6 [background:rgba(206,224,255,0.18)] rounded-xl border border-solid border-[rgba(0,41,113,0.20)]">
          <div class="flex justify-between items-start gap-2">
            <div>
              <h4 class="text-[#002971] text-center text-xs font-semibold leading-[18px]">
                ${event_name}
              </h4>

            </div>
            <div class="px-3 shrink-0 rounded [background:#002971] text-center">
              
              <span class='text-[#FFBC00] text-center  text-[13px] font-medium leading-[18px]'>Live</span>
            </div>
          </div>

          <div class="my-5  gap-2 lg:gap-4 ">
            <div class="shrink-0 flex justify-between my-3 items-center gap-3">
              <div class="flex justify-start gap-0 items-center">
                <img src="${event_home_team_logo}" alt="${event_home_team}"  class="w-[42.857px] h-[24px] gray rounded-lg"/>
                <h6 class="m-0 p-2 text-[#002971] text-start  text-xs font-bold leading-[18px] uppercase">${event_home_team}</h6>
              </div>

              <div>

                <p class="text-[#002971]  text-base font-medium leading-[normal]">${event_home_final_result}</p>
              </div>
            </div>



            <div class="shrink-0 flex justify-between items-center gap-3">
              <div class="flex justify-start gap-0 items-center">
                <img src="${event_away_team_logo}" alt="${event_away_team}" class="w-[42.857px] h-[24px] rounded-lg"/>
                <h6 class="text-[#002971] p-2 m-0 text-center  text-xs font-bold leading-[18px] uppercase">${event_away_team}</h6>
              </div>

              <div>

                <p class="text-[#002971]  text-base font-medium leading-[normal]">${event_away_final_result}</p>
              </div>
            </div>
          </div>

          <p class="text-[#002971]   text-[15px] font-medium leading-[18px]">
            ${event_status_info}
          </p>
        </div>`;

              $(".banner-slider").html(html);
            }
          })
          .catch(error => {
            html = `<div class="slider-item min-w-[276px] lg:min-w-[350px] py-3 lg:py-5 px-4 lg:px-6 [background:rgba(206,224,255,0.18)] rounded-xl border border-solid border-[rgba(0,41,113,0.20)]">
          <div class="flex justify-between items-start gap-2">
            <div>
              <h4 class="text-[#393536] text-center [font-family:" plus_jakarta_sans"]="" text-[15px]="" font-semibold="" leading-[18px]"="">
                ICC Men's T20 World Cup
              </h4>

            </div>
            <div class="w-[41px] h-[22px] shrink-0 rounded [background:rgba(249,146,7,0.17)] text-center">
              
              <span class="text-[#393536] text-center [font-family:&quot;Plus_Jakarta_Sans&quot;] text-[13px] font-medium leading-[18px]">Live</span>
            </div>
          </div>

          <div class="my-5  gap-2 lg:gap-4 ">
            <div class="shrink-0 flex justify-between my-4 items-center gap-3">
              <div class="flex justify-start gap-2 items-center">
                <img src="https://apiv2.allsportsapi.com/logo-cricket/158_scotland.jpg" alt="Scotland" style="width:35px;height:24px">
                <h6 class="text-[10px] lg:text-sm text-[#393536] uppercase">Scotland</h6>
              </div>

              <div>

                <p class="text-[#002971] [font-family:" plus_jakarta_sans"]="" text-base="" font-medium="" leading-[normal]"="">90/0</p>
              </div>
            </div>



            <div class="shrink-0 flex justify-between items-center gap-3">
              <div class="flex justify-start gap-2 items-center">
                <img src="https://apiv2.allsportsapi.com/logo-cricket/135_england.jpg" alt="England" style="width:35px;height:24px" ">
                <h6 class="text-[10px] lg:text-sm text-[#393536] uppercase">England</h6>
              </div>

              <div>

                <p class="text-[#002971] [font-family:" plus_jakarta_sans"]="" text-base="" font-medium="" leading-[normal]"="">--</p>
              </div>
            </div>
          </div>

          <p class="text-[#002971]  [font-family:" plus_jakarta_sans"]="" text-[15px]="" font-medium="" leading-[18px]"="">
            No result
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


      function footballApi(value = "football", api_key = "5634c65d7237edbb397ea03d46ab835e9498c0cd6a7db1e83a3738752f27e5f9") {
        //console.log(value);
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

              if (value == 'football') {
                var league_name = allMatch[i].league_name;
                var event_home_team = allMatch[i].event_home_team;
                var event_home_team_logo = allMatch[i].home_team_logo;
                var event_away_team = allMatch[i].event_away_team;
                var event_away_team_logo = allMatch[i].away_team_logo;
                var event_date_start = allMatch[i].event_date_start;
                var event_date_stop = allMatch[i].event_date_stop;
                var event_status_info = allMatch[i].event_stadium;
                var event_name= allMatch[i].country_name+ " "+ allMatch[i].league_name;
                var event_toss = allMatch[i].event_toss;
                var event_home_final_result = allMatch[i].event_final_result.split("-")[0];
                var event_away_final_result = allMatch[i].event_final_result.split("-")[1];

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

              if(event_name.length>24)
              {
                 event_name=event_name.substr(0,24)+'...';
              }

              html += `<div class="slider-item min-w-[276px] lg:min-w-[350px] py-3 lg:py-5 px-4 lg:px-6 [background:rgba(206,224,255,0.18)] rounded-xl border border-solid border-[rgba(0,41,113,0.20)]">
          <div class="flex justify-between items-start gap-2">
            <div>
              <h4 class="text-[#002971] text-center text-xs font-semibold leading-[18px]">
                ${event_name}
              </h4>

            </div>
            <div class="px-3 shrink-0 rounded [background:#002971] text-center">
              
              <span class='text-[#FFBC00] text-center  text-[13px] font-medium leading-[18px]'>Live</span>
            </div>
          </div>

          <div class="my-5  gap-2 lg:gap-4 ">
            <div class="shrink-0 flex justify-between my-3 items-center gap-3">
              <div class="flex justify-start gap-0 items-center">
                <img src="${event_home_team_logo}" alt="${event_home_team}"  class="w-[42.857px] h-[24px] gray rounded-lg"/>
                <h6 class="m-0 p-2 text-[#002971] text-start  text-xs font-bold leading-[18px] uppercase">${event_home_team}</h6>
              </div>

              <div>

                <p class="text-[#002971]  text-base font-medium leading-[normal]">${event_home_final_result}</p>
              </div>
            </div>



            <div class="shrink-0 flex justify-between items-center gap-3">
              <div class="flex justify-start gap-0 items-center">
                <img src="${event_away_team_logo}" alt="${event_away_team}" class="w-[42.857px] h-[24px] rounded-lg"/>
                <h6 class="text-[#002971] p-2 m-0 text-center  text-xs font-bold leading-[18px] uppercase">${event_away_team}</h6>
              </div>

              <div>

                <p class="text-[#002971]  text-base font-medium leading-[normal]">${event_away_final_result}</p>
              </div>
            </div>
          </div>

          <p class="text-[#002971]   text-[15px] font-medium leading-[18px]">
            ${event_status_info}
          </p>
        </div>`;

              $(".banner-slider").html(html);
            }
          })
          .catch(error => {
            html = `<div class="banner-slider" id="scrollport"><div class="slider-item min-w-[276px] lg:min-w-[350px] py-3 lg:py-5 px-4 lg:px-6 [background:rgba(206,224,255,0.18)] rounded-xl border border-solid border-[rgba(0,41,113,0.20)]">
          <div class="flex justify-between items-start gap-2">
            <div>
              <h4 class="text-[#393536] text-center [font-family:" plus_jakarta_sans"]="" text-[15px]="" font-semibold="" leading-[18px]"="">
                Worldcup AFC World C...
              </h4>

            </div>
            <div class="w-[41px] h-[22px] shrink-0 rounded [background:rgba(249,146,7,0.17)] text-center">
              
              <span class="text-[#393536] text-center [font-family:&quot;Plus_Jakarta_Sans&quot;] text-[13px] font-medium leading-[18px]">Live</span>
            </div>
          </div>

          <div class="my-5  gap-2 lg:gap-4 ">
            <div class="shrink-0 flex justify-between my-4 items-center gap-3">
              <div class="flex justify-start gap-2 items-center">
                <img src="https://apiv2.allsportsapi.com/logo/484_indonesia.jpg" alt="Indonesia" style="width:35px;height:24px">
                <h6 class="text-[10px] lg:text-sm text-[#393536] uppercase">Indonesia</h6>
              </div>

              <div>

                <p class="text-[#002971] [font-family:" plus_jakarta_sans"]="" text-base="" font-medium="" leading-[normal]"="">0 - 0</p>
              </div>
            </div>



            <div class="shrink-0 flex justify-between items-center gap-3">
              <div class="flex justify-start gap-2 items-center">
                <img src="https://apiv2.allsportsapi.com/logo/642_iraq.jpg" alt="Iraq" style="width:35px;height:24px" "="">
                <h6 class="text-[10px] lg:text-sm text-[#393536] uppercase">Iraq</h6>
              </div>

              <div>

                <p class="text-[#002971] [font-family:" plus_jakarta_sans"]="" text-base="" font-medium="" leading-[normal]"="">0 - 0</p>
              </div>
            </div>
          </div>

          <p class="text-[#002971]  [font-family:" plus_jakarta_sans"]="" text-[15px]="" font-medium="" leading-[18px]"="">
            Gelora Bung Karno Stadium, Senayan
          </p>
        </div></div>`;


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
          cricketApi(selectedValue, '5634c65d7237edbb397ea03d46ab835e9498c0cd6a7db1e83a3738752f27e5f9');
          intervalId = setInterval(function () {
            cricketApi(selectedValue, '5634c65d7237edbb397ea03d46ab835e9498c0cd6a7db1e83a3738752f27e5f9');
          }, 5000);
        }
        if (selectedValue == 'football') {
          footballApi(selectedValue, '5634c65d7237edbb397ea03d46ab835e9498c0cd6a7db1e83a3738752f27e5f9');
          intervalId = setInterval(function () {
            footballApi(selectedValue, '5634c65d7237edbb397ea03d46ab835e9498c0cd6a7db1e83a3738752f27e5f9');
          }, 5000);
        }
      });
    });


  </script>
</body>



</html>