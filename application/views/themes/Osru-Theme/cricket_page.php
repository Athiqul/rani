<main>
  <!-- Slider section -->


  <!-- Slider section -->
  <section class="section-padding">
    <div class="custom-container">
      
      <div class="banner-slider" id="scrollport">


       


      </div>
      <!--<div class="progress-bar-container mt-4 hidden lg:block">-->
      <!--  <div class="progress-bar" style="width: 0"></div>-->
      <!--</div>-->
    </div>
  </section>


  <!-- Advertisement -->
  <section class="px-7 lg:px-0">
    <div class="custom-container">
      <div class="bg-secondary rounded-xl h-[90px] grid place-content-center text-center">
        <h4 class="text-primary text-xl font-semibold">Advertisement</h4>
      </div>
    </div>
  </section>

  <!-- News section -->
  <!-- Cricket -->
  <?php if (count($latest_news) > 0) : ?>
    <section class="section-padding">
      <div class="custom-container">
        <h1 class="mb-5 section-heading">ক্রিকেট</h1>

        <div class="flex flex-col lg:flex-row gap-5 lg:gap-7">
          <div class="lg:w-[66%]">
            <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
              <img src="<?php echo base_url() . 'uploads/' . $latest_news[0]->image ?>" alt="<?php echo $latest_news[0]->image_alt ?>" class="absolute inset-0 h-full w-full object-cover" style="height: 500px;">
              <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
              <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white"><?php echo $latest_news[0]->image_title ?></h3>
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
    </section>

    <!-- Criket section -->
    <section>
      <div class="custom-container">
        <!-- <h1 class="mb-5 section-heading">Football</h1> -->
        <div class="flex flex-col lg:flex-row gap-5 lg:gap-7">

          <?php if (count($latest_news) > 1) : ?>

            <div class="lg:w-[33%]">
              <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
                <img src="<?php echo base_url() . 'uploads/' . $latest_news[1]->image ?>" alt="<?php echo $latest_news[1]->$image_alt ?>" class="absolute inset-0 h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
                <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white"><?php echo $latest_news[1]->$image_title ?></h3>
                <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                  <p><?php
                      $strtime = strtotime($latest_news[1]->post_date);
                      $converted_date = convertDate(date('l, d M, Y', $strtime));
                      echo $converted_date; ?></p>
                </div>
              </article>
            </div>

          <?php endif ?>

          <div class="lg:w-[33%]">
            <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">

              <div class="absolute inset-0 bg-blue-900 flex items-center justify-center">
                <h2 class=" text-center text-white">Adds</h2>
              </div>

            </article>
          </div>

          <?php if (count($latest_news) > 2) : ?>
            <div class="lg:w-[33%]">
              <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-full ">
                <img src="<?php echo base_url() . 'uploads/' . $latest_news[2]->image ?>" alt="<?php echo $latest_news[2]->$image_alt ?>" class="absolute inset-0 h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-700 opacity-40"></div>
                <h3 class="z-10 mr-0 gap-y-1 leading-6 text-sm font-bold text-white"><?php echo $latest_news[2]->$image_title ?></h3>
                <div class="z-10 ml-5 gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                  <p><?php
                      $strtime = strtotime($latest_news[2]->post_date);
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

  <script src="<?php echo base_url().'application/views/themes/'.html_escape($default_theme).'/web-assets'?>/jquery-3.6.4.min.js"></script>
  <script src="src/videoModal.js"></script>

  <script>
    $(document).ready(function() {

      function cricketApi(value = "cricket", api_key = "eb628efd6a6c3b3597af5aed32bf72939df0142a2fa2fda0d1de3d48d2b9fa19") {
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

              html += `<div class="slider-item min-w-[276px] lg:min-w-[350px] py-3 lg:py-5 px-4 lg:px-6 bg-secondary rounded-xl">
          <div class="flex justify-between items-start gap-2">
            <div>
              <h4 class="text-[10px] lg:text-[11px] leading-[14px] text-white">
                ${event_name}
              </h4>

            </div>
            <div class="shrink-0 rounded  px-1.5  text-[10px]  text-white flex bg-orange-500 gap-2  items-center">
              <i class="fa-regular fa-circle-dot"></i>
              <span>Live</span>
            </div>
          </div>

          <div class="my-5  gap-2 lg:gap-4 ">
            <div class="shrink-0 flex justify-between my-4 items-center gap-3">
              <div class="flex justify-start gap-2 items-center">
                <img src="${event_home_team_logo}" alt="${event_home_team}" class="w-7 lg:h-7 lg:w-12  ">
                <h6 class="text-[10px] lg:text-sm text-[#F1F5F9] uppercase">${event_home_team}</h6>
              </div>

              <div>

                <p class="mt-.5 text-xs  text-white ">${event_home_final_result}</p>
              </div>
            </div>



            <div class="shrink-0 flex justify-between items-center gap-3">
              <div class="flex justify-start gap-2 items-center">
                <img src="${event_away_team_logo}" alt="${event_away_team}" class="w-7 lg:h-7 lg:w-12  ">
                <h6 class="text-[10px] lg:text-sm text-[#F1F5F9] uppercase">${event_away_team}</h6>
              </div>

              <div>

                <p class="mt-.5 text-xs  text-white ">${event_away_final_result}</p>
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
                    src="src/images/global/srilanka-flag.png"
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
                    src="src/images/global/zim-flag.png"
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
      setInterval(cricketApi, 5000);

    });
  </script>
</main>