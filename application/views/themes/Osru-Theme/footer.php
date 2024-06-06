<?php 
   
    $ascurl = base_url().'application/views/themes/'.html_escape($default_theme).'/web-assets';
    $this->load->helper('url');
   


?>
<!-- Footer -->
<footer class="mb-[100px] lg:mb-0 bg-secondary">
    <div class="custom-container">
      
      <nav class="py-4 md:flex justify-between items-center gap-3">
        <ul>
          <li>
            <a href="<?php echo base_url('/')?>">
              <img src="<?php echo $ascurl?>/images/header/logo.png" alt="sports rani logo" class="w-[168px] lg:w-auto" />
            </a>
          </li>
        </ul>
        <ul class="primary-menu hidden lg:flex items-center text-sm">
          <li>
            <a class="" href="<?php echo base_url('/')?>">Home</a>
          </li>
          <li>
            <a class="" href="<?php echo base_url('tips/prediction')?>">Review & Prediction</a>
          </li>
          <li>
            <a class="" href="<?php echo base_url('cricket/cricketnews')?>">Cricket</a>
          </li>
          <li>
            <a class="" href="<?php echo base_url('football/index')?>">Football</a>
          </li>
        </ul>
        <ul>
          <li class="flex text-white gap-1 md:gap-2 text-sm font-light">
            <a href="">Terms</a>|
            <a href="">Condition</a>|
            <a href=""> Scoresope All right reserved 2024</a>
          </li>
        </ul>
      </nav>
      <div class="flex justify-center items-center text-center">
        <hr class="border-white w-52 py-2 ">
      </div>
     <div class="social-media">
      
      <div class="flex justify-center gap-4 py-6">
        <h6 class="text-white font-light text-sm">Follow Us</h6>
        <a href="https://www.facebook.com/sports-rani-1009090909090909/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <g id="facebook">
            <path id="Vector" d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            </svg>
        </a>
        <a href="https://www.instagram.com/sports_rani/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <g id="twitter">
            <path id="Vector" d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            </svg>
        </a>
        <a href="https://www.youtube.com/channel/UC-9090909090909090909" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M22.54 6.42C22.4212 5.94541 22.1792 5.51057 21.8386 5.15941C21.498 4.80824 21.0707 4.55318 20.6 4.42C18.88 4 12 4 12 4C12 4 5.11996 4 3.39996 4.46C2.92921 4.59318 2.50194 4.84824 2.16131 5.19941C1.82068 5.55057 1.57875 5.98541 1.45996 6.46C1.14518 8.20556 0.991197 9.97631 0.999961 11.75C0.988741 13.537 1.14273 15.3213 1.45996 17.08C1.59092 17.5398 1.83827 17.9581 2.17811 18.2945C2.51794 18.6308 2.93878 18.8738 3.39996 19C5.11996 19.46 12 19.46 12 19.46C12 19.46 18.88 19.46 20.6 19C21.0707 18.8668 21.498 18.6118 21.8386 18.2606C22.1792 17.9094 22.4212 17.4746 22.54 17C22.8523 15.2676 23.0063 13.5103 23 11.75C23.0112 9.96295 22.8572 8.1787 22.54 6.42Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9.75 15.02L15.5 11.75L9.75 8.47998V15.02Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <g id="linkedin">
            <path id="Vector" d="M16 8C17.5913 8 19.1174 8.63214 20.2426 9.75736C21.3679 10.8826 22 12.4087 22 14V21H18V14C18 13.4696 17.7893 12.9609 17.4142 12.5858C17.0391 12.2107 16.5304 12 16 12C15.4696 12 14.9609 12.2107 14.5858 12.5858C14.2107 12.9609 14 13.4696 14 14V21H10V14C10 12.4087 10.6321 10.8826 11.7574 9.75736C12.8826 8.63214 14.4087 8 16 8Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path id="Vector_2" d="M6 9H2V21H6V9Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path id="Vector_3" d="M4 6C5.10457 6 6 5.10457 6 4C6 2.89543 5.10457 2 4 2C2.89543 2 2 2.89543 2 4C2 5.10457 2.89543 6 4 6Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            </svg>
        </a>

     </div>
    </div>
  </footer>


  <!-- Mobile Floating Menu -->
  <div class="lg:hidden w-full h-[77px] p-4 fixed left-0 bottom-0 z-50 bg-secondary">
    <ul class="grid grid-cols-4 gap-2 text-center capitalize">
      <li>
        <a href="<?php echo base_url('tips/prediction')?>" class="">
          <div class="mx-auto -mt-[30px] w-[43px] h-[43px] bg-secondary rounded-full grid place-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <g id="sun" clip-path="url(#clip0_664_623)">
              <path id="Vector" d="M12 17C14.7614 17 17 14.7614 17 12C17 9.23858 14.7614 7 12 7C9.23858 7 7 9.23858 7 12C7 14.7614 9.23858 17 12 17Z" stroke="#F6BB17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path id="Vector_2" d="M12 1V3" stroke="#F6BB17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path id="Vector_3" d="M12 21V23" stroke="#F6BB17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path id="Vector_4" d="M4.21997 4.21997L5.63997 5.63997" stroke="#F6BB17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path id="Vector_5" d="M18.3601 18.3601L19.7801 19.7801" stroke="#F6BB17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path id="Vector_6" d="M1 12H3" stroke="#F6BB17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path id="Vector_7" d="M21 12H23" stroke="#F6BB17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path id="Vector_8" d="M4.21997 19.7801L5.63997 18.3601" stroke="#F6BB17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path id="Vector_9" d="M18.3601 5.63997L19.7801 4.21997" stroke="#F6BB17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs>
              <clipPath id="clip0_664_623">
              <rect width="24" height="24" fill="white"/>
              </clipPath>
              </defs>
              </svg>
          </div>
          <p class="mt-1 text-white text-xs">Review & Prediction</p>
        </a>
      </li>
      <li class="">
        <a href="<?php echo base_url('/')?>" class="<?php echo current_url()==base_url('/')?'bg-[#FFBC00]':''; ?>">
          <svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
            <script xmlns="" />
            <path
              d="M3.75 11.25L15 2.5L26.25 11.25V25C26.25 25.663 25.9866 26.2989 25.5178 26.7678C25.0489 27.2366 24.413 27.5 23.75 27.5H6.25C5.58696 27.5 4.95107 27.2366 4.48223 26.7678C4.01339 26.2989 3.75 25.663 3.75 25V11.25Z"
              stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M11.25 27.5V15H18.75V27.5" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" />
            <script xmlns="" />
          </svg>


          <p class="mt-1 text-[#F1F5F9] text-[10px]">home</p>
        </a>
      </li>

      <li>
        <a href="<?php echo base_url('cricket/cricketnews')?>" class="<?php echo current_url()==base_url('cricket/cricketnews')?'bg-[#FFBC00]':''; ?>">
         <img src="<?php echo $ascurl?>/images/Scoreboard.png" class="m-auto " />
          <p class="mt-1 text-[#F1F5F9] text-[10px]">cricket</p>
        </a>
      </li>

    

      <li>
        <a href="<?php echo base_url('football/index')?>" class="<?php echo current_url()==base_url('football/index')?'bg-[#FFBC00]':''; ?>">
          <img src="<?php echo $ascurl?>/images/football.png" class="m-auto" />
          <p class="mt-1 text-[#F1F5F9] text-[10px]">Football</p>
        </a>
      </li>


      

    </ul>
  </div>

  <!-- scripts -->

  <script src="./jquery-3.6.4.min.js"></script>
            <script src="./imageCarousel.js"></script>
            <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
            </script>

            <script>
              function shareContent(title, text, url) {
                if (navigator.share) {
                  navigator.share({
                      title: title,
                      text: text,
                      url: url
                    })
                    .then(() => console.log('Content shared successfully'))
                    .catch((error) => console.error('Error sharing content:', error));
                } else {
                  console.error('Web Share API not supported');
                }
              }

              function handleOption(select) {
                var selectedValue = select.options[select.selectedIndex].value;

                if (selectedValue) {
                  window.location.href = selectedValue;
                }
              }
            </script>