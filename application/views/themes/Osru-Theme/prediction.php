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
          <span class="text-[#73738C] font-semibold"> &gt; </span>
          <span class="text-[#73738C] font-medium">Tops &amp; Predictions</span>
        </li>
      </ul>
    </div>
  </section>

  <!-- Top Betting site in india -->
  <section class="mt-7 mb-10">
    <div class="custom-container">
      <div class="flex justify-between items-center mb-5">
        <h1 class="text-black text-xl lg:text-3xl font-semibold">Top Betting platform in india</h1>
      </div>

      <div class="space-y-4 lg:space-y-5">
        <!-- item -->
        <?php if(count($lists)>0):?>
          <?php foreach ($lists as $key=>$item):?>

            <a class="cursor-pointer" href="<?php echo base_url('tips/betting_overview/'.$item['id'].'?info='.uniqid())?>">
        </a>
        <div class="main_content border rounded-2xl py-6 px-3  bg-[<?php echo $item['color']?>] shrink-0"><a class="cursor-pointer" href="<?php echo base_url('tips/betting_overview/'.$item['id'].'?info='.uniqid())?>">
          </a>
          <div style="background: linear-gradient(161deg, rgba(255, 255, 255, 0.20) 15.68%, rgba(255, 255, 255, 0.00) 98.26%);" class="shrink-0 px-4 py-2 border rounded-3xl border-transparent flex lg:justify-between lg:flex-row flex-col"><a class="cursor-pointer" href="<?php echo base_url('tips/betting_overview/'.$item['id'].'?info='.uniqid())?>">

              <div class="flex flex-wrap justify-center items-center   ">
                <div class="first_part  flex gap-3">
                  <div class="image-section">
                    <img src="<?php echo base_url('uploads/' . $item['image_upload']);?>" class="h-14 w-40 lg:h-24 " alt="">
                  </div>

                  <div class="flex flex-col justify-center ">
                    <div class="lg:h-full h-14 w-0 p-0 m-0 bg-transparent border-dotted border rounded-full border-yellow-500"></div>
                  </div>
                </div>

                <div class="second_part lg:flex lg:gap-2  ">
                  <div class="flex flex-col justify-center gap-1 px-4 py-2 items-center">
                    <div class="o1 border rounded-xl border-transparent px-4 py-2" style="
                      background: linear-gradient(180deg, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0.25) 100%);">
                      <h1 class="text-white text-xl font-bold text-center p-0">0<?php echo ++$key?></h1>
                    </div>
                    <div class="div">
                      <h4 class="text-white text-xl text-center"><?php echo $item['website_name']?></h4>
                    </div>
                  </div>

                  <div class="hidden   lg:flex flex-col justify-center ">
                    <div class="h-14 lg:h-full  p-0 m-0 bg-transparent border-dotted border border-yellow-500"></div>
                  </div>
                </div>

                <div class="third_part flex justify-start gap-2">
                  <div class=" flex flex-col lg:px-4 lg:py-2">
                    <div class="">
                      <h4 class="text-white text-lg font-light">Bonus code:</h4>
                    </div>
                    <div class=" bg-transparent border-dotted border-2 border-white rounded-2xl">
                      <h6 class="text-white px-3 py-2 text-center"><?php echo $item['bonus_code']?></h6>
                    </div>
                    <div class="ratings flex gap-1">
                      <div class="">
                        <p class="text-white text-lg font-light  p-0 m-0 "><?php echo $item['rating']?></p>
                      </div>
                      <div class="starts">
                        <p class=" text-yellow-500 text-2xl font-bold  p-0 m-0">
                          <?php
                          for ($i = 0; $i < $item['rating']; $i++) {
                            echo "*";
                          }
                         ?>
                        </p>
                      </div>
                    </div>


                  </div>
                  <div class="flex flex-col justify-center py-2 ">
                    <div class="h-14 lg:h-full  p-0 m-0 bg-transparent border-dotted border border-yellow-500"></div>
                  </div>
                </div>


                <div class="fourth_part flex flex-col gap-1">
                  <div class="">
                    <h4 class="text-white text-lg font-bold">Bonus ₹<?php echo $item['welcome_bonus']?></h4>
                  </div>
                  <div class="flex items-center px-4">
                    <div class="icon">
                      <img src="../images/electric.png" alt="">
                    </div>
                    <div class="">
                      <p class="text-white text-sm font-light">Payout - <?php echo $item['payout']?> Days</p>
                    </div>
                  </div>
                  <div class="flex items-center px-4">
                    <div class="icon">
                      <img src="../images/time.png" alt="">
                    </div>
                    <div class="">
                      <p class="text-white text-sm font-light">Win rate -<?php echo $item['win_rate']?>%</p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="flex flex-col py-6 px-3 justify-center items-center gap-2"><a class="cursor-pointer" href="<?php echo base_url('tips/betting_overview/'.$item['id'].'?info='.uniqid())?>">
              </a>
              <div class="button"><a class="cursor-pointer" href="<?php echo base_url('tips/betting_overview/'.$item['id'].'?info='.uniqid())?>">
                </a><a class="text-white  px-3 py-2 border border-transparent text-sm font-light shadow-2xl hover:bg-blue-800 rounded-xl uppercase bg-[#00B6FF] lg:bg-white lg:text-black lg:hover:text-white" href="<?php echo base_url('tips/betting_overview/'.$item['id'].'?info='.uniqid())?>" rel="noopener noreferrer" target="_blank">Claim Bonus <img src="../images/link.png" class="inline h-5" alt=""> </a>
              </div>
              <div class="review">
                <a class="text-sm font-light text-white underline">Read Review</a>
              </div>
            </div>

          </div>
        </div>
            <?php endforeach?>
        <?php endif?>
        

  
      </div>

    </div>
  </section>

  <!-- Why only SportsRani?? -->
  <section class="mb-6 mt-20 py-20">
    <div class="custom-container">
      <div class="lg:w-[70%]">
        <h3 class="mb-4 text-[#002971] text-xl lg:text-2xl font-semibold">What is Online Betting?</h3>
        <p class="text-textGray text-base lg:text-primary">
          Placing bets or wagers on diverse sports, events, or games via the internet constitutes online betting, a practice that has gained increasing popularity over the years. This trend allows individuals to conveniently place bets from the comfort of their homes or while on the go, utilizing mobile devices like smartphones or tablets. Online betting provides a wide array of choices, encompassing sports betting, casino games, poker, and more. The proliferation of online betting platforms affords players access to a variety of options and features, including live streaming of events, in-play betting, and multiple payment alternatives. Nevertheless, it is crucial to acknowledge that online betting carries inherent risks, such as addiction and financial losses. Players must engage in responsible gambling and stay within their financial limits.
        </p>



        <br>
        <br>
        <h3 class="mb-4 text-[#002971] text-xl lg:text-2xl font-semibold">About the Legality of Online Betting in India</h3>
        <p class="text-textGray text-base lg:text-primary">
          There isn't a single law that prohibits online betting in India. Sikkim is continually trying to establish an online betting licensing system. This will make online betting regulated under state laws. It is recommended that all players look into local state laws for their area to ensure a complete understanding of online sports betting where they live.&nbsp;You can learn more about this topic in&nbsp;this article.
        </p>
        <br>


        <h3 class="mb-4 text-[#002971] text-xl lg:text-2xl font-semibold">Betting Sites with Online Casinos in India</h3>
        <p class="text-textGray text-base lg:text-primary">
          In India, many online betting sites offer sports betting and online casino games. These sites offer a good range of casino games, including slots and live dealer games. They also provide secure payment options and customer support. Additionally, many of those sites offer promotions and bonuses for new and existing players, such as free spins and deposit bonuses. If you enjoy sports betting and online casino gaming, these sites offer a convenient and comprehensive gaming experience.
        </p>

        <br>
        <br>

        <h3 class="mb-4 text-[#002971] text-xl lg:text-2xl font-semibold">Responsible Gambling</h3>
        <p class="text-textGray text-base lg:text-primary">
          Responsible gambling is important to ensure that gambling remains an enjoyable activity, without causing harm to oneself or others. This involves setting and sticking to limits, avoiding chasing losses, and seeking necessary help. Reputable online betting sites in India often have resources and tools available to help promote responsible gambling, such as setting deposit limits and self-exclusion options. It is very important to prioritise responsible gambling practices to ensure a secure and pleasant gaming experience.
        </p>




        <br>
        <br>

      </div>

      
    </div>
  </section>

  


  <script src="src/accodion.js"></script>
</main>