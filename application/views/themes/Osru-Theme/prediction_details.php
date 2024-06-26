<?php 
   
    $ascurl = base_url().'application/views/themes/'.html_escape($default_theme).'/web-assets';
    
   


?>

<section class="px-7 lg:px-0 mt-10 lg:mt-4 mb-10">
        <div class="custom-container">
          <div
            class="bg-[#E6E2E0] rounded-xl h-[90px] grid place-content-center text-center"
          >
            <h4 class="text-black text-xl font-semibold">ADS</h4>
          </div> 
        </div>
      </section>

       <!-- Breadcrumbs -->
       <section>
        <div class="custom-container">
          <ul>
            <li class="flex items-center gap-4">
              <span class="text-[#444D56] font-medium"><a href="<?php echo base_url()?>">Home</a></span>
              <span class="text-[#73738C] font-semibold"> > </span>
              <span class="text-[#73738C] font-medium">Read Review</span>
            </li>
          </ul>
        </div>
      </section>
      <!--Banner Goes From Here-->
      <section>
        <div class="custom-container ">
            <div class="mt-10 gap-4  md:flex md:justify-between bg-[#002971]">
                <div class="first-element px-10 py-10 gap-4 flex flex-col justify-between">
                    <div class="child-element">
                        <h1 class="text-yellow-500 font-extrabold text-2xl lg:text-6xl"><?php echo $review['website_name']?></h1>
                    </div>
                    <div class="child-element">
                        <h4 class="text-yellow-500 font-sans">Bonus</h4>
                        <h2 class="text-white text-xl p-0 font-bold" ><?php echo $review['welcome_bonus']?> Taka</h2>
                        <h6 class="text-yellow-400 text-sm ">up to</h6>
                    </div>
                    
                    <div class="child-element flex gap-4">
                        <div class="star-count">
                            <h4 class="text-white"><?php echo $review['rating']?></h4>
                        </div>
                        <div class="stars flex ">
                        <?php
                          for ($i = 0; $i < (int)$review['rating']; $i++) {
                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                            <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#F99207"/>
                          </svg>';
                          }
                         ?>
                            
                              
                        </div>
                    </div>
               </div>
               <div class="second-element px-10 py-10  flex flex-col justify-center items-center md:justify-around md:items-start">
                   <div class="child-element ">
                    <img src="<?php echo base_url('uploads/' . $review['image_upload']);?>" class="h-20 w-full lg:h-28" alt="">
                   </div>
                   <div class="child-element md:mx-auto">
                    <a href="<?php echo $review['website_url']?>" class=" md:mx-auto bg-yellow-500 px-6 py-3 rounded-full text-base" target="_blank" rel="noopener noreferrer">Start Playing</a>
                   </div>
               </div>
            </div>
           
          </div>
      </section>
     
      <!--Banner Ends Here-->
      <!--1xbet OverView-->
      <section >
        <div class="custom-container">
            <div class="header-top py-10 px-4">
                <h1 class="font-extrabold text-[#002971] text-3xl text-center">1XBET overview</h1>
            </div>
           <div class="contain flex flex-col md:flex-row md:justify-between gap-4">
            <div class="left_part border rounded md:w-3/5">
                  <div class="child bg-[#EBEEF2] flex justify-between px-6 py-6 text-start">
                      <div class="w-2/4">
                          <h4 class="font-bold p-0 text-sm">Founded In</h4>
                          <p class="text-sm"><?php echo date('Y',strtotime($review['founding_date']))?></p> 
                      </div>
                      <div class="w-2/4">
                        <h4 class="font-bold p-0 text-sm">Owner</h4>
                          <p class="text-sm"><?php echo $review['owner']?></p> 
                      </div>
                  </div>
                  <div class="child bg-[#F7F8F9] flex justify-between px-6 py-6 text-start">
                    <div class="w-2/4">
                        <h4 class="font-bold p-0 text-sm">Percentage Payout</h4>
                        <p class="text-sm"><?php echo $review['percentage_payout']?>%</p> 
                    </div>
                    <div class="w-2/4">
                      <h4 class="font-bold p-0 text-sm">Payout Speed</h4>
                        <p class="text-sm"><?php echo $review['payout']?> days</p> 
                    </div>
                  </div>
                  <div class="child bg-[#EBEEF2] flex justify-between px-6 py-6 text-start">
                    <div class="w-2/4">
                        <h4 class="font-bold p-0 text-sm">Number of games</h4>
                        <p class="text-sm"><?php echo $review['number_of_games']?></p> 
                    </div>
                    <div class="w-2/4">
                      <h4 class="font-bold p-0 text-sm">Max Jackpot</h4>
                        <p class="text-sm">$<?php echo $review['max_jackpot']?></p> 
                    </div>
                  </div>
                  <div class="child bg-[#F7F8F9] flex justify-between px-6 py-6 text-start"  >
                    <div class="w-2/4">
                        <h4 class="font-bold p-0 text-sm">Compatible with</h4>
                        <p class="text-sm"><?php echo $review['compatible_with']?></p> 
                    </div>
                    <div class="w-2/4">
                      <h4 class="font-bold p-0 text-sm">Languages</h4>
                        <p class="text-sm"><?php echo $review['language']?></p> 
                    </div>
                  </div>
            </div>
            <div class="right_part md:w-2/5 bg-[#002971] rounded">
                <div class="content flex flex-col justify-center items-center py-10 px-10 gap-12">
                       <div class="">
                        <img src="<?php echo base_url('uploads/' . $review['image_upload']);?>" class="h-24 w-auto" alt="" srcset="">
                       </div>
                       <div class="">
                        <h1 class="text-white font-light text-center">Get Welome Bonus</h1>
                        <h1 class="text-white p-0 font-bold text-3xl"><?php echo $review['welcome_bonus']?> Taka</h1>
                       </div>
                       <div class=" md:mx-auto">
                        <a href="#" class=" md:mx-auto bg-yellow-500 px-6 py-3 rounded-full text-base" target="_blank" rel="noopener noreferrer">Claim Bonus</a>
                       </div>
                </div>
            </div>
           </div>

        </div>
      </section>

      <!-- 1x Overview ends here -->
      <!-- Banking option -->
      <section>
        <div class="custom-container py-10">
          <h1 class="text-lg py-2">Available Banking Options</h1>
          <div class="banks flex gap-4">
            <?php 
            
            ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="66" height="25" viewBox="0 0 66 25" fill="none">
              <path d="M29.71 20.26H25.71L28.2 4.74997H32.2L29.71 20.26ZM22.28 4.74997L18.43 15.42L18 13.12L16.64 6.11997C16.5616 5.68637 16.3197 5.29942 15.9643 5.03892C15.6089 4.77842 15.1671 4.66426 14.73 4.71997H8.33001L8.26001 4.99997C9.749 5.37528 11.172 5.97552 12.48 6.77997L16 20.26H20.2L26.62 4.74997H22.28ZM54 20.26H57.71L54.51 4.74997H51.26C50.8668 4.71985 50.4743 4.81615 50.1397 5.02482C49.8051 5.2335 49.5459 5.54363 49.4 5.90997L43.4 20.26H47.61L48.45 17.96H53.58L54.05 20.26H54ZM49.56 14.77L51.71 8.99997L52.91 14.8L49.56 14.77ZM43.66 8.47997L44.24 5.14997C43.074 4.73107 41.8485 4.5015 40.61 4.46997C38.61 4.46997 33.85 5.34997 33.85 9.60997C33.85 13.61 39.43 13.66 39.43 15.77C39.43 17.88 34.43 17.5 32.77 16.17L32.17 19.65C33.6123 20.257 35.1654 20.5567 36.73 20.53C39.48 20.53 43.64 19.1 43.64 15.22C43.64 11.22 38 10.81 38 9.05997C38 7.30997 42 7.52997 43.69 8.47997H43.66Z" fill="#2767AF"/>
              <path d="M18 13.1201L16.64 6.12011C16.5616 5.68651 16.3197 5.29955 15.9643 5.03906C15.6089 4.77856 15.1671 4.66439 14.73 4.72011H8.33001L8.26001 5.00011C10.4526 5.55676 12.4992 6.58006 14.26 8.00011C15.9432 9.3406 17.2349 11.109 18 13.1201Z" fill="#E7A640"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="66" height="25" viewBox="0 0 66 25" fill="none">
              <path d="M47.9201 24.2499V24.3199H48.0001L47.9201 24.2499ZM47.9201 24.2499C47.931 24.2446 47.943 24.2418 47.9551 24.2418C47.9672 24.2418 47.9792 24.2446 47.9901 24.2499C47.9945 24.2575 47.9968 24.2661 47.9968 24.2749C47.9968 24.2837 47.9945 24.2923 47.9901 24.2999C47.9901 24.2999 47.9901 24.2999 47.9301 24.2999L48.0101 24.3799H48.0001L47.9301 24.2999V24.3799H47.8801V24.1499H48.0001L47.9201 24.2499ZM47.9201 24.5699H47.9901H48.0601V24.5099C48.0802 24.4584 48.0802 24.4013 48.0601 24.3499V24.2899H47.9901H47.9201H47.8401H47.7801C47.7586 24.3225 47.7471 24.3608 47.7471 24.3999C47.7471 24.439 47.7586 24.4772 47.7801 24.5099C47.7772 24.5298 47.7772 24.55 47.7801 24.5699H47.8401H47.9201ZM47.9201 24.1199C47.9533 24.1184 47.9865 24.1239 48.0175 24.136C48.0484 24.148 48.0766 24.1664 48.1001 24.1899L48.1601 24.2699C48.1801 24.335 48.1801 24.4047 48.1601 24.4699L48.1001 24.5499H48.0201C47.9874 24.5593 47.9528 24.5593 47.9201 24.5499C47.8876 24.5606 47.8526 24.5606 47.8201 24.5499H47.7301C47.7099 24.5256 47.6931 24.4987 47.6801 24.4699C47.665 24.4387 47.6572 24.4045 47.6572 24.3699C47.6572 24.3353 47.665 24.3011 47.6801 24.2699C47.691 24.2375 47.7121 24.2095 47.7401 24.1899C47.7623 24.1645 47.7895 24.144 47.8201 24.1299H47.9201M24.1401 23.2299C24.1411 23.0817 24.1849 22.9369 24.2662 22.8129C24.3475 22.689 24.4628 22.5911 24.5983 22.5311C24.7339 22.4711 24.8838 22.4515 25.0302 22.4746C25.1767 22.4977 25.3133 22.5626 25.4237 22.6615C25.5341 22.7604 25.6137 22.889 25.6528 23.032C25.6919 23.175 25.6889 23.3262 25.6442 23.4675C25.5995 23.6088 25.5149 23.7342 25.4006 23.8287C25.2864 23.9231 25.1473 23.9826 25.0001 23.9999C24.8942 24.0016 24.7891 23.9812 24.6916 23.9399C24.594 23.8986 24.5062 23.8374 24.4337 23.7602C24.3612 23.683 24.3056 23.5915 24.2706 23.4916C24.2355 23.3916 24.2217 23.2855 24.2301 23.1799M26.2901 23.1799V21.8899H25.7401V22.1999C25.6428 22.0798 25.5191 21.9839 25.3786 21.9197C25.238 21.8555 25.0845 21.8248 24.9301 21.8299C24.5747 21.8299 24.2339 21.9711 23.9826 22.2224C23.7313 22.4737 23.5901 22.8145 23.5901 23.1699C23.5901 23.5253 23.7313 23.8661 23.9826 24.1174C24.2339 24.3687 24.5747 24.5099 24.9301 24.5099C25.0853 24.5138 25.2394 24.4815 25.38 24.4155C25.5206 24.3496 25.6439 24.2518 25.7401 24.1299V24.4399H26.2901V23.1699V23.1799ZM45.0201 23.1799C45.0298 23.0301 45.0832 22.8864 45.1735 22.7666C45.2638 22.6467 45.3872 22.5558 45.5284 22.5051C45.6697 22.4544 45.8227 22.4461 45.9686 22.4813C46.1146 22.5164 46.247 22.5934 46.3498 22.7028C46.4525 22.8122 46.5211 22.9493 46.5469 23.0971C46.5728 23.245 46.5549 23.3971 46.4955 23.535C46.436 23.6728 46.3376 23.7902 46.2122 23.8728C46.0869 23.9554 45.9402 23.9996 45.7901 23.9999C45.6842 24.0016 45.5791 23.9812 45.4816 23.9399C45.384 23.8986 45.2962 23.8374 45.2237 23.7602C45.1512 23.683 45.0956 23.5915 45.0606 23.4916C45.0255 23.3916 45.0117 23.2855 45.0201 23.1799ZM47.0901 23.1799V20.8799H46.5301V22.1999C46.4339 22.0812 46.3117 21.9861 46.1731 21.922C46.0344 21.8578 45.8828 21.8263 45.7301 21.8299C45.3747 21.8299 45.0339 21.9711 44.7826 22.2224C44.5313 22.4737 44.3901 22.8145 44.3901 23.1699C44.3901 23.5253 44.5313 23.8661 44.7826 24.1174C45.0339 24.3687 45.3747 24.5099 45.7301 24.5099C45.8837 24.5122 46.0357 24.4792 46.1745 24.4133C46.3132 24.3474 46.4349 24.2504 46.5301 24.1299V24.4399H47.0001L47.0901 23.1799ZM33.1701 22.3399C33.2537 22.3372 33.3369 22.3512 33.415 22.3811C33.4931 22.4109 33.5645 22.456 33.625 22.5137C33.6855 22.5714 33.7339 22.6406 33.7674 22.7172C33.8009 22.7938 33.8188 22.8763 33.8201 22.9599H32.4401C32.4504 22.7884 32.5272 22.6276 32.6542 22.5118C32.7812 22.3961 32.9483 22.3344 33.1201 22.3399M33.1201 21.8399C32.9464 21.8367 32.774 21.8697 32.6137 21.9368C32.4535 22.0039 32.3091 22.1037 32.1896 22.2298C32.0701 22.3559 31.9782 22.5055 31.9197 22.6691C31.8613 22.8327 31.8376 23.0066 31.8501 23.1799C31.8387 23.3562 31.8646 23.533 31.926 23.6988C31.9874 23.8645 32.083 24.0154 32.2065 24.1418C32.33 24.2682 32.4788 24.3671 32.6431 24.4323C32.8074 24.4974 32.9835 24.5273 33.1601 24.5199C33.525 24.519 33.8783 24.3918 34.1601 24.1599L33.8801 23.7499C33.6708 23.9206 33.4101 24.0157 33.1401 24.0199C32.9564 24.034 32.7745 23.9761 32.6327 23.8586C32.4909 23.741 32.4003 23.573 32.3801 23.3899H34.2701C34.2751 23.32 34.2751 23.2498 34.2701 23.1799C34.2884 23.0104 34.2707 22.839 34.2182 22.6768C34.1656 22.5147 34.0794 22.3654 33.9652 22.2389C33.8509 22.1124 33.7112 22.0115 33.5553 21.9427C33.3993 21.8739 33.2306 21.8389 33.0601 21.8399M39.7501 23.1799C39.7377 23.0707 39.7485 22.9602 39.7817 22.8554C39.815 22.7507 39.87 22.6542 39.9432 22.5723C40.0164 22.4903 40.106 22.4247 40.2063 22.3798C40.3066 22.3349 40.4152 22.3117 40.5251 22.3117C40.635 22.3117 40.7436 22.3349 40.8439 22.3798C40.9442 22.4247 41.0338 22.4903 41.107 22.5723C41.1801 22.6542 41.2352 22.7507 41.2685 22.8554C41.3017 22.9602 41.3125 23.0707 41.3001 23.1799C41.3125 23.2891 41.3017 23.3996 41.2685 23.5043C41.2352 23.609 41.1801 23.7055 41.107 23.7875C41.0338 23.8695 40.9442 23.935 40.8439 23.9799C40.7436 24.0248 40.635 24.0481 40.5251 24.0481C40.4152 24.0481 40.3066 24.0248 40.2063 23.9799C40.106 23.935 40.0164 23.8695 39.9432 23.7875C39.87 23.7055 39.815 23.609 39.7817 23.5043C39.7485 23.3996 39.7377 23.2891 39.7501 23.1799ZM41.8201 23.1799V21.8899H41.2601V22.1999C41.1639 22.0812 41.0417 21.9861 40.9031 21.922C40.7644 21.8578 40.6128 21.8263 40.4601 21.8299C40.1047 21.8299 39.7639 21.9711 39.5126 22.2224C39.2613 22.4737 39.1201 22.8145 39.1201 23.1699C39.1201 23.5253 39.2613 23.8661 39.5126 24.1174C39.7639 24.3687 40.1047 24.5099 40.4601 24.5099C40.6137 24.5122 40.7657 24.4792 40.9045 24.4133C41.0432 24.3474 41.1649 24.2504 41.2601 24.1299V24.4399H41.8201V23.1699V23.1799ZM36.6201 23.1799C36.6129 23.3595 36.6432 23.5387 36.7093 23.7058C36.7753 23.873 36.8756 24.0246 37.0037 24.1507C37.1317 24.2769 37.2847 24.3749 37.4529 24.4385C37.621 24.5021 37.8006 24.5298 37.9801 24.5199C38.163 24.54 38.3481 24.522 38.5237 24.4669C38.6992 24.4118 38.8615 24.3209 39.0001 24.1999L38.7301 23.7499C38.5259 23.9203 38.2659 24.0093 38.0001 23.9999C37.8947 24.003 37.7898 23.9839 37.6922 23.9438C37.5947 23.9037 37.5067 23.8434 37.4341 23.767C37.3614 23.6905 37.3057 23.5996 37.2705 23.5002C37.2354 23.4007 37.2216 23.295 37.2301 23.1899C37.2232 23.0846 37.2381 22.9791 37.2737 22.8798C37.3093 22.7806 37.365 22.6897 37.4372 22.6128C37.5093 22.5359 37.5966 22.4747 37.6934 22.4329C37.7902 22.3911 37.8946 22.3697 38.0001 22.3699C38.2395 22.3713 38.4717 22.4522 38.6601 22.5999L38.9301 22.1499C38.6697 21.9421 38.3429 21.8356 38.0101 21.8499C37.8306 21.84 37.651 21.8677 37.4829 21.9313C37.3147 21.9948 37.1617 22.0929 37.0337 22.219C36.9056 22.3452 36.8053 22.4967 36.7393 22.6639C36.6732 22.8311 36.6429 23.0103 36.6501 23.1899M43.8001 21.8499C43.6655 21.8457 43.5322 21.8779 43.4143 21.943C43.2965 22.0081 43.1983 22.1037 43.1301 22.2199V21.9099H42.5801V24.4599H43.1301V22.9999C43.1301 22.5799 43.3101 22.3499 43.6801 22.3499C43.7961 22.35 43.9111 22.3703 44.0201 22.4099L44.1901 21.8899C44.0653 21.8433 43.9332 21.8196 43.8001 21.8199M29.0001 22.0999C28.6993 21.9165 28.3523 21.8228 28.0001 21.8299C27.3601 21.8299 26.9401 22.1399 26.9401 22.6499C26.9401 23.1599 27.2501 23.3199 27.8201 23.3999H28.0801C28.3901 23.3999 28.5301 23.5199 28.5301 23.6599C28.5301 23.7999 28.3301 23.9699 27.9501 23.9699C27.6442 23.9796 27.3443 23.8843 27.1001 23.6999L26.8401 24.1399C27.1665 24.3633 27.5547 24.4787 27.9501 24.4699C28.6801 24.4699 29.1101 24.1199 29.1101 23.6399C29.1101 23.1599 28.7701 22.9499 28.2201 22.8699H27.9601C27.7201 22.8699 27.5201 22.7899 27.5201 22.6199C27.5201 22.4499 27.7101 22.3199 28.0101 22.3199C28.2884 22.321 28.5613 22.397 28.8001 22.5399L29.0001 22.0999ZM36.1601 21.8299C36.0244 21.827 35.8902 21.8597 35.771 21.9246C35.6517 21.9895 35.5514 22.0844 35.4801 22.1999V21.8899H34.9301V24.4399H35.4901V22.9999C35.4901 22.5799 35.6701 22.3499 36.0301 22.3499C36.1494 22.3488 36.2679 22.3692 36.3801 22.4099L36.5501 21.8899C36.4221 21.8424 36.2866 21.8186 36.1501 21.8199M31.4301 21.8799H30.5001V21.1099H29.9401V21.8799H29.4201V22.3899H29.9401V23.5499C29.9401 24.1399 30.1701 24.5499 30.8201 24.5499C31.0673 24.5481 31.3093 24.4789 31.5201 24.3499L31.3601 23.8799C31.2098 23.9639 31.0421 24.0119 30.8701 24.0199C30.5901 24.0199 30.5001 23.8499 30.5001 23.5899V22.3999H31.4101L31.4301 21.8799ZM23.1401 24.4299V22.8299C23.1401 22.5647 23.0347 22.3103 22.8472 22.1228C22.6597 21.9352 22.4053 21.8299 22.1401 21.8299C21.9637 21.8187 21.7875 21.8544 21.6294 21.9334C21.4713 22.0125 21.337 22.132 21.2401 22.2799C21.1529 22.1368 21.029 22.0197 20.8813 21.9405C20.7337 21.8614 20.5675 21.8232 20.4001 21.8299C20.2529 21.8228 20.1063 21.854 19.9748 21.9207C19.8433 21.9873 19.7314 22.0869 19.6501 22.2099V21.8899H19.1001V24.4399H19.6601V22.9999C19.6483 22.9129 19.6558 22.8245 19.6819 22.7407C19.708 22.6569 19.7522 22.5799 19.8113 22.5151C19.8704 22.4503 19.943 22.3992 20.024 22.3654C20.105 22.3317 20.1924 22.3162 20.2801 22.3199C20.6501 22.3199 20.8301 22.5599 20.8301 22.9899V24.4099H21.3901V22.9999C21.3799 22.9124 21.3888 22.8237 21.4162 22.74C21.4435 22.6563 21.4887 22.5795 21.5485 22.5148C21.6084 22.4502 21.6816 22.3993 21.763 22.3657C21.8444 22.332 21.9321 22.3164 22.0201 22.3199C22.4001 22.3199 22.5801 22.5599 22.5801 22.9899V24.4099L23.1401 24.4299Z" fill="#231F20"/>
              <path d="M48.2299 16.0001V15.6201H48.1299L48.0199 15.8801L47.9099 15.6201H47.8099V16.0001H47.8799V15.7101L47.9899 15.9601H48.0599L48.1599 15.7101V16.0001H48.2299ZM47.6199 16.0001V15.6901H47.7399V15.6201H47.4199V15.6901H47.5499V16.0001H47.6199Z" fill="#F49419"/>
              <path d="M37.2001 17.56H28.8V2.46997H37.2001V17.56Z" fill="#EB621D"/>
              <path d="M29.3301 9.99992C29.3323 8.54893 29.6637 7.11735 30.2995 5.81303C30.9352 4.5087 31.8586 3.36563 33.0001 2.46992C31.7967 1.52484 30.3848 0.88111 28.8822 0.592381C27.3795 0.303651 25.8296 0.37829 24.3617 0.810077C22.8937 1.24186 21.5503 2.01829 20.4433 3.07463C19.3363 4.13097 18.4978 5.43662 17.9978 6.88275C17.4977 8.32888 17.3506 9.87358 17.5687 11.3881C17.7868 12.9026 18.3637 14.3431 19.2514 15.5894C20.1391 16.8357 21.3119 17.8517 22.6719 18.5529C24.032 19.254 25.5399 19.6198 27.0701 19.6199C29.2225 19.6219 31.3124 18.8959 33.0001 17.5599C31.8535 16.6621 30.9269 15.5144 30.2909 14.2043C29.6549 12.8942 29.3263 11.4562 29.3301 9.99992Z" fill="#E41522"/>
              <path d="M48.53 9.99994C48.5359 11.8035 48.033 13.5722 47.0792 15.1029C46.1253 16.6336 44.7592 17.8643 43.1375 18.6537C41.5159 19.4431 39.7045 19.7592 37.9114 19.5657C36.1182 19.3723 34.4159 18.6771 33 17.5599C34.1436 16.6627 35.0683 15.5173 35.7042 14.2102C36.34 12.9031 36.6704 11.4685 36.6704 10.0149C36.6704 8.56138 36.34 7.12683 35.7042 5.81973C35.0683 4.51263 34.1436 3.36718 33 2.46994C34.4151 1.35844 36.114 0.667014 37.9031 0.474526C39.6921 0.282037 41.4993 0.596238 43.1184 1.38129C44.7375 2.16634 46.1034 3.39064 47.0602 4.91453C48.017 6.43842 48.5263 8.20056 48.53 9.99994Z" fill="#F59E1F"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="66" height="25" viewBox="0 0 66 25" fill="none">
              <path d="M44.2699 7.91993C44.6892 7.91993 45.0991 7.7956 45.4477 7.56265C45.7964 7.3297 46.0681 6.9986 46.2285 6.61122C46.389 6.22384 46.431 5.79758 46.3492 5.38634C46.2674 4.9751 46.0655 4.59735 45.769 4.30087C45.4725 4.00438 45.0947 3.80247 44.6835 3.72067C44.2723 3.63887 43.846 3.68085 43.4586 3.84131C43.0713 4.00177 42.7402 4.27349 42.5072 4.62212C42.2743 4.97076 42.1499 5.38064 42.1499 5.79993C42.1499 6.36219 42.3733 6.90142 42.7709 7.299C43.1684 7.69658 43.7077 7.91993 44.2699 7.91993ZM27.9999 9.05993C27.4231 10.5867 26.595 12.0063 25.5499 13.2599V4.64993L21.1199 5.51993V21.1399H25.5499V16.3099C26.4387 17.8096 27.0866 19.4394 27.4699 21.1399H32.7799C32.0641 18.9818 31.1327 16.9013 29.9999 14.9299C31.3672 13.1672 32.4194 11.1812 33.1099 9.05993H27.9999ZM39.6999 8.89993C35.6999 9.02993 33.6999 10.8099 33.6999 14.3499V21.1399H37.9999V15.5999C37.9999 13.4799 38.2799 12.5999 40.7999 12.4899V8.99993C40.4372 8.93239 40.0689 8.89891 39.6999 8.89993ZM13.6999 10.7799C13.1599 10.7799 11.8999 10.6699 11.8999 9.52993C11.8999 8.16993 13.7099 8.16993 14.3899 8.16993C15.6941 8.22854 16.985 8.45713 18.2299 8.84993C18.2299 8.84993 18.8499 9.06993 19.3699 9.28993H19.4199V5.55993H19.3599C17.5542 4.91869 15.6454 4.61695 13.7299 4.66993C8.87992 4.66993 7.16992 7.48993 7.16992 9.90993C7.16992 11.2999 7.75992 14.5799 13.3099 14.9099C13.7799 14.9099 15.0299 15.0099 15.0299 16.1799C15.0299 17.1799 14.0299 17.7199 12.2899 17.7199C10.6391 17.7062 9.00497 17.3875 7.46992 16.7799V20.6299C9.34315 21.0978 11.2694 21.3197 13.1999 21.2899C17.9399 21.2899 20.0599 18.6199 20.0599 15.9699C20.0799 12.9999 17.6999 11.0499 13.7199 10.7799H13.6999ZM42.0999 21.1399H46.3999V9.07993H42.0999V21.1399ZM54.5099 5.41993V21.1399H58.8099V4.64993L54.5099 5.41993ZM48.2399 5.41993L52.5399 4.64993V21.1399H48.2399V5.41993Z" fill="url(#paint0_linear_659_153)"/>
              <defs>
                <linearGradient id="paint0_linear_659_153" x1="31.2299" y1="1.88993" x2="35.1099" y2="23.6299" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#6A1F5F"/>
                  <stop offset="1" stop-color="#4D255B"/>
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>
      </section>
      <!-- Banking option ends here -->
      <!-- availaibe games here -->
      <section>
        <div class="custom-container py-10">
          <h1 class="text-lg py-2">Available Games</h1>
          <div class="banks flex flex-wrap gap-2">
            <?php
            $games=$review['available_games'];
            $games=explode(',',$games);
            foreach ($games as $key => $value) {
             ?>
              <a href="javascript();"  rel="noopener noreferrer" class="py-2 px-6 border rounded-full text-sm text-center font-semibold border-black"><?php echo $value;?></a>
              <?php
            }
            ?>


            
            
          </div>
        </div>
      </section>
      <!-- availaible games ends here -->

      <!-- Expert View -->
      <section>
        <div class="custom-container ">
          <div class="inner-content bg-[#002971] border rounded-md py-10 px-12 md:py-24 md:px-32 flex flex-col gap-6">
               <div>
                <h1 class="text-white text-3xl font-extrabold tracking-wide">Expert Review about <strong class="text-yellow-500"> Casino Days</strong></h1>
               </div>

               <div class="second_2 flex justify-start items-center gap-2">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 82 82" fill="none">
                    <circle cx="41" cy="41" r="41" fill="#D9D9D9"/>
                  </svg>
                </div>
                <div>
                  <h6 class="text-white text-lg"><?php echo $review['reviewer_name']?>  | Casino tested on <?php echo $review['date']?></h6>
                </div>
              </div>

              <div class="third_3 md:flex flex-col gap-4">
                <div class="about-part px-6 py-4 md:py-8 md:px-10 bg-[#193E7F] border rounded-md border-transparent flex flex-col gap-4">
                   <h1 class="text-yellow-500 font-semibold text-2xl">About Casino</h1>
                   <div class="text-white">
                   <?php echo htmlspecialchars_decode($review['about'])?>
                   </div>
                   
                </div>
                <div class="compare_part md:flex gap-4">
                     <div class="positive md:w-2/4 bg-[#193E7F] border rounded-md border-transparent py-4 px-6 md:py-9 md:px-10 flex flex-col gap-4">
                          <h1 class="text-yellow-500 font-bold p-0 text-2xl" >Positives</h1>
                          <?php foreach ($positive_aspects as $aspect):?>
                          <div class="listing flex justify-start items-center gap-2">
                            <div class="">
                              <img src="<?php echo $ascurl?>/images/Ok.png" width="30px" height="30px" alt="">
                            </div>
                          
                          <div class="">
                            <p class="text-white font-light"><?php echo $aspect->description?></p>
                          </div>
                          </div>
                          <?php endforeach?>

                          

                         


                        
                     </div>
                     <div class="negative md:w-2/4 bg-[#193E7F] border rounded-md border-transparent py-4 px-6 md:py-9 md:px-10 flex flex-col gap-4">
                      
                        <h1 class="text-yellow-500 font-bold p-0 text-2xl" >Negatives</h1>
                        <?php foreach ($negative_aspects as $aspect):?>
                        <div class="listing flex justify-start items-center gap-2">
                          <div class="">
                            <img src="<?php echo $ascurl?>/images/Multiply.png" width="30px" height="30px" alt="">
                          </div>
                        
                        <div class="">
                          <p class="text-white font-light"><?php echo $aspect->description?></p>
                        </div>
                        </div>

                        <?php endforeach?>

                                         
                     </div>
                </div>
              </div>

              <div class="four_4">
                <h1 class="text-white text-lg">Software and Games Collection</h1>
                <div class="flex flex-col gap-2">
                  <h5 class="text-white text-lg"> <strong class="text-yellow-500">★</strong> <?php echo $review['software_rating']?>/5</h5>
                  <div class="text-white">
                    <p class="text-pretty text-sm font-light"><?php echo $review['software_games_collection']?></p>
                  </div>
                </div>
               
              </div>
              <div class="four_4">
                <h1 class="text-white text-lg">Banking Options</h1>
                <div class="flex flex-col gap-2">
                  <h5 class="text-white text-lg"> <strong class="text-yellow-500">★</strong> <?php echo $review['banking_options_rating']?>/5</h5>
                  <div class="text-white">
                    <p class="text-pretty text-sm font-light"><?php echo $review['banking_options_details']?></p>
                  </div>
                </div>
               
              </div>

              <div class="four_4">
                <h1 class="text-white text-lg">Security and Fairness</h1>
                <div class="flex flex-col gap-2">
                  <h5 class="text-white text-lg"> <strong class="text-yellow-500">★</strong> <?php echo $review['security_fairness_rating']?>/5</h5>
                  <div class="text-white">
                    <p class="text-pretty text-sm font-light"><?php echo $review['security_fairness_details']?></p>
                  </div>
                </div>
               
              </div>

              <div class="four_4">
                <h1 class="text-white text-lg">Mobile Casino</h1>
                <div class="flex flex-col gap-2">
                  <h5 class="text-white text-lg"> <strong class="text-yellow-500">★</strong> <?php echo $review['mobile_casino_rating']?>/5</h5>
                  <div class="text-white">
                    <p class="text-pretty text-sm font-light"><?php echo $review['mobile_casino_details']?></p>
                  </div>
                </div>
               
              </div>

              <div class="four_4">
                <h1 class="text-white text-lg">Bonus and Promotions</h1>
                <div class="flex flex-col gap-2">
                  <h5 class="text-white text-lg"> <strong class="text-yellow-500">★</strong> <?php echo $review['bonus_promotions_rating']?>/5</h5>
                  <div class="text-white">
                    <p class="text-pretty text-sm font-light"><?php echo $review['bonus_promotions_details']?></p>
                  </div>
                </div>
               
              </div>
          </div>
        
        </div>
      </section>
      <!-- Expert View ends -->
      <!-- Joining Section -->
      <section>
        <div class="custom-container">
          <h1 class="text-2xl font-bold py-6 px-0">How to register on Casino Days Deposits</h1>
          <div class="main_part md:flex gap-3">
            <div class="first_half md:w-1/3 py-3 px-3 flex flex-col justify-center items-center gap-32 bg-[#FFFFFF] border rounded-md">
              <div class="text-2xl">
                <h4 class="text-[#002971] text-center font-bold"> Click on Join Casino Days</h4>
              </div>
               <div class="">
             <a href="<?php echo $review['mobile_app_url']?>">
              <img src="<?php echo  base_url('uploads/' . $review['mobile_app_screens_upload'])?>"  alt="">
             </a>
               
               </div>
            </div>
            <div class="second_half md:w-1/3 py-3 px-3  bg-[#FFFFFF] border rounded-md">
                  <div class="title_reg text-center px-4 py-3">
                    <h1 class="text-[#002971] text-pretty text-3xl font-bold tracking-wider text-center" >Fill Personal Details and Click on Agree and Continue</h1>
                  </div>

                  <!-- sign up -->
                  <div class="md:px-10 py-3">
                    <hr>
                    <h1 class="text-center text-2xl font-bold py-4">Sign Up</h1>
                    <hr>

                    <div class="form mt-5">
                    
                      <form action="">
                        <div class=" md:max-w-md md:mx-auto bg-white shadow-md w-full rounded md:px-8 pt-6 pb-8 mb-4 flex flex-col gap-4">
                          <p>Create your account in two easy steps.It only takes a minute
                          </p>
                          <div class="mb-4 mt-4 md:flex gap-4">
                            <div class="div">
                              <input class="shadow appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight outline-none ring-0 focus:outline-none focus:shadow-outline" type="text" placeholder="First Name">
                            </div>
                          <div class="mt-2 md:mt-0">
                            <input class="shadow appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Last Name">
                          </div>
                           
                          </div>
                         
                          <div class="mb-4">
                            <input class="shadow appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" placeholder="Email Address">
                          </div>
                          <div class="mb-4">
                            <input class="shadow appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" placeholder="Password">
                          </div>
                          <div class="mb-4">
                            <select class="block appearance-none  w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded-full shadow leading-tight focus:outline-none focus:shadow-outline">
                              <option>Choose Country/Region</option>
                              <!-- Add your options here -->
                              <option class="bg-indigo-500 text-white hover:bg-indigo-600 hover:text-white">India</option>
                              <option class="bg-indigo-500 text-white hover:bg-indigo-600 hover:text-white">Canada</option>
                              <option class="bg-indigo-500 text-white hover:bg-indigo-600 hover:text-white">United Kingdom</option>
                              <!-- Add more options as needed -->
                            </select>
                          </div>
                          <div class="mb-4">
                           <p class="text-sm text-slate-400">
                            By clicking "Agree", you agree to our Terms and Conditions. Please review our <span><a class="text-indigo-600 cursor-pointer">Terms and Conditions</a></span> carefully before proceeding. You also consent to our <span><a class="text-indigo-600 cursor-pointer">Privary Policy and Knowledge</a></span> that you have read and understood our Cookie Policy.

                           </p>
                          </div>
                          <div class="flex items-center justify-center">
                            <button class="bg-indigo-600 hover:bg-indigo-700 text-white  py-2 px-8 w-full rounded focus:outline-none focus:shadow-outline" type="button">
                              Agree and Continue
                            </button>
                          </div>
                          <div class="mt-4">
                            <span class="text-sm font-light ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad laboriosam nisi aliquam tenetur voluptatum debitis? Culpa sit sapiente ab quidem?</span>
                          </div>
                         
                        </div>
                        
                      </form>
                    </div>

                  </div>
            </div>

            <div class="second_half md:w1/3 ">
              
        </div>
          </div>
        </div>
      </section>
      <!-- End Joining Section -->