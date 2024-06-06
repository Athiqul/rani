 <?php 
     $ascurl = base_url().'application/views/themes/'.html_escape($default_theme).'/web-assets';
     $this->load->helper('url');
    
?>


        <header class="bg-secondary">
    <div class="custom-container !overflow-visible">
      <nav class="py-4 flex justify-between items-center gap-3">
        <ul>
          <li>
            <a href="<?php echo base_url()?>">
              <img src="<?php echo $ascurl;?>/images/header/logo.png" alt="sports rani logo" class="w-[168px] lg:w-auto" />
            </a>
          </li>
        </ul>
        <ul class="primary-menu hidden lg:flex items-center">
          <li>
            <a class="<?php echo current_url()==base_url('/')?'active_color':''; ?>" href="<?php echo base_url('/')?>">Home</a>
          </li>
          <li class="relative">
          <button type="button"  class="text-white font-semibold focus:outline-none" id="dropdownButton">
                            Review & Prediction
                            <!-- Dropdown Arrow Icon -->
                            <svg class="w-4 h-4 inline-block ml-1 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <ul class="dropdown-menu hidden absolute bg-secondary text-black flex flex-col gap-2   mt-2  shadow-lg rounded-lg "
                            id="dropdownMenu">
                            
                            <li><a href="<?php echo base_url().'tips/prediction?page=top-betting-sites&value=top'?>" class="block text-sm font-light mx-w-full whitespace-nowrap overflow-hidden ">Top Betting Sites</a></li>
                            <li><a href="<?php echo base_url().'tips/prediction?page=cricket-betting-sites&value=cricket'?>" class="block text-sm font-light mx-w-full whitespace-nowrap overflow-hidden">Cricket Betting Sites</a></li>
                            <li><a href="<?php echo base_url().'tips/prediction?page=football-betting-sites&value=football'?>" class="block text-sm font-light mx-w-full whitespace-nowrap overflow-hidden">Football Betting Sites</a></li>
                            <li><a href="<?php echo base_url().'tips/prediction?page=casino-betting-sites&value=casino'?>" class="block text-sm font-light mx-w-full whitespace-nowrap overflow-hidden">Casino Betting Sites</a></li>
                            <li><a href="<?php echo base_url().'tips/prediction?page=mobile-betting-sites&value=mobile'?>" class="block text-sm font-light mx-w-full whitespace-nowrap overflow-hidden">Mobile Betting Sites</a></li>
                            <li><a href="<?php echo base_url().'tips/prediction?page=certified-betting-sites&value=certified'?>" class="block text-sm font-light mx-w-full whitespace-nowrap overflow-hidden">Certified Casino</a></li>
                        </ul>
           
          </li>
          <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButton = document.getElementById('dropdownButton');
            const dropdownMenu = document.getElementById('dropdownMenu');

            // Toggle dropdown menu visibility
            dropdownButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });

            // Hide dropdown menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
          <li>
            <a class="<?php echo current_url()==base_url('/cricket/cricketnews')?'active_color':''; ?>" href="<?php echo base_url('cricket/cricketnews')?>">Cricket</a>
          </li>
          <li>
            <a class="<?php echo current_url()==base_url('/football/index')?'active_color':''; ?>" href="<?php echo base_url('football/index')?>">Football</a>
          </li>
        </ul>
        <ul>
          <li>
      
            <a href="<?php echo base_url('sign/signin') ?>"
              class="flex items-center gap-2.5  lg:py-3 px-4 lg:px-6 rounded-[20px] bg-primary">
              <span class="font-semibold text-[15px] lg:text-base">Sign in</span>
              <img src="<?php echo $ascurl;?>/images/header/user.png" alt="user icon" class="w-5 lg:w-auto" />
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Only mobile device section -->

  </header>

